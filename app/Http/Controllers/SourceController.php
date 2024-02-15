<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\source;

class SourceController extends Controller
{
    public function index(Request $request){

      $success_msg =  $request->session()->get('success');
      $error_msg =  $request->session()->get('error');

        return view('pages.source',['success_msg' => $success_msg,'error_msg' => $error_msg]);

     }

    public function add(Request $request){

      $this->validate($request,[

        'name' => ['required','unique:sources'],
         
     ]);
     $student = new source();
     $student->name = $request->input('name');

     if($student->save()){

      $request->session()->flash('success','Add Source created successfully');
      
    } else {

      $request->session()->flash('error','something went wrong. Please try again!');

    }

      return redirect('/source');
      
    }
 }

