@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="mb-3">Daftar Jadwal Penerbangan</h3>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Maskapai</th>
                        <th>Asal</th>
                        <th>Tujuan</th>
                        <th>Jadwal</th>
                        <th>Harga</th>
                        <th width="120">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($flights as $f)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <strong>{{ $f->airline->name }}</strong>
                            </td>
                            <td>{{ $f->originAirport->name }}</td>
                            <td>{{ $f->destinationAirport->name }}</td>
                            <td>
                                {{ \Carbon\Carbon::parse($f->departure_date)->format('d M Y') }}
                                <br>
                                <small class="text-muted">
                                    {{ $f->departure_time }}
                                </small>
                            </td>

                            <td>
                                <span class="fw-bold text-success">
                                    Rp {{ number_format($f->price) }}
                                </span>
                            </td>

                            <td>
                                <form method="POST" action="/bookings/{{ $f->id }}">
                                    @csrf
                                    <button class="btn btn-primary btn-sm w-100">
                                        Pesan
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                Jadwal penerbangan tidak ditemukan
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
