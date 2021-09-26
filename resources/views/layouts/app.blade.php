<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poggers</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;700&display=swap" rel="stylesheet">


<body class='flex bg-gray-500'>

           {{-- width změnit stejnou v navbar.blade.php --}}
    <div style="width:12%" class="flex flex-col justify-center items-center relative">
        <x-left-navbar/>
    </div>

    <div style="width: 88%" class="bg-gray-500 h-screen ">
        @yield('container')
    </div>

</body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>











{{-- <!DOCTYPE html>
<html lang="cs" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app" class="flex flex-col min-h-screen bg-black">
        <x-navbar />

        <main class="flex-1 pt-20 lg:pt-24">
            @yield('content')
        </main>

        <x-page-footer />
    </div>

    <script src="{{ mix('js/app.js') }}" defer></script>
    @stack('js')
</body>

</html> --}}