@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Penerbangan</h3>

        <a href="{{ route('flights.create') }}" class="btn btn-primary">
            + Tambah Penerbangan
        </a>
    </div>

    @if($flights->count())
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Maskapai</th>
                    <th>Asal</th>
                    <th>Tujuan</th>
                    <th>Tanggal & Jam</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($flights as $flight)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $flight->airline->name }}</td>
                    <td>{{ $flight->originAirport->name }}</td>
                    <td>{{ $flight->destinationAirport->name }}</td>
                    <td>
                        {{ \Carbon\Carbon::parse($flight->departure_time)->format('d M Y H:i') }}
                    </td>
                    <td>
                        Rp {{ number_format($flight->price, 0, ',', '.') }}
                    </td>

                    <td>
                        <form action="{{ route('flights.destroy', $flight->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada data penerbangan</p>
    @endif
</div>
@endsection
