<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lead;
use App\Models\followup;

class DashboardController extends Controller
{
    public function index(Request $req){

        $today_date = date('Y-m-d');
        // dd($today_date);

        $search_output = $req->session()->get('data');

        // print_r($search_output);
        if($search_output){
        
          $data = $search_output;

        } else{
      
          $data = lead::whereDate('created_at','=',$today_date)->get();
        }

        return view('pages.dashboard' , ['data' => $data ]);
    
    }

    public function output(Request $req){

      $out = $_POST['leadDate'];
      $data = lead::whereDate('created_at','=',$out)->get();

       if($data){    
           $req->session()->flash('data', $data);
        }
        
        // dd($data);
      return redirect('/dashboard');

    }
    public function history($id=null){

      if($id){

        $lead = lead::find($id);

        return view('pages.history',['lead' => $lead]);
      }
      return redirect('/dashboard');

        
     
    }


}