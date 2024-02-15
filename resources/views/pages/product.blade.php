@extends('layouts.mainlayout')
@section('content')

<div class="container">
  <h1>ADD PRODUCT</h1>

 <?php if(isset($error_msg)) { ?>

<div class="alert alert-success" role="alert"> 
  <p style="color:red"><?php echo $error_msg; ?></p> 
</div>

<?php } ?>

<?php if(isset($success_msg)) { ?>

<div class="alert alert-success" role="alert"> 
  <p style="color:green"><?php echo $success_msg; ?></p>
</div>

<?php } ?>


<?php  if(count($errors) > 0) { ?>

<?php foreach($errors->all() as $key => $val){ ?>

<div class="alert alert-danger" role="alert"> 
 <p style="color:red"><?php echo $val; ?></p>
</div>

<?php  } ?>

<?php } ?>
 

</div>
<button class="btn btn-primary btn-product" >ADD Product</button>   
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Category Name</th>
        <th>Name</th>
        <th>IMAGE</th>
        <th>Price</th>
        <th>Operation</th>

      </tr>
    </thead>
    <tbody>
    
        <?php foreach ($productList as $key => $val){ ?>
        
       <tr>
        <td><?php echo $val->getCategory->category; ?></td>
        <td><?php echo $val['name'];?></td>
        <td><img style="width:100px;height:120px;" src="/images/<?php echo $val['photo']; ?>"/> </td>
        <td><?php echo $val['price'];?></td>
        <td><a class="btn btn-danger" href="{{url ('delete',$val['id'])}}">DELETE</a>
        <a class="btn btn-primary" href="{{url ('product/edit',$val['id'])}}">EDIT</a></td>
      </tr>
    
      <?php
        }
        ?>
   
    </tbody>
  </table>
</div>
@include('modal.ProductModal')
@endsection