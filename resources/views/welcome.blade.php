@extends('layouts.app')


@section('content')
<div class="row">
  <div class="col-8 offset-2 mt-4">
  <h5>Welcome admin {{Auth::user()->name}}:</h5>
 
    <a href='{{route('products')}}' class="btn btn-primary">Products</a>
    <a href='{{route('provariants')}}' class="btn btn-primary">ProductVariants</a>
    <a href='{{route('logout')}}' class="btn btn-danger">Logout</a>
  
</div>
</div>
@endsection