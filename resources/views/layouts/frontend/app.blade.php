<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel=" shortcurt icon" href="{{ asset(site_favicon_icon()) }}" type="image/png" >


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->

    <link href="{{ asset('main.css') }}" rel="stylesheet">
  
    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
    @stack('css')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>




    @stack('css')
    <!-- Styles -->
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <style>
 .mmt{
       margin-top:100px;
    }

    .mtt{
    margin-top: 200px;
}
html{
  scroll-behavior: smooth;
}
 </style>
</head>
<body>
    <div id="app">
      
      @include('layouts.frontend.partials.header')
        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.frontend.partials.footer')

    </div>

    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/scripts/main.js') }}"></script>
   
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/iziToast.js') }}"></script>
 
    <script src="{{ asset('node_modules/nestable2/jquery.nestable.js') }}"></script>

    <script src="{{ asset('js/script.js') }}"></script>
   
      @include('vendor.lara-izitoast.toast')





    <script src="{{ asset('js/frontend.js') }}" defer></script>
  
    @stack('js')
</body>
</html>
