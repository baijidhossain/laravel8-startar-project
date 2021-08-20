<nav class=" fixed-top navbar navbar-expand-md p-2 navbar-light bg-white shadow-sm">
    <div class=" container">
        <a class="navbar-brand  pb-0" href="{{ url('/') }}">
            {{-- {{ config('app.name', 'Laravel') }} --}}


    {{-- <img width="90px"  src="{{ url(site_logo() )}}" alt=""> --}}

    <a href="{{ url('/') }}"><img width="100px"  src="{{site_logo()}}" alt=""></a>


         
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">


              <li class="nav-item"><a href="{{ url('/') }}" class="nav-link ">Home</a></li>
              <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
              <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
              <li class="nav-item"><a href="#menu" class="nav-link">Menu</a></li>
              <li class="nav-item"><a href="#contact" class="nav-link">Contact us</a></li>

              <li class=" border border-bottom-0 border-right-0 border-top-0"></li>








                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.users.index') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class=" d-flex nav-item dropdown">

                     
                            {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              <img width="30px" height="30px" class=" rounded-circle" src="{{ url(userimage()) }}" alt="">
                              {{ Auth::user()->name }}
                              {{ Auth::user()->role->name }}
                          </a> --}}

                          
                          <img width="30px" height="30px" class=" m-1 rounded-circle" src="{{ url(userimage()) }}" alt="">
                            <div id="navbarDropdown" class=" text-center  d-flex  nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           
                               
                            
                                <div class=" ">
                                    <div>{{ auth::user()->name }}</div>
                                    <p style="font-size:10px" class=" opacity-10 m-0 p-0  text-center">{{ Auth::user()->role?Auth::user()->role->name:'No role found' }} </p>
                                </div>
                                  
                                 
                          </div>
                          
                         

                          {{-- <div class="widget-heading">
                            {{ auth::user()->name }}
                            </div>
                            <div class="widget-subheading">
                                {{ Auth::user()->role->name }}
                            </div> --}}




                        <div class="dropdown-menu  mt-2" aria-labelledby="navbarDropdown">

                            @if(Auth::check() && Auth::user()->role)
                                @if (Auth::user()->role->routepermission==true)
                                   @if (Auth::user()->role->permissions->count()>0)
                                   <a href="{{ route('app.dashboard') }}" class="dropdown-item">
                                    <i class="fas fa-tachometer-alt pr-1 opacity-2"></i>
                                    Admin dashboard
                                </a>
                                   @endif
                                    @endif 
                                @endif
                              
                            
                                
                           
                                <a class="dropdown-item" href="{{ route('client.profile') }}" ><i class=" opacity-2 pr-1 fas fa-user"></i>Profile
                                </a>


                        
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-1 opacity-2"></i> {{ __('Logout') }}
                            </a>

                          
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

