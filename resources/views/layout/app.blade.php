<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLYAJA - Flight Booking</title>
</head>
<body>
    <nav>

    @yield('content')
    @auth
        @if(auth()->user()->role === 'admin')
            <a href="/admin/dashboard">Admin Dashboard</a>
            <a href="/admin/airports">Airport</a>
            <a href="/admin/airlines">Airline</a>
            <a href="/admin/flights">Flight</a>
        @else
            <a href="/user/dashboard">User Dashboard</a>
        @endif

        @if(auth()->user()->role === 'user')
            <a href="/flights">Jadwal Penerbangan</a>
            <a href="/my-bookings">Booking Saya</a>
        @endif

        <form method="POST" action="/logout">
            @csrf
            <button>Logout</button>
        </form>
    @endauth

    @guest
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endguest
</nav>

</body>
</html>