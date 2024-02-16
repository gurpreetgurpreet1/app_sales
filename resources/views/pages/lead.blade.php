@extends('layouts.mainlayout')
@section('content')

<div class="container">
  
 <?php if(isset($error_msg)) { ?>

 <p style="color:red"><?php echo $error_msg; ?></p> 

<?php } ?>

<?php if(isset($success_msg)) { ?>

<div class="alert alert-success" role="alert"> 
  <p style="color:green"><?php echo $success_msg; ?></p>
</div>
<?php } ?>


</div>

<div class="table-responsive">    
<button class="btn btn-sm btn-primary btn-lead " >ADD LEAD</button>      
  <table class="table table-bordered table-condensed">
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
        <th>Operation</th>

      </tr>
    </thead>
    <tbody>
    
        <?php foreach ($lead as $key => $val){ ?>
        
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
        <td>
          <div class="btn-group">
            <a class="btn btn-sm btn-danger" href="{{url ('delete',$val->id )}}">DELETE</a>
            <a class="btn btn-sm btn-primary" href="{{url ( 'lead',$val->id)}}">EDIT</a>
          </div>
        </td>
      </tr>
    
      <?php
        }
        ?>
   
    </tbody>
  </table>
</div>

<ul class="pagination">

   {{ $lead->links() }}

</ul>


@include('modal.LeadModal')

@endsection