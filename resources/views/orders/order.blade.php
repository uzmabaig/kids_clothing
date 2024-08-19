@extends('layouts.product')


@section('content')
<div class="row">
  <div class="col-8 offset-2 mt-4">
    <h4>welcome customer {{Auth::user()->name}}:</h4> 
    <a href='{{route('logout')}}' class="btn btn-danger btn-sm mb-3">Logout</a>
    <table class="table table-bordered table-striped">
      <tr>
        <td>Id</td>
        <td>Product_id</td>
        <td>Name</td>
        <td>Gender</td>
        <td>Size</td>
        <td>Price</td>
        <td>Action</td>
      </tr>
      @foreach ($data as $id => $order)
      <tr>
       <td>{{$id+1}}</td>
        <td> {{ $order->productvariant->product_id }}</td>
        <td>{{$order->name}}</td>
       <td> {{ $order->productvariant->gender }}</td>
       <td> {{ $order->productvariant->size }}</td>
       <td>{{$order->price}}</td>
       <td><a href="{{route('view.order',$order->id) }}" class="btn btn-primary btn-sm">View</a>
        <a href= "{{route('add.order',$order->id)}}" class="btn btn-primary btn-sm">Order</a></td>
        </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection

@section('title')
customer
@endsection


