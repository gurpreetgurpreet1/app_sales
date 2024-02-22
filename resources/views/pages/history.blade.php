@extends('layouts.mainlayout')
@section('content')

<div class="container-fluid">

    <div class="card shadow mb-4">
            <div class="card-header py-3">
               
        <div class="row">
        <h1 class="h3 mb-2 text-gray-800 text-center">Followup History</h1><hr/><br/>

        <div class="col-md-4">
            <h6 class="m-2 font-weight-bold text-primary">Name : <spam> <?php echo $lead->name; ?> </spam></h6>
        </div>

        <div class="col-md-4">
            <h6 class="m-2 font-weight-bold text-primary">Email : <spam><?php echo $lead->email; ?></spam></h6>
        </div>

        <div class="col-md-4">
            <h6 class="m-2 font-weight-bold text-primary">Phone : <spam><?php echo $lead->phone; ?></spam></h6>
        </div>

        <div class="col-md-4">
            <h6 class="m-2 font-weight-bold text-primary">Country : <spam><?php echo $lead->country; ?></spam></h6>
        </div>

        <div class="col-md-4">
            <h6 class="m-2 font-weight-bold text-primary">State : <spam><?php echo $lead->status; ?></spam></h6>
        </div>

        <div class="col-md-4">
            <h6 class="m-2 font-weight-bold text-primary">City : <spam><?php echo $lead->city; ?></spam></h6>
        </div>

        <div class="col-md-4">
            <h6 class="m-2 font-weight-bold text-primary">PinCode : <spam><?php echo $lead->pin; ?></spam></h6>
        </div>

        <div class="col-md-4">
            <h6 class="m-2 font-weight-bold text-primary">Address : <spam><?php echo $lead->address; ?></spam></h6>
        </div>

        <div class="col-md-4">
            <h6 class="m-2 font-weight-bold text-primary">Source : <spam><?php echo $lead->getSource->name; ?></spam></h6>
        </div>

        <div class="col-md-4">
            <h6 class="m-2 font-weight-bold text-primary">Product : <spam><?php echo $lead->getProduct->name; ?></spam></h6>
        </div>

        <div class="col-md-4">
            <h6 class="m-2 font-weight-bold text-primary">Remarks : <spam><?php echo $lead->remarks; ?></spam></h6>
        </div>

        <div class="col-md-4">
            <h6 class="m-2 font-weight-bold text-primary">Status : <spam><?php echo $lead->status; ?></spam></h6>
        </div>

        <div class="col-md-4">
            <h6 class="m-2 font-weight-bold text-primary">Image : <spam><img style="width:30px;height:40px;" src="/images/<?php echo $lead->picture; ?>"/></spam></h6>
        </div>


    </div> 
            </div>
            <div class="card-body">
                            <div class="table-responsive">
                                <Button class="btn btn-primary wcp-pull-right">Update</Button>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                     <tr>
                                        <th>Next Meeting</th>
                                        <th>Remarks</th>
                                        <th>Status</th>
                                        <th>Attachment</th>
                                    </tr>
                                    </thead>
                                  
                                    <tbody>
                        
                                        
                                    <?php foreach ($lead->getFollowup as $key => $val) { 
        
                                        if($val->is_pending == 0){
                                        ?>
                                <tr>
                                    <td><?php echo $val->next_meeting; ?></td>
                                    <td><?php echo $val->remarks ?></td>
                                    <td><?php echo $val->status;?></td>
                                </tr>

                                <?php
                                    }else{
                                ?>

                                <div class="message"> </div>
                                <div class="wcp-error"> </div>
                                <input type="hidden" class="form-control followup_id" id="followup_id"  value="<?php echo $val->id; ?>">
                                <tr>
                                <td>
                                   <div class="form-group">  
                                        <!-- <b for="status">Remarks:</b> -->
                                        <input type="date" class="form-control pending_next_meeting" id="next_meeting" placeholder="Enter Next_meeting" name="next_meeting">
                                    </div>
                                    </td>

                                    <td>
                                        <div class="form-group">  
                                            <!-- <b for="status">Remarks:</b> -->
                                            <input type="text" class="form-control pending_remarks" id="remarks" placeholder="Enter remarks" name="remarks">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="form-group">  
                                            <select class="form-control pending_status" name="status" id="sel1">
                                                <option>cold</option>
                                                <option>hot</option>
                                                <option>nice</option>
                                                <option>warm</option>
                                                <option>immediate</option>
                                            </select>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="form-group">  
                                        <!-- <b for="attachment">Attachment:</b> -->
                                        <input type="file" class="form-control pending_attachment" id="attachment" placeholder="Enter attachment" name="attachment">
                                        </div>
                                    </td>
                                </tr>

                                <?php
                                    }}
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
       </div>
 
@endsection