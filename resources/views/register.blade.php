@extends('layouts.app')

@section('content')

<h4>Register:</h4>
</div>
<div class="card-body">
  <form action="{{route('registerSave')}}" method="POST">
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
      <label for="form-label">Email:</label>
      <input type="email" value="{{ old('email')}}" class="form-control  @error('email') is-invalid  @enderror" id="email" name="email">
      <span class="text-danger">
        @error('email')
        {{ $message }}
        @enderror
      </span>
    </div>

      <div class="mb-3">
      <label for="form-label">Role:</label>
      <span class="text-danger">
        @error('role')
        {{ $message }}
        @enderror
      </span>
    </div>
    <div class="form-check form-check-inline mb-3">
      <input class="form-check-input" type="radio" name="role" id="Radio1" value="{{ 'admin' }}">
      <label class="form-check-label" for="Radio1">Admin</label>
    </div>
    <div class="form-check form-check-inline mb-3">
      <input class="form-check-input" type="radio" name="role" id="Radio2" value="{{ 'customer' }}">
      <label class="form-check-label" for="Radio2">Customer</label>
      </div>
 
    <div class="mb-3">
      <label for="form-label">Password:</label>
      <input type="password" value="" class="form-control  @error('password') is-invalid  @enderror" id="password" name="password">
      <span class="text-danger">
        @error('password')
        {{ $message }}
        @enderror
      </span>
    </div>
    <div class="mb-3">
      <label for="form-label">Confirm Password:</label>
      <input type="password" value="" class="form-control  @error('password') is-invalid  @enderror" id="password" name="password_confirmation">
      <span class="text-danger">
        @error('password')
        {{ $message }}
        @enderror
      </span>
    </div>
    <div class="mb-3">
      <button class="btn btn-primary" type="submit" name="submit">Register</button>
      <a href='/login' class="btn btn-primary">Login</a>
      @endsection
      
      @section('title')
      register
      @endsection