






<div class="app-sidebar sidebar-shadow " style="overflow: scroll;">
    <div class="app-header__logo">
        
        <div class="logo-src">

            
        </div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>   
    
    <div class="scrollbar-sidebar ">


        <div class="app-sidebar__inner   mt-2">
           
                <a class="nav-link text-black " href="{{ route('app.dashboard') }}">
                    <div class=" d-flex">
                        <img width="30px" height="30px" class=" rounded-circle" src="{{ url(userimage()) }}" alt="">
                      
                      


                        <div class="p-0 m-0 ml-2 header-user-info">
                           <span > {{ auth::user()->name }}</span>
                           <br class=" p-0">
                           <span style="font-size: 12px;" class="  opacity-15"> {{ Auth::user()->role->name }}</span>
                           
                         
                        </div>
                    </div>
                
            
                  
                </a>
             
                <div class=" divider m-0"></div>

            <ul class="vertical-nav-menu">


                @isset($sele_categories)

                @if ( Request::is('app/sales').'*')

                <ul class="navbar-nav " >
                 
                    @foreach ($sele_categories as $category )
                    {{-- <li class="  nav-link  mb-2  p-2  bg-info "> --}}
                      <a class="  bg-info mb-2 nav-link pb-2 bg   p-3 text-light  text-center justify-content-center"  onclick="categoryitem({{ $category->id}})"  >
                        {{ $category->name }}</a>
                    {{-- </li> --}}
                    @endforeach

                
                  
                  </ul>

                    @endif

                    @else
                    <x-backend-sidebar/>
                    @endisset


                    @php
                        // $now = new DateTime();
                        // echo $now->format('Y-m-d');

                       
                    @endphp

            </ul>
        </div>
    </div>
</div> 