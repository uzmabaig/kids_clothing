@extends('layouts.product')

@section('content')
<div class="row">
  <div class="col-6 offset-3 mt-4">
    <h4>Add Product:</h4>
    <form action="{{ route('add.product')}}"  method="POST">
      @csrf
      <div class="mb-3">
        <label for="form-label">Name:</label>
        <input type="text" value="{{ old('name')}}" class="form-control  @error('name') is-invalid  @enderror" id="name" name="name">
        <span class="text-danger">
          @error('name')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Price:</label>
        <input type="number" value="{{ old('price') }}" class="form-control  @error('price') is-invalid  @enderror" id="price" name="price">
        <span class="text-danger">
          @error('price')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Gender:</label>
        <input type="text" value="{{ old('gender')}}" class="form-control  @error('gender') is-invalid  @enderror" id="gender" name="gender">
        <span class="text-danger">
          @error('gender')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Size:</label>
        <input type="number" value="{{ old('size') }}" class="form-control  @error('size') is-invalid  @enderror" id="size" name="size">
        <span class="text-danger">
          @error('size')
          {{ $message }}
          @enderror
        </span>
      </div>
      {{-- <div class="mb-3">
        <label for="form-label">Image:</label>
        <input type="text" value="image" class="form-control">
      </div> --}}
     <div class="mb-3">
        <button class="btn btn-primary" type="submit" name="submit">Add</button>
        <a href='{{route('products')}}' class="btn btn-secondary ">Back</a>
      </div>
    </form>
  </div>
</div>
@endsection

@section('title')
   Add
@endsection