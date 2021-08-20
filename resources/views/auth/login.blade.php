@extends('layouts.frontend.app')


@push('css')
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="{{ asset('login_file/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_file/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_file/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_file/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_file/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login_file/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_file/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_file/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login_file/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_file/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login_file/css/main.css') }}">
<!--===============================================================================================-->

@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 mmt">
    
            <div class=" ">
                <div class="container ">
                    <div class=" card ">
                        <div class=" card-body">
                            <form class="login100-form validate-form"   method="POST" action="{{ route('login') }}">
                                @csrf
                                <span class="login100-form-title p-b-20">
                                    Welcome
                                </span>
                                <span class="login100-form-title p-b-48">
                                 
                                </span>
                              
                                <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
    
                                
                                    <input class="input100   @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                                   
                                   
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                   
                                    <span class="focus-input100" data-placeholder="Email"></span>
    
                                </div>
            
                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <span class="btn-show-pass">
                                        <i class="zmdi zmdi-eye"></i>
                                    </span>
                                    <input class="input100  @error('password') is-invalid @enderror" type="password" name="password"  autocomplete="current-password" >
                                    
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    
                                    <span class="focus-input100" data-placeholder="Password"></span>
    
                                </div>
            
                                <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                        <button class="login100-form-btn">
                                              {{ __('Login') }}
                                        </button>
    
                                    </div>
                                </div>
    
                
            
                            
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            
        
            {{-- <div id="dropDownSelect1"></div> --}}


        </div>
    </div>
</div>
@endsection



@push('js')
	
<!--===============================================================================================-->
<script src="login_file/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login_file/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login_file/vendor/bootstrap/js/popper.js"></script>
	<script src="login_file/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login_file/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login_file/vendor/daterangepicker/moment.min.js"></script>
	<script src="login_file/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login_file/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login_file/js/main.js"></script>
@endpush
