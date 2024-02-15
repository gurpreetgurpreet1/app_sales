
<!-- Modal -->
<div id="myLeadModal" class="modal">

  <div class="modal-dialog">

    <div class="modal-content">
        
        <div class="modal-header text-center">
           
            <h3 class="modal-title text-center">Add Lead</h3>
        </div>
        
        <form action="/lead" method="post" enctype="multipart/form-data">
        <div class="modal-body">

            <div class="container">

                    <div class="row">

                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                                <b for="category">Name:</b>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                                <b for="category">Email:</b>
                                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>

                        </div>

                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                            <b for="category">Phone:</b>
                                <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                            </div>


                        
                        </div>

                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                            <b for="category">Country:</b>
                                <input type="text" class="form-control" id="country" placeholder="Enter country" name="country">
                            </div>


                        
                        </div>

                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                            <b for="category">State:</b>
                            <input type="text" class="form-control" id="state" placeholder="Enter state" name="state">
                            </div>


                        
                        </div>  
                        
                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                            <b for="category">City:</b>
                                <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
                            </div>


                        
                        </div>

                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                            <b for="category">Pin:</b>
                            <input type="text" class="form-control" id="pin" placeholder="Enter pin" name="pin">
                            </div>

                        </div>


                        <div class="col-md-6 col-lg-6">

                        <div class="form-group">
                        <b for="category">Address:</b>
                        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
                        </div>

                        
                        </div>

                        <div class="col-md-6 col-lg-6">

                        
                            <div class="form-group">
                            <b for="sel1">Select Product :</b>
                                <select class="form-control" name="product" id="sel1">
                                @foreach($detail as $key => $value) 
                                    <option value="<?php echo $value['id']; ?>"><?php echo $value['name'];?></option>
                                @endforeach
                                </select>
                            </div>

                        
                        </div>

                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                                <b for="sel1">Select Source :</b>
                                <select class="form-control" name="source_id" id="sel1">
                                @foreach($data as $key => $value)
                                    <option value="<?php echo $value['id']; ?>"><?php echo $value['name'];?></option>
                                @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-6">
                            
                            <div class="form-group">
                            <b for="category">Picture:</b>
                            <input type="file" class="form-control" id="Picture" placeholder="Enter picture" name="picture">
                            </div>
                                @csrf

                        </div>




                    </div>



            </div>


        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">SAVE</button>
         <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
      </form>


    </div>

    </div>

  