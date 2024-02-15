@extends('layouts.mainlayout')
@section('content')

<div class="container">
  <h1>ADD SOURCE</h1>
  
 <?php if(isset($error_msg)) { ?>

 <p style="color:red"><?php echo $error_msg; ?></p> 

<?php } ?>

<?php if(isset($success_msg)) { ?>

<div class="alert alert-success" role="alert"> 
  <p style="color:green"><?php echo $success_msg; ?></p>
</div>
<?php } ?>

<form action="/source" method="post">

<?php  if(count($errors) > 0) { ?>

<?php foreach($errors->all() as $key => $val){ ?>

<div class="alert alert-danger" role="alert"> 
 <p style="color:red"><?php echo $val; ?></p>
</div>

<?php  } ?>

<?php } ?>

  <div class="form-group">
      <b for="name">Name:</b>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">SAVE</button>
  </form>
</div>

@endsection

