@extends('layouts.product')

@section('content')
<div class="row">
  <div class="col-6 offset-3 mt-4">
    <h3>All Products:</h3>
    <a href="{{ route('add.product') }}" class="btn btn-success btn-sm mb-3">Add new</a> 
    <a href='{{route('welcome')}}' class="btn btn-secondary btn-sm mb-3">Back</a>
   
    <table class="table table-bordered table-striped">
      <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Price</td>
       <td>Action</td>
      </tr>
      @foreach ($data as $id => $products)
      <tr>
        <td>{{$id+1}}</td>
        <td>{{$products->name}}</td>
        <td>{{$products->price}}</td>
        <td><a href="{{ route('view.product',$products->id) }}" class="btn btn-primary btn-sm">View</a>
          <a href= "{{ route('update.product',$products->id)}}" class="btn btn-warning btn-sm">Update</a>
          <a href= "{{ route('delete.product',$products->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
  @endsection

  
