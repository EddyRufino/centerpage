<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <script src="{{ asset('/js/scrollreveal.min.js') }}"></script>

</head>
<body>

    @include('partials.nav')

    <div id="app" >
        <header>
            {{-- @include('layouts.header') --}}

            <div class="container">
                @include('partials.session-status')
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="bg-white text-black-50 text-center py-3 shadow">
            {{ config('app.name') }} | Copyright @ {{ date('Y') }}
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('/js/customlibs.js') }}"></script>
</body>
</html>
