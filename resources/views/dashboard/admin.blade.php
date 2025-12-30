@extends('layouts.app')
@section('title','Dashboard Admin')

@section('content')
<h4 class="mb-4">Dashboard Admin</h4>

<div class="row">
  <div class="col-md-4 mb-3">
    <div class="card shadow-sm">
      <div class="card-body">
        <h6 class="fw-bold">Data Maskapai</h6>
        <p class="text-muted mb-2">
          Kelola data maskapai penerbangan.
        </p>
        <a href="/admin/airlines" class="btn btn-primary btn-sm">
          Kelola
        </a>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-3">
    <div class="card shadow-sm">
      <div class="card-body">
        <h6 class="fw-bold">Data Bandara</h6>
        <p class="text-muted mb-2">
          Kelola data bandara.
        </p>
        <a href="/admin/airports" class="btn btn-primary btn-sm">
          Kelola
        </a>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-3">
    <div class="card shadow-sm">
      <div class="card-body">
        <h6 class="fw-bold">Data Penerbangan</h6>
        <p class="text-muted mb-2">
          Kelola jadwal penerbangan.
        </p>
        <a href="/admin/flights" class="btn btn-primary btn-sm">
          Kelola
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
