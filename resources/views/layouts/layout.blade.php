<!DOCTYPE html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }} " >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      @vite('resources/css/app.css')
    </head>
  <body class="bg-gray-100">
      @include('layouts/header')
    <main>
      @yield('content')
    </main>
     @include('layouts/footer-end')
    @vite('resources/js/app.js')  
  </body>
</html>