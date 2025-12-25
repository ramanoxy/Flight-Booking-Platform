<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIRPORT</title>
</head>
<body>
        @extends('layout.app')

    @section('content')
    <h2>Data Bandara</h2>
    <a href="{{ route('airports.create') }}">Tambah</a>

    <table border="1">
    @foreach($airports as $a)
    <tr>
        <td>{{ $a->code }}</td>
        <td>{{ $a->name }}</td>
        <td>{{ $a->city }}</td>
        <td>
            <a href="{{ route('airports.edit',$a->id) }}">Edit</a>
            <form method="POST" action="{{ route('airports.destroy',$a->id) }}">
                @csrf @method('DELETE')
                <button>Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
    </table>
    @endsection

</body>
</html>