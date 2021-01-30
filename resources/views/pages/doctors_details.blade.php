<html lang="en" >
<head >
    <!-- Required Meta Tags -->
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" >
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}" >
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css')}}" >
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css')}}" >
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css')}}" >
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}" >
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}" >
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css')}}" >
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css')}}" >
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" >
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}" >
    <title >Home At Doctor</title >
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}" >
</head >
<body >

<a href="index.html" >
    <img class="logo_" src="{{ asset('assets/img/logo___-.png')}}" >
</a >
<button class="default-btn bg-transparent " onclick="location.href='{{ url('/login') }}'" style="position: absolute; top: 35px; right: 35px" >Sign In
</button >
<!-- Inner Banner -->
<div class="inner-banner inner-bg1" style="margin-top: -40px; height: 190px !important;" >
    <div class="container" >
        <div style="position: absolute; top: 49%; left: 43%" >
            <h3 class="text-center" >Doctor Details</h3 >
        </div >
    </div >
    <div class="inner-banner-shape" >
        <div class="shape1" >
            <img src="{{ asset('assets/img/inner-banner/inner-banner-shape1.png')}}" alt="Images" >
        </div >
        <div class="shape2" >
            <img src="{{ asset('assets/img/inner-banner/inner-banner-shape2.png')}}" alt="Images" >
        </div >
    </div >
</div >
<!-- Inner Banner End -->
<!-- Doctors Details Area -->
<div class="doctors-details-area pt-100 pb-70" >
    <div class="container" >
        <div class="row align-items-center" >
            <div class="col-lg-5" >
                <div class="doctors-details-img" >
                    <img src="{{ asset('uploads/doctor/' . $user->images) }}" alt="Images" >
                </div >
            </div >
            <div class="col-lg-7" >
                <div class="doctors-details-content" >
                    <h3 >{{$user->name}}</h3 >
                    <span >{{$user->degree}}</span >
                    <ul class="doctors-details-list" >
                        <li >Department: {{$user->department}}</li >
                        <li >Experience: {{$user->experience}}</li >
                        <li >Certifications: {{$user->certifications}}</li >
                        <li >Practice Areas: {{$user->department}}</li >
                        <li >Phone: <a href="tel:+001-548-159-2491" >{{$user->phone}}</a ></li >
                        <li >Email: <a href="mailto:hello@shubrata.com" >{{$user->email}}</a ></li >
                    </ul >
                    <div class="about-btn" >
                        <button onclick="location.href='{{ route('patient.edit', $user->id) }}'" class="default-btn-two text-center " >BOOK AN APPOINTMENT NOW!</button >
                    </div >
                </div >
            </div >
        </div >
    </div >
    <div class="doctors-details-shape" >
        <img src="{{ asset('assets/img/doctors/doctors-shape4.png')}}" alt="Images" >
    </div >
</div >
<!-- Doctors Details Area End -->

<!-- Copy-Right Area -->
<div class="copy-right-area" >
    <div class="container" >
        <div class="copy-right-text text-center" >
            <!-- p>
                Copyright @2020 Medizo. All Rights Reserved by
                <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a>
            </p> -->
            <div class="col-lg-12 col-md-6" >
                <div class="footer-widget pl-2" style="margin-bottom: 0px" >
                    <ul class="social-link" >
                        <li >
                            <a href="#" target="_blank" ><i class='bx bxl-facebook' ></i ></a >
                        </li >
                        <li >
                            <a href="#" target="_blank" ><i class='bx bxl-twitter' ></i ></a >
                        </li >
                        <li >
                            <a href="#" target="_blank" ><i class='bx bxl-instagram' ></i ></a >
                        </li >
                        <li >
                            <a href="#" target="_blank" ><i class='bx bxl-pinterest-alt' ></i ></a >
                        </li >
                        <li >
                            <a href="#" target="_blank" ><i class='bx bxl-youtube' ></i ></a >
                        </li >
                    </ul >
                </div >
            </div >
        </div >
    </div >
</div >
<!-- Copy-Right Area End -->
<!-- Jquery Min JS -->
<script src="{{ asset('assets/js/jquery-3.5.1.slim.min.js')}}" ></script >
<!-- Popper Min JS -->
<script src="{{ asset('assets/js/popper.min.js')}}" ></script >
<!-- Bootstrap Min JS -->
<script src="{{ asset('assets/js/bootstrap.min.js')}}" ></script >
<!-- Magnific Popup Min JS -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}" ></script >
<!-- Owl Carousel Min JS -->
<script src="{{ asset('assets/js/owl.carousel.min.js')}}" ></script >
<!-- Nice Select Min JS -->
<script src="{{ asset('assets/js/jquery.nice-select.min.js')}}" ></script >
<!-- Wow Min JS -->
<script src="{{ asset('assets/js/wow.min.js')}}" ></script >
<!-- Meanmenu JS -->
<script src="{{ asset('assets/js/meanmenu.js')}}" ></script >
<!-- Datepicker JS -->
<script src="{{ asset('assets/js/datepicker.min.js')}}" ></script >
<!-- Ajaxchimp Min JS -->
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}" ></script >
<!-- Form Validator Min JS -->
<script src="{{ asset('assets/js/form-validator.min.js')}}" ></script >
<!-- Contact Form JS -->
<script src="{{ asset('assets/js/contact-form-script.js')}}" ></script >
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js')}}" ></script >
</body >
</html >