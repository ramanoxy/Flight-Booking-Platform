<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
        @extends('layout.app')

    @section('content')
    <h2>Register</h2>

    <form method="POST" action="/register">
        @csrf
        <input name="name" placeholder="Nama"><br>
        <input name="email" type="email" placeholder="Email"><br>
        <input name="password" type="password" placeholder="Password"><br>
        <button>Register</button>
    </form>
    @endsection
</body>
</html>