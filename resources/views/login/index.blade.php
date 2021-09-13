@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-md-5">
<main class="form-signin fs-3">
  @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(session()->has('LoginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{ session('LoginErrorz') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
  <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
  <form action="/login" method="post">
    @csrf
    <div class="form-floating">
      <input type="email" class="form-control" id="email" name="email" placeholder="your email.." autofocus required @error('email') is-invalid @enderror value="{{ old('email') }}">
      <label for="floatingInput">Email address</label>
      @error('email') 
      <div class="invalid-feedback">
        {{ $message }}
      </div>@enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password" placeholder="your password.." required>
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
  </form>
  <small class="mt-2">Not Registered? <a href="/register"> Register!</a></small>
</main>
  </div>
</div>

@endsection