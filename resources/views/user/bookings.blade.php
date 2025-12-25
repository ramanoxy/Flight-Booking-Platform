<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING</title>
</head>
<body>
    @extends('layout.app')

@section('content')
<h2>Riwayat Pemesanan</h2>

<table border="1">
@foreach($bookings as $b)
<tr>
    <td>{{ $b->booking_code }}</td>
    <td>{{ $b->flight->airline->name }}</td>
    <td>{{ $b->flight->departure_date }}</td>
    <td>Rp {{ number_format($b->flight->price) }}</td>
</tr>
@endforeach
</table>
@endsection

</body>
</html>