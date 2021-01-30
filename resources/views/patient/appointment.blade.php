<html lang="zxx" >
<head >
    <!-- Required Meta Tags -->
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" >
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" >
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}" >
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}" >
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}" >
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" >
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}" >
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" >
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" >
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" >
    <title >Appointment Page</title >
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" >
</head >
<body >
<a href="index.html" >
    <img class="logo_" src="{{ asset('assets/img/logo___-.png') }}" >
</a >
<button class="default-btn bg-transparent " onclick="location.href='sign-in.html'" style="position: absolute; top: 35px; right: 35px" >Sign In
</button >
<!-- Start Navbar Area -->
<div class="navbar-area" >
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav" >
    </div >
    <div class="side-nav-responsive" >
        <div class="container" >
            <div class="container" >
                <div class="side-nav-inner" >
                    <div class="side-nav justify-content-center align-items-center" >
                        <div class="side-item" >
                            <div class="option-item" >
                                <i class='search-btn bx bx-search' ></i >
                                <i class='close-btn bx bx-x' ></i >
                                <div class="search-overlay search-popup" >
                                    <div class='search-box' >
                                        <form class="search-form" >
                                            <input class="search-input" name="search" placeholder="Search" type="text" >
                                            <button class="search-button" type="submit" >
                                                <i class="bx bx-search" ></i >
                                            </button >
                                        </form >
                                    </div >
                                </div >
                            </div >
                            <div class="option-item" >
                                <div class="add-cart-btn" >
                                    <a href="#" class="cart-btn-icon" >
                                        <i class='bx bx-shopping-bag' ></i >
                                        <span >0</span >
                                    </a >
                                </div >
                            </div >
                        </div >
                    </div >
                </div >
            </div >
        </div >
    </div >
</div >
<!-- End Navbar Area -->
<!-- Inner Banner -->
<div class="inner-banner inner-bg9" style="height: 140px !important" >
    <div class="container" >
        <div class="" style="position: absolute !important; top: 40px;left: 520px;  margin: auto;" >
            <h2 style="color: white" >Appointment</h2>
        </div >
    </div >
    <div class="inner-banner-shape" >
        <div class="shape1" >
            <img src="assets/img/inner-banner/inner-banner-shape1.png" alt="Images" >
        </div >
        <div class="shape2" >
            <img src="assets/img/inner-banner/inner-banner-shape2.png" alt="Images" >
        </div >
    </div >
</div >
<!-- Inner Banner End -->

    <!-- Appointment Area -->
    <div class="appointment-area appointment-bg" id="appointment_area" >
        <div class="container" >
            <div class="row" >
                <div class="col-lg-6" >
                    <div class="appointment-from-area" >
                        <div class="appointment-from " >
                            <h2 >Get Your Appointment</h2 >
                            <p >Online Easily During This Corona Pandemic</p >
                            <form method="POST" action="{{ route('patient.store') }}" enctype="multipart/form-data">
                     {{ csrf_field() }}
                                <div class="row" >
                                    <div class="col-lg-12 col-sm-12" >
                                        <div class="form-group" >
                                            <input type="text" name="doctor_name" class="form-control" required value="{{$user->name}}" readonly>
                                        </div >
                                    </div >
                                     <input type="hidden" name="doctor_phone" class="form-control" required value="{{$user->phone}}" >
                                      <input type="hidden" name="doctor_email" class="form-control" required value="{{$user->email}}" >
                                    <div class="col-lg-12 col-sm-12" >
                                        <div class="form-group" >
                                            <div class="form-group" >
                                            <input type="text" class="form-control" required value="{{ Auth::user()->name }}" name="patient_name">
                                        </div >
                                        </div >
                                    </div >
                                   
                                    <div class="col-lg-6 col-sm-6" >
                                        <div class="form-group" >
                                            <input type="text" class="form-control" required value="{{ Auth::user()->phone }}" name="patient_phone">
                                        </div >
                                    </div >

                                    <div class="col-lg-6 col-sm-6" >
                                        <div class="form-group" >
                                            <input type="email" class="form-control" required value="{{ Auth::user()->email }}" name="patient_email">
                                        </div >
                                    </div >

                                    <div class="col-lg-12 col-sm-12" >
                                        <div class="form-group" >
                                            <div class="input-group date" id="datetimepicker" >
                                                <input type="text" class="form-control" placeholder="Select Date" name="apt_date" >
                                                <span class="input-group-addon" ></span >
                                            </div >
                                        </div >
                                    </div >
                                    <div class="col-lg-12 col-md-12" >
                                        <button type="submit" class="default-btn" >
                                            Book An Appointment
                                        </button >
                                    </div >
                                </div >
                            </form >
                        </div >
                    </div >
                </div >
            </div >
        </div >
        <div class="appointment-img-2" >
            <img src="{{ asset('assets/img/appointment/appointment-img2.png') }}" alt="Images" >
        </div >
        <div class="appointment-shape" >
            <img src="{{ asset('assets/img/appointment/appointment-shape.png') }}" alt="Images" >
        </div >
    </div >
    <!-- Appointment Area End -->
    <!-- Footer Area -->
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
    <!-- Copy-Right Area End -->
    <!-- Jquery Min JS -->
    <script src="{{ asset('assets/js/jquery-3.5.1.slim.min.js') }}" ></script >
    <!-- Popper Min JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}" ></script >
    <!-- Bootstrap Min JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" ></script >
    <!-- Magnific Popup Min JS -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}" ></script >
    <!-- Owl Carousel Min JS -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}" ></script >
    <!-- Nice Select Min JS -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}" ></script >
    <!-- Wow Min JS -->
    <script src="{{ asset('assets/js/wow.min.js') }}" ></script >
    <!-- Meanmenu JS -->
    <script src="{{ asset('assets/js/meanmenu.js') }}" ></script >
    <!-- Datepicker JS -->
    <script src="{{ asset('assets/js/datepicker.min.js') }}" ></script >
    <!-- Ajaxchimp Min JS -->
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}" ></script >
    <!-- Form Validator Min JS -->
    <script src="{{ asset('assets/js/form-validator.min.js') }}" ></script >
    <!-- Contact Form JS -->
    <script src="{{ asset('assets/js/contact-form-script.js') }}" ></script >
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}" ></script >
</body >
</html >