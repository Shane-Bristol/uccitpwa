<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>@yield('title', 'UCC IT Department')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @PwaHead
    <link rel="apple-touch-icon" href="{{ asset('icons/apple-touch-icon.png') }}">
</head>
<body>
    @include('partials.icons')

    @hasSection('hero')
        @yield('hero')
    @else
        <header class="topbar">
            <a href="{{ route('home') }}" class="back" aria-label="Back to home">
                <svg class="icon"><use href="#i-left"/></svg>
            </a>
            <h1>@yield('heading', 'UCC IT Department')</h1>
        </header>
    @endif

    <main class="container @yield('main-class')">
        @yield('content')
    </main>

    <a href="mailto:{{ config('ucc.hod_email') }}?subject=Inquiry%20for%20the%20HOD"
       class="fab" aria-label="Email the HOD">
        <svg class="icon"><use href="#i-mail"/></svg>
        <span class="fab-label">Email HOD</span>
    </a>

    @RegisterServiceWorkerScript
</body>
</html>
