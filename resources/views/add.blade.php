@extends('layout')
@section('content')
<div class="container">
<h1>Add new Resto page is here</h1>
<form method="post" action="">
    @csrf
  <div class="form-group">
    <label >Name </label>
    <input type="text" name="name" class="form-control"  placeholder="Enter name">
   </div>
   <div class="form-group">
    <label >Email </label>
    <input type="email" name="email" class="form-control"  placeholder="Enter email">
   </div>
   <div class="form-group">
    <label >Client address </label>
    <input type="text" name="address" class="form-control"  placeholder="Enter address">
   </div> 
   <div class="form-group">
    <label >Client ph </label>
    <input type="text" name="ph" class="form-control"  placeholder="Enter address">
   </div> 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop