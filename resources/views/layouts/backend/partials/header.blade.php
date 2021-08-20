<div class="app-header header-shadow">
    <div class="app-header__logo">
        
        {{-- <div class="logo-src"></div> --}}

        <div class=" navbar-brand">

    <a href="{{ route('app.dashboard') }}"><img width="100px" height="60px"  src="{{site_logo() ? asset(site_logo()) : asset(defaultimage()) }}" alt=""></a>

        </div>

        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>

            <div>
           
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu " >
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
    </div>    <div class="app-header__content">
        <div class="app-header-right">


            <ul class="header-menu nav">

                <li class="dropdown nav-item">
                    <a href="{{ url('/') }}" class="nav-link">
                        {{-- <i class="nav-link-icon fa fa-cog"></i> --}}
                        <i class="metismenu-icon pe-7s-check pr-1"></i>
                        Visit site
                    </a>
                </li>

                <li class="dropdown nav-item">
                    <a href="{{ route('app.dashboard') }}" class="nav-link">
                        <i class="fas fa-tachometer-alt pr-2"></i>
                        Admin dashboard
                    </a>
                </li>

                <li class="dropdown nav-item">
                    <a href="{{ route('app.prodacts.index') }}" class="nav-link">
                        <i class="metismenu-icon pe-7s-check pr-1"></i>
                        Prodact
                    </a>
                </li>

                <li class="dropdown nav-item">
                    <a href="{{ route('app.sales.index') }}" class="nav-link">
                        <i class="metismenu-icon pe-7s-check pr-1"></i>
                        Sales
                    </a>
                </li>

               <li class="dropdown nav-item">
             
                <a type="button" href="{{ route('app.report.dailyreport') }}" class="nav-link">
                    <i class="metismenu-icon pe-7s-check pr-1"></i>
                    Report
                </a>
               </li>


            </ul>       
        
        </div>
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="30px" height="30px" class=" rounded-circle" src="{{ url(userimage()) }}" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu mt-2 dropdown-menu-right">
                                    <a href="{{ route('app.profile.index') }}" tabindex="0" class="dropdown-item">
                                        <i class=" opacity-2  mr-2 fas fa-user"></i>Profile</a>
                                    <a href="{{ route('app.profile.passwoed.change') }}" tabindex="0" class="dropdown-item">
                                        <i class="opacity-2  mr-2  fas fa-key"></i>Change password</a>
                                   <a href="{{ url('app/settings/general') }}" class="dropdown-item">
                                    <i class="opacity-2 metismenu-icon pe-7s-settings mr-2"></i>Settings</a>
                                
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <a href="#" tabindex="0" class="dropdown-item"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt mr-2 opacity-2"></i> Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                            {{ auth::user()->name }}
                            </div>
                            <div class="widget-subheading">
                                {{ Auth::user()->role->name }}
                            </div>
                            
                        </div>
 
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>   