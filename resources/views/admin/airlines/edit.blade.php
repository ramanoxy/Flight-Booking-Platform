@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-warning">
            <h4 class="mb-0">Edit Maskapai</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('airlines.update', $airline->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Kode Maskapai</label>
                    <input
                        type="text"
                        name="code"
                        class="form-control"
                        value="{{ old('code', $airline->code) }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Maskapai</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ old('name', $airline->name) }}"
                        required
                    >
                </div>

                <div class="d-flex gap-2">
                    <button class="btn btn-success">
                        Update
                    </button>

                    <a href="{{ route('airlines.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
