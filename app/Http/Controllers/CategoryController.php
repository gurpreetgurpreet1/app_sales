<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productCategory;

class CategoryController extends Controller
{
     public function index(Request $request){

        $success_msg =  $request->session()->get('success');
        $error_msg =  $request->session()->get('error');
  
          return view('pages.category',['success_msg' => $success_msg,'error_msg' => $error_msg]);
  
       }
      public function add(Request $request){
  
        $this->validate($request,[
  
          'category' => ['required','unique:product_category'],
           
       ]);

       $student = new productCategory();
       $student->category = $request->input('category');
  
       if($student->save()){
  
        $request->session()->flash('success','Add Category created successfully');
        
      } else {
  
        $request->session()->flash('error','something went wrong. Please try again!');
  
      }
  
      return redirect('/category');
        
      }

}
