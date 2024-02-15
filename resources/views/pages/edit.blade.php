@extends('layouts.mainlayout')
@section('content')

<div class="container">
  <h1>EDIT PRODUCT</h1>
  
 <?php if(isset($error_msg)) { ?>

 <p style="color:red"><?php echo $error_msg; ?></p> 

<?php } ?>

<?php if(isset($success_msg)) { ?>

<div class="alert alert-success" role="alert"> 
  <p style="color:green"><?php echo $success_msg; ?></p>
</div>
<?php } ?>

<form action="/product/edit" method="post" enctype="multipart/form-data">

<?php  if(count($errors) > 0) { ?>

<?php foreach($errors->all() as $key => $val){ ?>

<div class="alert alert-danger" role="alert"> 
 <p style="color:red"><?php echo $val; ?></p>
</div>

<?php  } ?>

<?php } ?>

<input type="hidden" class="form-control" id="name" name="id" value="{{ $edit->id }}">

  <div class="form-group">
    <b for="sel1">Select Category :</b>
      <select class="form-control" name="category" id="sel1">
      @foreach($output as $key => $value)
        <option value="<?php echo $value['id']; ?>"><?php echo $value['category'];?></option>
      @endforeach
      </select>
  </div>
    <div class="form-group">
      <b for="category">Name:</b>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ $edit->name }}">
    </div>
    <div class="form-group">
      <b for="photo">Photo:</b>
      <img style="width:80px;height:100px;" src="/images/<?php echo $edit['photo']; ?>"/>
      <input type="file" class="form-control" id="photo" placeholder="Enter Photo" name="photo" value="{{ $edit->photo }}">

      <input type="hidden" class="form-control" id="photo" placeholder="Enter image" name="image" value="{{ $edit->photo }}">
    </div>
    <div class="form-group">
      <b for="price">Price:</b>
      <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" value="{{ $edit->price }}">
    </div>
    @csrf
     <button type="submit" class="btn btn-primary">SAVE</button> 
  </form>
</div>

@endsection