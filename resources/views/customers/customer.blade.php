@extends('layouts.product')


@section('content')
<div class="row">
  <div class="col-6 offset-3 mt-4">
    <h4>welcome customer {{Auth::user()->name}}:</h4> 
    <a href='{{route('logout')}}' class="btn btn-danger btn-sm mb-3">Logout</a>
    <table class="table table-bordered table-striped">
      <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Gender</td>
        <td>Size</td>
        <td>Price</td>
        <td>Action</td>
      </tr>
      @foreach ($data as $id => $customers)
      <tr>
        
        <td>{{$id+1}}</td>
        <td>{{$customers->name}}</td>
       <td> {{ optional($customers->productvariant)->gender }}</td>
       <td> {{ optional($customers->productvariant)->size }}</td>
       <td>{{$customers->price}}</td>
        
        <td><a href="{{route('view.customer',$customers->id) }}" class="btn btn-primary btn-sm">View</a>
          <a href= "{{route('order.customer',$customers->id)}}" class="btn btn-primary btn-sm">Order</a></td> 
        </tr>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection

@section('title')
customer
@endsection


