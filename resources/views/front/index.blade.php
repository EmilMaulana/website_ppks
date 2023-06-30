@extends('layouts.main')

@section('content')

<section id="home" class="carousel-section-wrapper">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-section carousel-item active clip-bg pt-100 pb-100 img-bg"
                style="background-image: url({{ asset('assets/img/slide-bg.png') }});">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10 mx-auto wow fadeInLeft">
                            <div class="carousel-content">
                                <div class="section-title">
                                    <h3 class="text-white">Satuan Tugas</h3>
                                    <h3 class="text-white">Pencegahan & Penanganan Kekerasan Seksual</h3>
                                    <p class="text-white">Universitas Singaperbangsa Karawang</p>
                                    <p class="text-white">Selamat datang di website SatGas PPKS UNSIKA 2023</p>
                                    <p class="text-white font-italic" style="margin-top: -20px">“Jangan dipendam sendiri, support dari orang terdekat sangat dibutuhkan untuk bangkit lagi.”</p>
                                </div>
                                <a href="javascript:void(0)" class="theme-btn border-btn">Profil Kami</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<section id="about" class="">
    <div class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-img-wrapper">
                        <div class="about-img position-relative d-inline-block wow fadeInLeft" data-wow-delay=".3s">
                            <img src="{{ asset('assets/img/image-36.png') }}" alt="">

                            <div class="about-experience color-1">
                                <h3>5 Year Of Working Experience</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia soluta blanditiis quas itaque necessitatibus!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content-wrapper">
                        <div class="section-title">
                            {{-- <span class="wow fadeInUp" data-wow-delay=".2s">About Us</span> --}}
                            <h3 class="mb-40 wow fadeInRight" data-wow-delay=".4s">Tentang Kami</h3>
                        </div>
                        <div class="about-content">
                            <p class="mb-45 wow fadeInUp" data-wow-delay=".6s">Kami adalah tim yang berkomitmen untuk melindungi dan memperjuangkan hak-hak individu dalam lingkungan kampus. Tujuan utama kami adalah menciptakan lingkungan kampus yang aman, inklusif, dan bebas dari kekerasan seksual.

                                Kami menyediakan dukungan, bimbingan, dan advokasi bagi korban kekerasan seksual di Universitas Singaperbangsa Karawang. Melalui pendidikan, pelatihan, dan kesadaran, kami bekerja untuk mencegah kekerasan seksual dan mengubah budaya kampus menjadi lebih responsif dan mendukung.
                                
                                Kami melakukan riset dan berperan sebagai suara bagi korban kekerasan seksual, mendorong perubahan kebijakan yang lebih baik dan perubahan sosial yang positif.
                                
                                Bergabunglah dengan kami dalam membangun lingkungan kampus yang aman, bebas dari kekerasan seksual, dan mendukung hak-hak individu. Bersama-sama, kita bisa menciptakan perubahan yang bermakna.
                                
                                Terima kasih atas kunjungan Anda di website kami.
                                </p>
                            <div class="counter-up wow fadeInUp" data-wow-delay=".5s">
                                {{-- <div class="counter">
                                    <span id="secondo" class="countup count color-1" cup-end="30" cup-append="k">10</span>
                                    <h4>Happy Client</h4>
                                    <p>We Crafted an awesome design <br class="d-none d-md-block d-lg-none d-xl-block"> library that is robust and</p>
                                </div>
                                <div class="counter">
                                    <span id="secondo" class="countup count color-2" cup-end="42" cup-append="k">5</span>
                                    <h4>Project Done</h4>
                                    <p>We Crafted an awesome design <br class="d-none d-md-block d-lg-none d-xl-block"> library that is robust and</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="service-section pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                <div class="section-title text-center mb-55">
                    {{-- <span class="wow fadeInDown" data-wow-delay=".2s">Services</span> --}}
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Program Unggulan</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">At vero eos et accusamus et iusto odio
                        dignissimos ducimus quiblanditiis praesentium</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-leaf"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Clean & Refreshing</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                            labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-home"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Solid</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                            labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-briefcase"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Crafted for Business</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                            labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-bolt"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Speed Optimized</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                            labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-infinite"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Fully Customizable</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                            labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-reload"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Regular Updates</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                            labor dolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection