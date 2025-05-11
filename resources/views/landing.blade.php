<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looking for something to do?</title>
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">

</head>
<body>
    <div class="hero">
        <h1>WTG? Local Event Finder</h1>
        <p>Discover the best local events around you.</p>
        <div class="cta-buttons">
            <a href="{{ route('login') }}">Log In</a>
            <a href="{{ route('register') }}">Register</a>
            <a href="{{ url('/home') }}">Explore as Guest</a>
        </div>
    </div>
</body>
</html>
