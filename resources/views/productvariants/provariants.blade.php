@extends('layouts.product')

@section('content')
<div class="row">
  <div class="col-6 offset-3 mt-4">
    <h3>All Productvariants:</h3>
    <a href='{{route('welcome')}}' class="btn btn-secondary btn-sm mb-3">Back</a>
    <table class="table table-bordered table-striped">
      <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Gender</td>
        <td>Size</td>
        <td>Product-id</td>
        <td>Action</td>
        
      </tr>
      @foreach ($data as $id => $productvariants)
      <tr>
        <td>{{$id+1}}</td>
        <td>{{optional($productvariants->product)->name }}</td>
        <td>{{$productvariants->gender}}</td>
        <td>{{$productvariants->size}}</td>
        <td>{{$productvariants->product_id}}</td>
        <td><a href= "{{ route('delete.productvar',$productvariants->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
      </tr>
        @endforeach
      </table>
    </div>
  </div>
  @endsection

  
