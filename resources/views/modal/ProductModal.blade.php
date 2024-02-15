<div id="myProductModal" class="modal">

  <div class="modal-dialog">

    <div class="modal-content">
        
        <div class="modal-header text-center">
           
            <h3 class="modal-title text-center">Add Product</h3>
        </div>

     
 <form action="/product" method="post" enctype="multipart/form-data">
 
 <div class="modal-body">

   <div class="container">

        <div class="row">

 <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <b for="sel1">Select Category :</b>
            <select class="form-control" name="category" id="sel1">
            @foreach($output as $key => $value)
                <option value="<?php echo $value['id']; ?>"><?php echo $value['category'];?></option>
            @endforeach
            </select>
        </div>
</div>
<div class="col-md-6 col-lg-6">
     <div class="form-group">
      <b for="category">Name:</b>
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
     </div>
</div>

<div class="col-md-6 col-lg-6">
     <div class="form-group">
      <b for="photo">Photo:</b>
        <input type="file" class="form-control" id="photo" placeholder="Enter Photo" name="photo">
    </div>
</div>
<div class="col-md-6 col-lg-6">
    <div class="form-group">
      <b for="price">Price:</b>
        <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price">
    </div>
</div>
      @csrf
 
<div class="modal-footer">
    <button type="submit" class="btn btn-primary">SAVE</button>  
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

</div>
    </form>

      </div>
    </div>
</div>