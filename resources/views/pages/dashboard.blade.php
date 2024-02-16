@extends('layouts.mainlayout')
@section('content')

<div class="table-responsive">    

  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Country</th>
        <th>State</th>
        <th>City</th>
        <th>Pin</th>
        <th>Address</th>
        <th>Product</th>
        <th>Source</th>
        <th>Picture</th>
      </tr>
    </thead>
    <tbody>
    
        <?php foreach ($data as $key => $val){ 
            
           
            
            ?>   
       <tr>
        <td><?php echo $val->id;?></td>
        <td><?php echo $val->name;?></td>
        <td><?php echo $val->email;?></td>
        <td><?php echo $val->phone;?></td>
        <td><?php echo $val->country;?></td>
        <td><?php echo $val->state;?></td>
        <td><?php echo $val->city;?></td>
        <td><?php echo $val->pin;?></td>
        <td><?php echo $val->address;?></td>
        <td><?php echo $val->getProduct->name;?></td>
        <td><?php echo $val->getSource->name;?></td>
        <td><img style="width:100px;height:120px;" src="/images/<?php echo $val['picture']; ?>"/> </td>
        <!-- <td><a class="btn btn-danger" href="{{url ('delete',$val->id )}}">DELETE</a>
        <a class="btn btn-primary" href="{{url ( 'lead',$val->id)}}">EDIT</a></td> -->
      </tr>
    
      <?php
        }
        ?>
   
    </tbody>
  </table>
</div>

@endsection