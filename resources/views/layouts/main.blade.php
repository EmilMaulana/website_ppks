<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/main-logo.png') }}" style="width: 32px; height: 32px">
        <!-- Place favicon.ico in the root directory -->

		<!-- ========================= CSS here ========================= -->
        <script src="https://kit.fontawesome.com/f1ecbb1f89.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="{{ asset('assets/fancy/css/bootstrap-5.0.0-alpha.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fancy/css/LineIcons.2.0.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/fancy/css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/fancy/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>
    <body class="body">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- ========================= preloader start ========================= -->
            <div class="preloader">
                <div class="loader">
                    <div class="ytp-spinner">
                        <div class="ytp-spinner-container">
                            <div class="ytp-spinner-rotator">
                                <div class="ytp-spinner-left">
                                    <div class="ytp-spinner-circle"></div>
                                </div>
                                <div class="ytp-spinner-right">
                                    <div class="ytp-spinner-circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- preloader end -->

        <!-- ========================= header start ========================= -->
        {{-- <header class="header navbar-area bg-white "> --}}
            <nav class="navbar navbar-expand-lg color-1">
                <div class="container ">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('assets/img/main-logo.png') }}" alt="Logo" width="50px">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav m-auto ">
                            <li class="nav-item">
                                <a class=" text-white" href="/#home">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class=" text-white" href="/#about">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class=" text-white" href="/#services">Program</a>
                            </li>
                            <li class="nav-item">
                                <a class=" text-white" href="/lapor">Lapor</a>
                            </li>
                        </ul>
                        <div class="navbar-nav ">
                            @auth
                            <li class="">
                                <a class="btn btn-primary text-white" href="/home">Dashboard</a>
                            </li>
                            
                            @else
                            <li class="">
                                <a class="btn btn-danger text-white" href="{{ route('login') }}">Sign Up</a>
                            </li>
                            @endauth
                            
                        </div>
                    </div> 
                </div> <!-- container -->
            </nav> <!-- navbar -->
        
        {{-- </header> --}}
        <!-- ========================= header end ========================= -->

        @yield('content')
        
        <!-- ========================= subscribe-section end ========================= -->

        <!-- ========================= footer start ========================= -->
        <footer class="footer pt-100 color-1 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInLeft" data-wow-delay=".2s">
                            <a href="index.html" class="logo mb-30"><img src="{{ asset('assets/img/main-logo.png') }}" alt="logo"></a>
                            <p class="mb-30 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptates facere tempore architecto veniam nesciunt fugiat placeat vel neque exercitationem.</p>
                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".4s">
                            <h4 class="text-white">Quick Link</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="javascript:void(0)" class="text-white">Home</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-white">About Us</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-white">Service</a>
                                </li> 
                                <li>
                                    <a href="javascript:void(0)" class="text-white">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".6s">
                            <h4 class="text-white">Service</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="javascript:void(0)" class="text-white">Marketing</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-white">Branding</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-white">Web Design</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-white">Graphics Design</a>
                                </li> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInRight" data-wow-delay=".8s">
                            <h4 class="text-white">Contact</h4>
                            <ul class="footer-contact">
                                <li>
                                    <p class="text-white">+00983467367234</p>
                                </li>
                                <li>
                                    <p class="text-white">yourmail@gmail.com</p>
                                </li>
                                <li>
                                    <p class="text-white">Jackson Heights, NY</br>
                                    USA</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="copyright-area">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            {{-- <div class="footer-social-links text-white">
                                <ul class="d-flex">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                        <div class="col-md-6">
                            <p class="wow fadeInUp text-white" data-wow-delay=".3s">&copy; Satgas Pencegahan & Penanganan Kekerasan Seksual</p>
                            <p class="wow fadeInUp text-white" data-wow-delay=".3s"> Universitas Singaperbangsa Karawang</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ========================= footer end ========================= -->


        <!-- ========================= scroll-top ========================= -->
        <a href="#" class="scroll-top color-1">
            <i class="lni lni-arrow-up "></i>
        </a>
        
		<!-- ========================= JS here ========================= -->
		<script src="{{ asset('assets/fancy/js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>
        <script src="{{ asset('assets/fancy/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/fancy/js/count-up.min.js') }}"></script>
        <script src="{{ asset('assets/fancy/js/imagesloaded.min.js') }}"></script>
		    <script src="{{ asset('assets/fancy/js/main.js') }}"></script>
    </body>
</html>
