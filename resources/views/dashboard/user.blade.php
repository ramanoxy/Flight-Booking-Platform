@extends('layouts.app')
@section('title','Dashboard User')

@section('content')
<h4 class="mb-4">Dashboard User</h4>

<div class="row">
  <div class="col-md-6 mb-3">
    <div class="card shadow-sm">
      <div class="card-body">
        <h6 class="fw-bold">Cari Penerbangan</h6>
        <p class="text-muted mb-2">
          Lihat daftar penerbangan yang tersedia.
        </p>
        <a href="/flights" class="btn btn-primary btn-sm">
          Lihat Flights
        </a>
      </div>
    </div>
  </div>

  <div class="col-md-6 mb-3">
    <div class="card shadow-sm">
      <div class="card-body">
        <h6 class="fw-bold">Booking Saya</h6>
        <p class="text-muted mb-2">
          Lihat riwayat pemesanan tiket.
        </p>
        <a href="/my-bookings" class="btn btn-success btn-sm">
          Lihat Booking
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
