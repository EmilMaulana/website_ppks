<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sign in</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- ========================= CSS here ========================= -->
        <script src="https://kit.fontawesome.com/f1ecbb1f89.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="{{ asset('assets/fancy/css/bootstrap-5.0.0-alpha.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fancy/css/LineIcons.2.0.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/fancy/css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/fancy/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    </head>
    <body class="body color-1">
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
        {{-- <header class="header navbar-area bg-white ">
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
                                <a class="page-scroll text-white" href="#home">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll text-white" href="#about">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll text-white" href="#services">Program</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll text-white" href="#portfolio">Lapor</a>
                            </li>
                        </ul>
                        <div class="navbar-nav ">
                            <li class="nav-item">
                                <a class=" text-white" href="/login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class=" text-white" href="/register">Sign Up</a>
                            </li>
                        </div>
                    </div> 
                </div> <!-- container -->
            </nav> <!-- navbar -->
        
        </header> --}}
        <!-- ========================= header end ========================= -->

        @yield('content')
        
        <!-- ========================= subscribe-section end ========================= -->

        <!-- ========================= footer start ========================= -->
        
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
