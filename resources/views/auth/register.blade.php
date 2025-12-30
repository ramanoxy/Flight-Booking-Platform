@extends('layouts.app')
@section('title','Register')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-4">
    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="text-center mb-3">Register</h5>

        <form method="POST" action="/register">
          @csrf
          <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button class="btn btn-success w-100">Register</button>
        </form>

        <p class="text-center mt-3">
          Sudah punya akun? <a href="/login">Login</a>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
