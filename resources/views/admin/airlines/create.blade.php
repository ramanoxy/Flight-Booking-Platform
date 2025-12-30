@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Maskapai</h5>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('airlines.store') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Kode Maskapai</label>
                    <input type="text"
                           name="code"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Maskapai</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           required>
                </div>

                <button class="btn btn-success">
                    Simpan
                </button>

                <a href="{{ route('airlines.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
