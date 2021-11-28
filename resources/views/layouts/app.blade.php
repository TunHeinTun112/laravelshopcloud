<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name','Laravel') }}</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
</head>
<body class="bg-gray-200 h-screen antialiassed leading-none font-sans">
    <div id="app">
        <header class="bg-blue-900 py-4">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div></div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a href="/" class="no-underline hover:underline">Home</a>
                    <a href="/shop" class="no-underline hover:underline">Shop</a>
                    <a href="/cart" class="no-underline hover:underline">Cart</a>
                </nav>
            </div>
        </header>
        @yield('content')
    </div>
</body>
</html>
