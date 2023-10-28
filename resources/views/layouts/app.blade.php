<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Datatables  CSS-->
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>

<!-- Jquery & Datatables JS  -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dataTables.buttons.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jszip.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/pdfmake.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/vfs_fonts.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/buttons.html5.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/buttons.print.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
<!--   Datatables Server all  JS  -->
<script src="{{ asset('js/dataTables.js') }}" type="text/javascript"></script>
<!--   Custom Js  -->
<script src="{{ asset('js/customs.js') }}" type="text/javascript"></script>


</body>
</html>
