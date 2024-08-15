@extends('layouts.app')

@section('content')

<h4>Login:</h4>
</div>
<div class="card-body">
  <form action="{{route('loginMatch')}}" method="POST">
    @csrf
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
      <label for="form-label">Password:</label>
      <input type="password" value="" class="form-control  @error('password') is-invalid  @enderror" id="password" name="password">
      <span class="text-danger">
        @error('password')
        {{ $message }}
        @enderror
      </span>
    </div>
    
    <div class="mb-3">
      <button class="btn btn-primary" type="submit" name="submit">Login</button>
      <a href='/' class="btn btn-secondary">Back</a>
      
      @endsection
      
      @section('title')
      login
      @endsection