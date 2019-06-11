<!-- carcreate.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Laravel MongoDB CRUD Tutorial With Example</h2><br/>
      <div class="container">
    </div>
     <?php 
     
      if($page=='add')
      {
       ?>
       <form method="post" action="{{url('add')}}">
       <?php
      }else{
         ?>
       <form method="post" action="{{url('edit')}}">
       <input type="hidden" class="form-control" name="id" value="<?php echo @$id;?>">
       <?php
      }
      ?>      
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Carcompany">Car Company:</label>
            <input type="text" class="form-control" name="carcompany" value="<?php echo @$users[0]->carcompany;?>">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Model">Model:</label>
            <input type="text" class="form-control" name="model" value="<?php echo @$users[0]->model;?>">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Price:</label>
            <input type="text" class="form-control" name="price" value="<?php echo @$users[0]->price;?>">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
           <?php 
            if($page=='add')
            {
              $btn='Submit';
            }else{
              $btn='Update';
            }
           ?>
            <button type="submit" class="btn btn-success"><?php echo $btn;?></button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>
@endsection