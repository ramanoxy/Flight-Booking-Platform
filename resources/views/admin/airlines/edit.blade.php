<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIRLINE - EDIT</title>
</head>
<body>
    @extends('layout.app')

@section('content')
<h2>Edit Maskapai</h2>

<form method="POST" action="{{ route('airlines.update',$airline->id) }}">
@csrf @method('PUT')
<input name="code" value="{{ $airline->code }}"><br>
<input name="name" value="{{ $airline->name }}"><br>
<button>Update</button>
</form>
@endsection

</body>
</html>