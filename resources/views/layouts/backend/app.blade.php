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
    {{-- <script src="{{ asset('css/app.css') }}"></script> --}}
    <link rel="stylesheet" href="{{ asset('assets/jquyery_ui/jquery-ui.min.js') }}">
</head>
<body>
    <div id="app" class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- header part  -->
        
     @include('layouts.backend.partials.header')

        <div class="app-main">
     @include('layouts.backend.partials.sidebare')
                  <div class="app-main__outer">
                    <div class="app-main__inner">

                 
              @yield('content')
              
                    </div>
    @include('layouts.backend.partials.footer')
                      </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div> 

        
      {{-- modal section --}}
        @include('layouts.backend.modal.modal')

       {{-- end modal section --}}

    </div>

       <!-- Scripts -->
     
       {{-- <script src="{{ asset('assets/scripts/main.js') }}"></script> --}}
     
       {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
       
       <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
       <script src="{{ asset('assets/scripts/main.js') }}"></script>
      
       <script src="{{ asset('js/app.js') }}"></script>
       <script src="{{ asset('js/iziToast.js') }}"></script>

       
{{--     
       <script src="{{ asset('node_modules/nestable2/jquery.nestable.js') }}"></script> --}}

       

       <script src="{{ asset('js/script.js') }}"></script>
      
       @include('vendor.lara-izitoast.toast')
       @stack('js')

       <script src="{{ asset('assets/jquyery_ui/jquery-ui.min.js') }}"></script>
      <script>
         
      // date time picker
         $(document).ready(function(){

           $('#datepickers').datepicker({

              dateFormat:"yy/mm/dd"
           });
            
         })


      </script>

    
</body>
</html>
