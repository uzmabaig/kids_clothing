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
      <input type="text" value="{{ old('role')}}" class="form-control  @error('role') is-invalid  @enderror" id="role" name="role">
      <span class="text-danger">
        @error('role')
        {{ $message }}
        @enderror
      </span>
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