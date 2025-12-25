<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
        @extends('layout.app')

    @section('content')
    <h2>Login</h2>

    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button>Login</button>
    </form>
    @endsection
</body>
</html>