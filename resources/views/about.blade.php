<!-- resources/views/about/index.blade.php -->
@extends('layouts.app') {{-- assuming you have a layout file --}}

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact')}}">Contact</a></li>
                <!-- Add more navigation items as needed -->
            </ul>
        </nav>
    </header>

    <div class="container">
        
        <h1>About Us</h1>
        <p>Welcome to our website. We are...</p>
        {{-- Add more content as needed --}}
    </div>
    <footer>
        <p>&copy; {{ date('Y') }} Your Laravel App. All rights reserved.</p>
    </footer>
@endsection

</body>
</html>
    
