<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\productCategory;

class ProductController extends Controller
{
    public function index(Request $request){

        $success_msg =  $request->session()->get('success');
        $error_msg =  $request->session()->get('error');

        $productList = product::simplePaginate(10);
        $data = productCategory::all();

     return view('pages.product',['success_msg' => $success_msg,'error_msg' => $error_msg ,'productList' => $productList,'output' => $data ]);
  
       }
      public function add(Request $request){

        // Print_r($request->all());die;
  
        $this->validate($request,[
  
          'category' => ['required'],
          'name' => ['required'],
          'photo' => ['required'],
          'price' => ['required'],
           
       ]);
       $image = $request->file('photo');
       $imageName = time() . '.' . $image->getClientOriginalExtension();
       $imagePath = public_path('images'); 
       $image->move($imagePath, $imageName);

       $student = new product();
       $student->category = $request->input('category');
       $student->name = $request->input('name');
       $student->photo = $imageName;
       $student->price = $request->input('price');
  
       if($student->save()){
  
        $request->session()->flash('success',' Product created successfully');
        
      } else {
  
        $request->session()->flash('error','something went wrong. Please try again!');
  
      }
  
      return redirect('/product');
        
      }
      public function delete($id=null){

        $data = product::find($id);
        $data->delete();
        return redirect('/product')->with('success','Entry deleted successfully!');

      }
      public function edit($id=null){

        $data = product::find($id);
        $d = productCategory::all();

         return view ('pages.edit',['edit' => $data , 'output'=> $d]);
      }

      public function updateProduct(Request $request){

        $image = $request->file('photo');     

      if($image){

        $image = $request->file('photo');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = public_path('images'); 
        $image->move($imagePath, $imageName);

      }  else {
         $imageName = $request->image;
      }

        $product = product::find($request->id);
        $product->category = $request->category;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->photo = $imageName;
        $product->save();

        return redirect('/product/edit/'.$request->id)->with('success','Entry edit successfully!');

      }

}
