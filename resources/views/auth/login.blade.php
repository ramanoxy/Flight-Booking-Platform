@extends('layouts.app')
@section('title','Login')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-4">
    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="text-center mb-3">Login</h5>

        <form method="POST" action="/login">
          @csrf
          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button class="btn btn-primary w-100">Login</button>
        </form>

        <p class="text-center mt-3">
          Belum punya akun? <a href="/register">Register</a>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
