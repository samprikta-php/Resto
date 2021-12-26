@extends('layout')
@section('content')

<div class="container">
<h1>Edit Resto</h1>
<form method="POST" action="/update">
    @csrf
   
        
    <input type="hidden" name="id" class="form-control" value="{{$data['id']}}" placeholder="Enter name">
   
  <div class="form-group">
    <label >Name </label>
    <input type="text" name="name" class="form-control" value="{{$data['name']}}" placeholder="Enter name">
   </div>
   <div class="form-group">
    <label >Email </label>
    <input type="email" name="email" class="form-control" value="{{$data['email']}}" placeholder="Enter email">
   </div>
   <div class="form-group">
    <label >Client address </label>
    <input type="text" name="address" class="form-control" value="{{$data['address']}}" placeholder="Enter address">
   </div> 
   <div class="form-group">
    <label >Client ph </label>
    <input type="text" name="ph" class="form-control" value="{{$data['ph']}}" placeholder="Enter address">
   </div> 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop