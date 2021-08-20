


            @extends('layouts.frontend.app')
@push('css')
    {{-- <style>
       .paddingtop-100 paddingbuttom-100{
          padding-top: 100px;
       } 
       .paddingbuttom-100{
          padding-bottom: 100px;
       } 
    </style> --}}
@endpush

            @section('content')
                <div class="container bg-white">
                <div class="row ">
            <!--========== HOME ==========-->
                <section  class=" col-md-12  paddingtop-100 paddingbuttom-100 " id="home">
                        <div class=" row">
                            <div class=" col-md-6  "> 
                                <div class=" text-center mt-5 pt-5">
                                    <h1 class=" text-success">Tasty food</h1>
                                    <h2 class="">Try the best food of <br> the week.</h2>
                                    <a href="#" class="button">View Menu</a>
                                </div>
                            </div>
                            <div class=" col-md-6  "> 
                                <img height="400" width="400" class=" text-center" src="{{ asset('assets/frontend_image/home.png') }}" alt="" class="">
                            </div>

                        </div>
                </section>




                                {{-- about --}}
                <section  class="paddingtop-100 paddingbuttom-100 col-md-12  " id="about">
                    <div class=" row">

                        <div class=" col-md-6  "> 
                            <img height="400" width="400" class=" img-thumbnail  rounded-circle text-center" src="{{ asset('assets/frontend_image/about.jpg') }}" alt="" class="">
                        </div>
                        <div class=" col-md-6  "> 
                            <span class="section-subtitle about__initial">About us</span>
                            <h1 class="text-info">We cook the best <br> tasty food</h1>
                            <p class="about__description">We cook the best food in the entire city, with excellent customer service, the best meals and at the best price, visit us.</p>
                            <a href="#" class="button">Explore history</a>
                        </div>


                    </div>
            </section>







            
            <!--========== SERVICES ==========-->
            <section class="paddingtop-100 paddingbuttom-100  col-md-12  " id="services">
               
                <h3 class=" text-center">Offering</h3>
                <h2 class=" mb-5 text-center text-bold">Our amazing services</h2>
                <div class="row justify-content-center">

                    <div class=" text-center col-md-3  mb-sm-4">
                        <i style="font-size: 40px" class="fas fa-utensils"></i>
                        <h3 class="">Excellent food</h3>
                        <p class=" ">
                            We offer our clients excellent quality services for many years, with the best and delicious food in the city.
                        </p>
                    </div>




                    <div class=" text-center col-md-3  mb-sm-4">
                        <i  style="font-size: 40px" class="fas fa-coffee"></i>
                        <h3  class="">Popular food</h3>
                        <p class=" ">
                            We offer our clients excellent quality services for many years, with the best and delicious food in the city.
                        </p>
                    </div>

                    <div class=" text-center col-md-3  mb-sm-4">
                        <i  style="font-size: 40px" class="fas fa-hamburger"></i>
                        <h3 class="">Fast food</h3>
                        <p class=" ">
                            We offer our clients excellent quality services for many years, with the best and delicious food in the city.
                        </p>
                    </div>



                    <div class=" text-center col-md-3  mb-sm-4">
                        <i style="font-size: 40px" class="fas fa-truck"></i>
                        <h3 class="">Delivery</h3>
                        <p class=" ">
                            We offer our clients excellent quality services for many years, with the best and delicious food in the city.
                        </p>
                    </div>
                </div>
            </section>

            <section class="paddingtop-100 paddingbuttom-100 col-md-12" id="contact">
                <div class=" row">
                    <div class=" col-md-6">

                        <form action="" method="">

                        <div class=" form-group">
                            <label for="name">name</label>
                            <input class="form-control" type="text" name="name">
                        </div>


                        <div class=" form-group">
                            <label for="email">email</label>
                            <input class="form-control" type="email" name="email">
                        </div>

                        <div class=" form-group">
                            <label for="about">about</label>
                            <textarea rows="4" class="form-control" type="about" name="about"></textarea>
                        </div>

                        <input type="submit" class="btn btn-primary btn-sm" value="Cantact">
                    </form>

                    </div>
                    <div class=" col-md-6">
                     <iframe width="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.854279285357!2d90.35124501481603!3d23.788202884570737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c171e3a03ccd%3A0xa7dc56dc9065dee2!2sDelta%20Hospital%20Canteen!5e0!3m2!1sen!2sbd!4v1627153727702!5m2!1sen!2sbd"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </section>

                </div>
            </div>

<div style="background-color: #273746;padding-top:30px;color:#ffff;" class=" ">
    <div class=" container">
        <div class=" row">

            {{-- footer --}}
            <section class="paddingtop-100  col-md-12">
                <div class=" row">
            <div class=" col-md-3 col-sm-6 ">
                
                    <a href="#" class="footer__logo">Tasty Food</a>
                    <span class="footer__description">Restaurant</span>
                    <div>
                        <a href="https://www.facebook.com/mdbaijidhossain24434/" class=" text-white mr-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/md_baijid_hossain/" class=" text-white mr-2"><i class='fab fa-instagram'></i></a>
                        <a href="#" class=" text-white mr-2"><i class='fab fa-twitter'></i></a>
                    </div>
               
            </div>
            
            <div class=" col-md-3 col-sm-6 ">
                <h3 class="footer__title">Services</h3>
                <ul class=" list-unstyled">
                    <li>Delivery</li>
                    <li>Pricing</li>
                    <li>Fast food</li>
                    <li>Reserve your spot</li>
                </ul>
            </div>
            
            <div class=" col-md-3 col-sm-6 ">
                <h3 class="footer__title">Information</h3>
                <ul class="list-unstyled">
                    <li>Event</li>
                    <li>Contact us</li>
                    <li>Privacy policy</li>
                    <li>Terms of services</li>
                </ul>
            </div>
            
            <div class=" col-md-3 col-sm-6 ">
                <h3 class="footer__title">Adress</h3>
                <ul class="list-unstyled">
                    <li>M/S NIHON ENTERPRICE</li>
                    <li>and Catering Service</li>
                    <li>26/2, Principal Abul Kashem Road, 1216 New Building 9th, Dhaka 1216</li>
                    <li>nihon@email.com</li>
                </ul>
            </div>
            
            
                    <div class=" col-md-12 text-center mt-5">
                        <p class="footer__copy">&#169; 2020 Baijid. All right reserved</p>
                    </div>
            
                </div>
            </section>
                        {{-- end of footer --}}
        </div>
    </div>
</div>

            @endsection