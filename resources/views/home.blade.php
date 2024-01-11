@extends('layouts.app')

@section('content')
<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Add any additional stylesheets or scripts here -->
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <!-- Add more navigation items as needed -->
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Welcome to Your Laravel App</h1>
            <p>Build something amazing with Laravel!</p>
            <a href="#" class="btn">Get Started</a>
        </section>

        <!-- Add more sections/content as needed -->
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Your Laravel App. All rights reserved.</p>
    </footer>

    <!-- Add any additional scripts here -->

</body>
</html>


@endsection