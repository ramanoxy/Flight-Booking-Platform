<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH</title>
</head>
<body>
   @extends('layout.app')

@section('content')
<h2>Daftar Jadwal Penerbangan</h2>

<table border="1" cellpadding="8">
<tr>
    <th>Maskapai</th>
    <th>Jadwal</th>
    <th>Harga</th>
    <th>Aksi</th>
</tr>

@foreach($flights as $f)
<tr>
    <td>{{ $f->airline->name }}</td>

    <td>
        {{ \Carbon\Carbon::parse($f->departure_date)->format('d M Y') }} <br>
        {{ $f->departure_time }}
    </td>

    <td>Rp {{ number_format($f->price) }}</td>

    <td>
        <form method="POST" action="/bookings/{{ $f->id }}">
            @csrf
            <button>Pesan</button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection

</body>
</html>