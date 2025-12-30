@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Penerbangan</h5>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('flights.store') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Maskapai</label>
                    <select name="airline_id" class="form-select" required>
                        <option value="">-- Pilih Maskapai --</option>
                        @foreach($airlines as $a)
                            <option value="{{ $a->id }}"
                                {{ old('airline_id') == $a->id ? 'selected' : '' }}>
                                {{ $a->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Bandara Asal</label>
                    <select name="origin_airport_id" class="form-select" required>
                        <option value="">-- Pilih Bandara Asal --</option>
                        @foreach($airports as $a)
                            <option value="{{ $a->id }}"
                                {{ old('origin_airport_id') == $a->id ? 'selected' : '' }}>
                                {{ $a->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Bandara Tujuan</label>
                    <select name="destination_airport_id" class="form-select" required>
                        <option value="">-- Pilih Bandara Tujuan --</option>
                        @foreach($airports as $a)
                            <option value="{{ $a->id }}"
                                {{ old('destination_airport_id') == $a->id ? 'selected' : '' }}>
                                {{ $a->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Tanggal Berangkat</label>
                        <input type="date"
                               name="departure_date"
                               class="form-control"
                               value="{{ old('departure_date') }}"
                               required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Jam Berangkat</label>
                        <input type="time"
                               name="departure_time"
                               class="form-control"
                               value="{{ old('departure_time') }}"
                               required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number"
                               name="price"
                               class="form-control"
                               placeholder="Contoh: 1500000"
                               value="{{ old('price') }}"
                               required>
                    </div>
                </div>

                <button class="btn btn-success">
                    Simpan
                </button>

                <a href="{{ route('flights.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
