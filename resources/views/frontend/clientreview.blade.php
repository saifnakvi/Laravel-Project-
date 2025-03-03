<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Add About</title>

    <style>
      h1 {
font-size: 20px;
margin-top: 24px;
margin-bottom: 24px;
}

#imgc{
height: 60px;
}
</style>
@extends('frontend.master')
@section('content')
<div class="container">
  <div class="col-md-6 mt-5">
        <h1> Our Customers </h1>
         <form method="POST" action="{{url('/clientcreated')}}" enctype="multipart/form-data">
          @csrf
           <div class="form-group">
             <label for="exampleInputName"> Name </label>
             <input type="text" name="name" class="form-control">
           </div>
           <div class="form-group">
            <label for="exampleInputName"> Designation </label>
            <input type="text" name="designation" class="form-control">
          </div>
           <div class="form-group">
             <label for="exampleInputEmail1"> Comment </label>
             <input type="text" name="comment" class="form-control">
           </div>
           <hr>
           <div class="form-group mt-3">
             <label class="mr-2">Upload image:</label>
             <input type="file" name="image">
           </div>
           <hr>
           <button type="submit" class="btn btn-primary">Submit</button>
         </form>
          @if (session()->has('success'))
          <div class="alert alert-success mt-5">
          {{session()->get('success')}}
          @endif
          </div>
     <div class="container mt-5">
     <table class="table table-bordered" id="table">

      <tr>
        <th> ID </th>
        <th> Name </th>
        <th> Designation </th>
        <th> Comment </th>
        <th> Image </th>
        <th> Action </th>
      </tr>
      @if(isset($client))
      @foreach ($client as $index)
      <tr>
        <td>{{($index->id)}}</td>
        <td>{{($index->name)}}</td>
        <td>{{($index->designation)}}</td>
        <td>{{($index->comment)}}</td>
        <td><img src="{{asset('storage/'.$index->image)}}" alt="" id="imgc"></td>
        <td>
          <a href="{{route('whydlt',['id' => $index->id ])}}">
          <input type="button" name="delete" class="btn btn-sm btn-danger" value="Delete">
        </a>
        </td>
      </tr>
      @endforeach
      @endif
     </table>
    </div>
    </div>
@endsection