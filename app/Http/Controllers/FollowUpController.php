<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\followup;

class FollowUpController extends Controller
{
    public function output(Request $req){

        $this->validate($req,[

            'next_meeting' => ['required'],
            'remarks' => ['required'],
            'status' => ['required'],
            'followup_id' => ['required'],
            
          ]);

        $next_meeting = $req['next_meeting'];
        $remarks = $req['remarks'];
        $status = $req['status'];
        $followup_id = $req['followup_id'];
        $is_pending = 0;

    
        $followup = followup::find($followup_id);
        $followup->next_meeting = $next_meeting;
        $followup->remarks = $remarks;
        $followup->status = $status;
        $followup->is_pending = $is_pending;
        $followup->save();

        $id = $followup->lead_id; 

        $follow = new followup();
        $follow->lead_id = $id;
       
        if($follow->save()){
  
            return response()->json([
                'is_success' => true, 
                'message' => 'followup updated successfully!'
            ], 200);
  
        }
  
        return response()->json([
            'is_success' => false, 
            'error' => 'Something went wrong!'
        ], 200);
  
    }

}
