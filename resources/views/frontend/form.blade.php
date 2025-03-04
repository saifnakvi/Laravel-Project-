<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Sliders</title>


    <style>
        h1 {
  font-size: 20px;
  margin-top: 24px;
  margin-bottom: 24px;
}

#imgc {
height: 60px;
}
    </style>
</head>
  @extends('frontend.master')
  @section('content')
    <div class="container">
      <div class="col-md-6 mt-5">   
        <h1>Slider</h1>
         <form method="POST" action="{{url('/create')}}" enctype="multipart/form-data">
          @csrf
           <div class="form-group">
             <label for="exampleInputName"> Heading </label>
             <input type="text" name="heading" class="form-control">
           </div>
           <div class="form-group">
             <label for="exampleInputEmail1">Content </label>
             <input type="text" name="content" class="form-control">
           </div>
           <hr>
           <div class="form-group mt-3">
             <label class="mr-2">Upload image:</label>
             <input type="file" name="image">
           </div>
           <hr>
           <button type="submit" class="btn btn-primary">Submit</button>
           <form action="{{route('SliderExport')}}" method="POST" target="__blank">
            @csrf
            <button class="btn btn-primary" value="" name="export"> View Data </button>
          </form>
         </form>
      </div>
         {{-- <div class="mt-2">
          <form action="{{route('SliderExport')}}" method="POST" target="__blank">
            @csrf
            <button class="btn btn-primary" value="" name="export"> Export Data </button>
          </form>
        </div>  --}}
          @if (session()->has('success'))
          <div class="alert alert-success mt-5">
          {{session()->get('success')}}
          @endif
         </div>
     <div class="container mt-5">
      <table class="table table-bordered" id="table">
       <tr>
         <th>ID</th>
         <th>Heading</th>
         <th>Content</th>
         <th>Image</th>
         <th>Action</th>
       </tr>
       @if(isset($slideImages))
       @foreach ($slideImages as $slider)
       <tr>
         <td>{{($slider->id)}}</td>
         <td>{{($slider->heading)}}</td>
         <td>{{($slider->content)}}</td>
         <td><img src="{{asset('storage/'.$slider->image)}}" alt="" id="imgc"></td>
         <td>
           <a href="{{route('dltsl',['id' => $slider->id ])}}">
           <input type="button" name="delete" class="btn btn-sm btn-danger" value="Delete">
         </a>
         </td>
       </tr>
       @endforeach
       @endif
      </table>
    </div>
     @endsection