<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Flight Booking App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand bg-white shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/dashboard">FLYAJA</a>

        @auth
        <form method="POST" action="/logout" class="d-inline">
        @csrf
        <button class="btn btn-outline-danger btn-sm">Logout</button>
        </form>
        @endauth

    </div>
</nav>

<main class="container mb-5">
    @yield('content')
</main>

<footer class="text-center text-muted py-3 border-top">
    <small>© {{ date('Y') }} Flight Booking App</small>
</footer>

</body>
</html>
