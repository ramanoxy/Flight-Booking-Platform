<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIRPORT - CREATE</title>
</head>
<body>
    @extends('layout.app')

@section('content')
<h2>Tambah Maskapai</h2>

<form method="POST" action="{{ route('airlines.store') }}">
@csrf
<input name="code" placeholder="Kode"><br>
<input name="name" placeholder="Nama"><br>
<button>Simpan</button>
</form>
@endsection

</body>
</html>