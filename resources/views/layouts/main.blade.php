<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} | {{ ucfirst($title) }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @if ($title == 'presensi')
        <style>
            body {
                background-image: none;
                background-color: #E0F2FE;
                background-size: cover;
            }

            .hero {
                display: none;
            }
        </style>
    @else
        <style>
            body {
                background: none;
                height: 100%;
            }

            .hero {
                left: 0;
                top: 0;
                position: absolute;
                z-index: -10;
                background-color: lightgray 50%;
                background-image: url("{{ asset('images/bg-2.png') }}");
                background-size: cover;
                width: 100%;
                filter: blur(4px) brightness(70%) !important;
            }
        </style>
    @endif
</head>

<body>
    <div class="hero"></div>

    @include('components.sidebar')
    @include('components.navbar')

    <main class="{{ $title == 'presensi' ? 'presensi' : '' }}">
        @yield('content')
    </main>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
