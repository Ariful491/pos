<?php

use App\Common\Common;

?>
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

    {{--   <div x-data="{ open: true }" class="text-center absolute left-0 right-0 py-4 lg:px-4">
           <div x-show="open"
                class="p-2  bg-red-600 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
                role="alert">
               <span class="flex rounded-full bg-red-900 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
               <span
                   class="font-semibold mr-2 text-left flex-auto">
                   Get the coolest t-shirts from our brand new store
               </span>

               <button @click="open=false" type="button"
                       class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-full focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                       data-dismiss-target="#alert-1" aria-label="Close">
                   <span class="sr-only">Close</span>
                   <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                   </svg>
               </button>

           </div>
       </div>
   --}}

    @if(session()->has([Common::ALERT_MESSAGE_TEXT]))
        <x-alert :type="session()->get(Common::ALERT_TYPE_ERROR)" :message="session()->get('message')"/>
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
