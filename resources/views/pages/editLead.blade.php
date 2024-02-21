@extends('layouts.mainlayout')
@section('content')

<div class="container">
  <h1>EDIT LEAD PRODUCT</h1>
  
 <?php if(isset($error_msg)) { ?>

 <p style="color:red"><?php echo $error_msg; ?></p> 

<?php } ?>

<?php if(isset($success_msg)) { ?>

<div class="alert alert-success" role="alert"> 
  <p style="color:green"><?php echo $success_msg; ?></p>
</div>
<?php } ?>

<form action="/lead/<?php echo $editDetail->id; ?>" method="post" enctype="multipart/form-data">

<?php  if(count($errors) > 0) { ?>

<?php foreach($errors->all() as $key => $val){ ?>

<div class="alert alert-danger" role="alert"> 
 <p style="color:red"><?php echo $val; ?></p>
</div>

<?php  } ?>

<?php } ?>

<input type="hidden" class="form-control" id="name" name="id" value="{{ $editDetail->id }}">
<div class="form-group">
      <b for="category">Name:</b>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $editDetail->name }}">
    </div>

 <div class="form-group">
      <b for="category">Email:</b>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ $editDetail->email }}">
    </div>

    <div class="form-group">
      <b for="category">Phone:</b>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="{{ $editDetail->phone }}">
    </div>

    <div class="form-group">
      <b for="category">Country:</b>
      <input type="text" class="form-control" id="country" placeholder="Enter country" name="country" value="{{ $editDetail->country }}">
    </div>

    <div class="form-group">
      <b for="category">State:</b>
      <input type="text" class="form-control" id="state" placeholder="Enter state" name="state" value="{{ $editDetail->state }}">
    </div>

    <div class="form-group">
      <b for="category">City:</b>
      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" value="{{ $editDetail->city }}">
    </div>

    <div class="form-group">
      <b for="category">Pin:</b>
      <input type="text" class="form-control" id="pin" placeholder="Enter pin" name="pin" value="{{ $editDetail->pin }}">
    </div>

    <div class="form-group">
      <b for="category">Address:</b>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="{{ $editDetail->address }}">
    </div>

    <div class="form-group">
    <b for="sel1">Select Product :</b>
      <select class="form-control" name="product" value="{{ $editDetail->product }}"id="sel1">
      @foreach($detail as $key => $value)
        <option value="<?php echo $value['id']; ?>"><?php echo $value['name'];?></option>
      @endforeach
      </select>
   </div>

   <div class="form-group">
    <b for="sel1">Select Source :</b>
      <select class="form-control" name="source_id" value="{{ $editDetail->source_id }}" id="sel1">
      @foreach($data as $key => $value)
        <option value="<?php echo $value['id']; ?>"><?php echo $value['name'];?></option>
      @endforeach
      </select>
   </div>

    <div class="form-group">
      <b for="category">Picture:</b>
      <img style="width:80px;height:100px;" src="/images/<?php echo $editDetail->picture; ?>"/>
      <input type="hidden" class="form-control" id="photo" placeholder="Enter Photo" name="pic" value="{{ $editDetail->picture }}">
      <input type="file" class="form-control" id="Picture" placeholder="Enter picture" name="picture">
    </div>
    @csrf

    <div class="form-group">
      <b for="category">NextMeeting:</b>
      <input type="date" class="form-control" id="NextMeeting" placeholder="Enter NextMeeting" name="next_meeting" value="{{ $editDetail->next_meeting }}">
    </div>

    <button type="submit" class="btn btn-primary">SAVE</button>
  </form>
</div>

@endsection