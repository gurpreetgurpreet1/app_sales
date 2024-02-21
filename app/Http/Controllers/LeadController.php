<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lead;

use App\Models\source;
use App\Models\product;
use App\Models\followup;

class LeadController extends Controller
{
  
  // public function index(){

  //   return view('pages.dashboard');

  // }
  public function form(Request $request){

    $success_msg =  $request->session()->get('success');
    $error_msg =  $request->session()->get('error');

    $data = source::all();
    $detail = product::all();
    $lead = lead::simplePaginate(10);

    return view('pages.lead',['success_msg' => $success_msg,'error_msg' => $error_msg ,'data' => $data , 'detail' => $detail , 'lead' => $lead]);
  }

public function add(Request $request){

  // Print_r($request->all());die;

      $this->validate($request,[

        'name' => ['required'],
        'email' => ['required'],
        'phone' => ['required'],
        'country' => ['required'],
        'state' => ['required'],
        'city' => ['required'],
        'pin' => ['required'],
        'address' => ['required'],
        'product' => ['required'],
        'source_id' => ['required'],
        'picture' => ['required'],
        'next_meeting' => ['required'],
        'status' => ['required'],
        'remarks' => ['required'],

         'attachment' => ['required'],
          
      ]);

      $image = $request->file('picture');
      $imageName = time() . '.' . $image->getClientOriginalExtension();
      $imagePath = public_path('images'); 
      $image->move($imagePath, $imageName);

      $lead = new lead();
      $lead->name = $request->input('name');
      $lead->email = $request->input('email');
      $lead->phone = $request->input('phone');
      $lead->country = $request->input('country');
      $lead->state = $request->input('state');
      $lead->city = $request->input('city');
      $lead->pin = $request->input('pin');
      $lead->address = $request->input('address');
      $lead->product = $request->input('product');
      $lead->source_id = $request->input('source_id');
      $lead->next_meeting = $request->input('next_meeting');
      $lead->status = $request->input('status');
      $lead->remarks = $request->input('remarks');
      $lead->picture = $imageName;

      if($lead->save()){

        $request->session()->flash('success',' Lead created successfully');

      } else {

         $request->session()->flash('error','something went wrong. Please try again!');

      }
       $id = $lead->id;

      $follow = new followup();
      $follow->lead_id = $id;
      $follow->status = $request->input('status');
      $follow->remarks = $request->input('remarks');
      // $follow->attachment = $request->input('attachment');

      if($follow->save()){

        $request->session()->flash('success',' Lead created successfully');

      } else {

         $request->session()->flash('error','something went wrong. Please try again!');

      }

   return redirect('/lead');
  
}
  public function deleteLead($id=null){

    $data = lead::find($id);
    $data->delete();
    return redirect('/lead')->with('success','Entry deleted successfully!');

  }
  public function edit(Request $req, $id=null){

    $data = lead::find($id);

    $output = source::all();
    $detail = product::all();

    return view ('pages.editLead',['editDetail' => $data ,'data' => $output ,'detail' => $detail]);

  }
  public function update(Request $request){

    $image = $request->file('picture');     

  if($image){

    $image = $request->file('picture');
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $imagePath = public_path('images'); 
    $image->move($imagePath, $imageName);

  }  else {
     $imageName = $request->pic;
  }

    $product = lead::find($request->id);
    $product->name = $request->name;
    $product->email = $request->email;
    $product->phone = $request->phone;
    $product->country = $request->country;
    $product->state = $request->state;
    $product->city = $request->city;
    $product->pin = $request->pin;
    $product->address = $request->address;
    $product->product = $request->product;
    $product->source_id = $request->source_id;
    $product->picture = $imageName;
    $product->next_meeting = $request->next_meeting;
    $product->save();

    return redirect('/lead/'.$request->id)->with('success','Entry edit successfully!');

  }

}