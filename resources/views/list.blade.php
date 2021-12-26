@extends('layout')
@section('content')
<head>
<h1>List page is here</h1>
@if(Session::get('status'))
<div class="alert alert-successful alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <strong>Registration</strong> Done sucessfully.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">ph</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->ph}}</td>
      <td>
  <a href="/delete/{{$item->id}}">delete</a>
  <a href="/edit/{{$item->id}}">edit</a>

    </td>
    </tr>
    
  @endforeach
</tbody>
</table>

@stop