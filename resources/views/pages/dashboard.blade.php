@extends('layouts.mainlayout')
@section('content')


<!-- <h2 style="text-align:center">LEADS</h2> -->

<div class="table-responsive table-bordered">   
  
  <div class="filter-container">

    <form  action="/dashboard" method="post">
  
      <input type="date" id="leadDate" name="leadDate">
      <button class="btn btn-sm btn-primary" type="submit" >Submit</button>
      @csrf
  </form>

  </div>

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
        <th>Status</th>
        <th>Remarks</th>
        <th>Picture</th>
        <th>Active</th>
      </tr>
    </thead>
    <tbody>
    
        <?php
        
        foreach ($data as $key => $val) {   

          $product = $val->getProduct;
          $source = $val->getSource;    
          // dd($source);
          // print_r($val->source_id);die;

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
        <td><?php echo ($product && isset($product->name))? $product->name:'';?></td>
        <td><?php echo ($source && isset($source->name))?$source->name:'';?></td>
        <td><img style="width:60px;height:70px;" src="/images/<?php echo $val['picture']; ?>"/> </td>
        <td><?php echo $val->status;?></td>
        <td><?php echo $val->remarks;?></td>
        <td><a class="fa fa-history"  href="{{url ('lead/history',$val->id ) }}" ></a></td>
       
      
      </tr>
    
      <?php
        }
        ?>
   
    </tbody>
  </table>
</div>

@endsection