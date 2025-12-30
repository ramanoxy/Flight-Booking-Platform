@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="mb-3">Riwayat Pemesanan</h3>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Kode Booking</th>
                        <th>Maskapai</th>
                        <th>Tanggal Berangkat</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($bookings as $b)
                        <tr>
                            <td class="fw-bold">{{ $b->booking_code }}</td>
                            <td>{{ $b->flight->airline->name }}</td>
                            <td>
                                {{ \Carbon\Carbon::parse($b->flight->departure_date)->format('d M Y') }}
                            </td>
                            <td class="text-success fw-bold">
                                Rp {{ number_format($b->flight->price) }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                Belum ada riwayat pemesanan
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
