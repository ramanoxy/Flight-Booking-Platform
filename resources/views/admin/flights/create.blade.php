<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLIGHT - CREATE</title>
</head>
<body>
    <form method="POST" action="{{ route('flights.store') }}">
@csrf

<select name="airline_id">
@foreach($airlines as $a)
<option value="{{ $a->id }}">{{ $a->name }}</option>
@endforeach
</select>

<select name="origin_airport_id">
@foreach($airports as $a)
<option value="{{ $a->id }}">{{ $a->name }}</option>
@endforeach
</select>

<select name="destination_airport_id">
@foreach($airports as $a)
<option value="{{ $a->id }}">{{ $a->name }}</option>
@endforeach
</select>

<input type="date" name="departure_date">
<input type="time" name="departure_time">
<input type="number" name="price">

<button>Simpan</button>
</form>

</body>
</html>