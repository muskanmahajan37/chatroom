<!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <link href="{{ asset('css/app.css') }}" rel="stylesheet">

                <title>{{ config('app.name', 'Laravel') }}</title>

                <!-- Fonts -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

                <!-- Styles -->
                <link rel="stylesheet" href="{{ asset('css/app.css') }}">

                <!-- Scripts -->
                <script src="{{ asset('js/app.js') }}" defer></script>
                <livewire:styles/>
        </head>


    <body class="font-sans antialiased">

            <div class="min-h-screen bg-gray-100">
                @if(auth()->check())
                @include('layouts.navigation')
                @endif

            
                <!-- Page Content -->
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </div>


            <livewire:scripts/>
            
    </body>

</html>