@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
<main class="form-registration fs-3">
  <h1 class="h3 mb-3 fw-normal text-center">Registratio Form</h1>
  <form>
    <div class="form-floating">
      <input type="text" class="form-control" id="name" placeholder="your name.." name="name">
      <label for="name">Name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="username" placeholder="your name.." name="username">
      <label for="username">Username</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="email" name="email" placeholder="your email..">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password" placeholder="Your Password..">
      <label for="password">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
  </form>
  <small class="mt-2">Have Account? <a href="/login"> Login!</a></small>
</main>
  </div>
</div>

@endsection