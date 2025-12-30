@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Bandara</h5>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('airports.store') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Kode Bandara</label>
                    <input type="text"
                           name="code"
                           class="form-control"
                           value="{{ old('code') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Bandara</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ old('name') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kota</label>
                    <input type="text"
                           name="city"
                           class="form-control"
                           value="{{ old('city') }}"
                           required>
                </div>

                <button class="btn btn-success">
                    Simpan
                </button>

                <a href="{{ route('airports.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
