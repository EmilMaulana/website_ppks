<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>123</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/main-logo.png') }}" style="width: 32px; height: 32px">
        <!-- Place favicon.ico in the root directory -->

		<!-- ========================= CSS here ========================= -->
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
            <nav class="navbar navbar-expand-lg color-1 fixed-top">
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
                            {{-- <li class="nav-item">
                                <a class="page-scroll text-white" href="#home">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll text-white" href="#portfolio">Lapor</a>
                            </li> --}}
                        </ul>
                        <div class="navbar-nav ">
                            <form action="{{ route('logout') }}" method="post" class="">
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                  {{ __('Logout') }}</button>
                            </form>
                        </div>
                    </div> 
                </div> <!-- container -->
            </nav> <!-- navbar -->
        
        {{-- </header> --}}

        <!-- File blade.php -->

        <!-- Tombol toggle sidebar untuk tampilan kecil -->
        <button class="btn btn-primary d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
            Toggle Sidebar
        </button>

        <!-- Kontainer utama sidebar -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-3">
                <div class="sidebar  d-none d-md-block offcanvas offcanvas-start" id="sidebar">
                    <div class="card ml-2 shadow color-1" style="border-radius: 20px;">
                        <div class="card-body rounded-4 ">
                            <div class=" text-center">
                                {{-- <h2>Sidebar</h2> --}}
                                <ul>
                                    <li class="nav-item-2 mb-2">
                                        <a href="/home/profile" class="nav-link text-white fw-bolder">Informasi Pribadi</a>
                                    </li>
                                    <li class="nav-item-2 mb-2">
                                        <a href="#" class="nav-link text-white fw-bold">Menu 2</a>
                                    </li>
                                    <li class="nav-item-2 mb-2">
                                        <a href="#" class="nav-link text-white fw-bold">Menu 3</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                @yield('content')
            </div>
        </div>
        
        

        <!-- ========================= header end ========================= -->

        
        
        <!-- ========================= subscribe-section end ========================= -->

        <!-- ========================= footer start ========================= -->
        <footer class="footer pt-100 color-1 mt-5">
            <div class="container">
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
