<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lead;

class DashboardController extends Controller
{
    public function index(){

        $today_date = date('Y-m-d');
        //dd($today_date);
        $data = lead::whereDate('created_at','=',$today_date)->get();
        return view('pages.dashboard' , ['data' => $data]);
    
    }

}