@extends('header')
@section('content')
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">Report</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" name="fname" id="fname">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" name="lname" id="lname">
                </div>
                <div class="form-group">
                    <label for="name">Age:</label>
                    <input type="number" class="form-control" name="age" id="age">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </div>
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
            ?>
                <tr>
                <td><?php echo $sr;?></td>
                <td><?php echo $key;?></td>
                <td><?php echo $key;?></td>
                <td><?php echo $key;?></td>
                <td><button type="submit" class="btn btn-primary btn-sm">Edit</button></td>
                <td><button type="submit" class="btn btn-danger btn-sm">Remove</button></td>
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