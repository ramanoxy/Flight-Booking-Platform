@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Penerbangan</h3>

        <a href="{{ route('flights.create') }}"
           class="btn btn-primary">
            + Tambah Penerbangan
        </a>
    </div>

    <div class="alert alert-info">
        Belum ada data penerbangan.
    </div>
</div>
@endsection
