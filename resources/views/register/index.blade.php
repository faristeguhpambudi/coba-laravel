@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
<main class="form-registration fs-3">
  <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
  <form action="/register" method="post">
    @csrf
    <div class="form-floating">
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="your name.." name="name" required value="{{ old('name') }}">
      <label for="name">Name</label>
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="your name.." name="username" required value="{{ old('username') }}">
      <label for="username">Username</label>
      @error('username')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="your email.." required value="{{ old('email') }}">
      <label for="email">Email address</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Your Password.." required>
      <label for="password">Password</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
  </form>
  <small class="mt-2">Have Account? <a href="/login"> Login!</a></small>
</main>
  </div>
</div>

@endsection