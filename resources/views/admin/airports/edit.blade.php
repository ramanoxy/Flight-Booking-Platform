@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-warning">
            <h5 class="mb-0">Edit Bandara</h5>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('airports.update', $airport->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Kode Bandara</label>
                    <input type="text"
                           name="code"
                           class="form-control"
                           value="{{ old('code', $airport->code) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Bandara</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ old('name', $airport->name) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kota</label>
                    <input type="text"
                           name="city"
                           class="form-control"
                           value="{{ old('city', $airport->city) }}"
                           required>
                </div>

                <button class="btn btn-success">
                    Update
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
