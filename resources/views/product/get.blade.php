@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-6 offset-3 mt-4">
        <h4> Product Detail: </h4>
        <div class="mb-3">
            <label for="form-label">Product-id: {{ $data->productvariant->product_id }}</label>
        </div>
        <div class="mb-3">
            <label for="form-label">Name: {{ $data->name }}</label>
        </div>
        <div class="mb-3">
            <label for="form-label">Price: {{ $data->price }}</label>
        </div>
        <div class="mb-3">
            <label for="form-label">Gender: {{ $data->productvariant->gender }}</label>
        </div>
        <div class="mb-3">
            <label for="form-label">Size: {{ $data->productvariant->size }}</label>
        </div>
        <div class="mb-3">
            <label for="form-label">Image: {{ $data->image }}</label>
        </div>
        <a href='{{route('products')}}' class="btn btn-secondary ">Back</a>
    </div>
</div>
@endsection


@section('title')
  View
@endsection