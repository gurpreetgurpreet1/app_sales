
<!-- Modal -->
<div id="myLeadModal" class="modal">

  <div class="modal-dialog">

    <div class="modal-content">
        
        <div class="modal-header text-center">
           
            Add Lead
        </div>
        
        <form action="/lead" method="post" enctype="multipart/form-data">
        <div class="modal-body">

            <div class="container">

                    <div class="row">

                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                                <p for="category">Name:</p>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                                <p for="category">Email:</p>
                                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>

                        </div>

                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                                <p for="category">Phone:</p>
                                <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                            </div>


                        
                        </div>

                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                                <p for="category">Country:</p>
                                <input type="text" class="form-control" id="country" placeholder="Enter country" name="country">
                            </div>


                        
                        </div>

                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                            <p for="category">State:</p>
                            <input type="text" class="form-control" id="state" placeholder="Enter state" name="state">
                            </div>


                        
                        </div>  
                        
                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                            <p for="category">City:</p>
                                <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
                            </div>


                        
                        </div>

                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                            <p for="category">Pin:</p>
                            <input type="text" class="form-control" id="pin" placeholder="Enter pin" name="pin">
                            </div>

                        </div>


                        <div class="col-md-6 col-lg-6">

                        <div class="form-group">
                        <p for="category">Address:</p>
                        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
                        </div>

                        
                        </div>

                        <div class="col-md-6 col-lg-6">

                        
                            <div class="form-group">
                            <p for="sel1">Select Product :</p>
                                <select class="form-control" name="product" id="sel1">
                                @foreach($detail as $key => $value) 
                                    <option value="<?php echo $value['id']; ?>"><?php echo $value['name'];?></option>
                                @endforeach
                                </select>
                            </div>

                        
                        </div>

                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                                <p for="sel1">Select Source :</p>
                                <select class="form-control" name="source_id" id="sel1">
                                @foreach($data as $key => $value)
                                    <option value="<?php echo $value['id']; ?>"><?php echo $value['name'];?></option>
                                @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-6">
                            
                            <div class="form-group">
                            <p for="category">Picture:</p>
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

  