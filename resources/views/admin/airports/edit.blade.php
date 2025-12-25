<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIRPORT - EDIT</title>
</head>
<body>
    @extends('layout.app')

@section('content')
<h2>Edit Bandara</h2>

<form method="POST" action="{{ route('airports.update',$airport->id) }}">
@csrf @method('PUT')
<input name="code" value="{{ $airport->code }}"><br>
<input name="name" value="{{ $airport->name }}"><br>
<input name="city" value="{{ $airport->city }}"><br>
<button>Update</button>
</form>
@endsection

</body>
</html>