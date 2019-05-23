@extends('header')
@section('content')
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-6">
        <div class="card">
           <form method="POST" action="/sample">
           {{csrf_field()}}
            <div class="card-header">Demo</div>
            <div class="card-body">
            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo @$user_data[0]->id;?>">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" name="fname" id="fname" value="<?php echo @$user_data[0]->first_name;?>">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" name="lname" id="lname" value="<?php echo @$user_data[0]->last_name;?>">
                </div>
                <div class="form-group">
                    <label for="name">Age:</label>
                    <input type="number" class="form-control" name="age" id="age" value="<?php echo @$user_data[0]->age;?>">
                </div>
                <?php
                  if(isset($user_data))
                  {
                    $btn="Update";
                  }else{
                    $btn="Submit";
                  }
                ?>
                <button type="submit" class="btn btn-success"><?php echo $btn?></button>
                <button type="reset" class="btn btn-default">Reset</button>
            </div>
            </form>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="table-responsive">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th>#</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>Action</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sr=1;
             foreach($data as $key)
             {
                 if($key['status']==1)
                 {
                     $status='disable';
                     $class="btn-danger";
                 }else{
                     $status='enable';
                     $class="btn-success";
                 }
            ?>
                <tr>
                <td><?php echo $sr;?></td>
                <td><?php echo $key['first_name'];?></td>
                <td><?php echo $key['last_name'];?></td>
                <td><?php echo $key['age'];?></td>
                <td><a href="/sample/<?php echo $key['id']?>" class="btn btn-primary btn-sm">Edit</a></td>
                <td><a href="/sample/<?php echo $status;?>/<?php echo $key['id']?>" class="btn <?php echo $class;?> btn-sm"><?php echo ucfirst($status);?></a></td>
                </tr>
            <?php 
               $sr++;
             }
            ?>
        </tbody>
        </table>
    </div>
    </div>
  </div>
</div>
@endsection