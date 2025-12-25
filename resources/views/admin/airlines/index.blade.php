<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIRLINE</title>
</head>
<body>
        @extends('layout.app')

    @section('content')
    <h2>Data Maskapai</h2>
    <a href="{{ route('airlines.create') }}">Tambah</a>

    <table border="1">
    @foreach($airlines as $a)
    <tr>
        <td>{{ $a->code }}</td>
        <td>{{ $a->name }}</td>
        <td>
            <a href="{{ route('airlines.edit',$a->id) }}">Edit</a>
            <form method="POST" action="{{ route('airlines.destroy',$a->id) }}">
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