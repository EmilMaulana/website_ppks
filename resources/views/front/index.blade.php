@extends('layouts.main')

@section('content')

<section id="home" class="carousel-section-wrapper">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-section carousel-item active clip-bg pt-100 pb-100 img-bg" style="background-image: url({{ asset('assets/img/slide-bg.png') }});">
                <div class="container">
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
    </div>
</section>
<section id="about" class="">
    <div class="about-section color-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-img-wrapper">
                        <div class="about-img position-relative d-inline-block wow fadeInLeft" data-wow-delay=".3s">
                            <img src="{{ asset('assets/img/image-36.png') }}" class="img-fluid rounded-end" alt="">

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
            <div class="col-lg-4 col-md-6 ">
                <div class="service-box box-style shadow" style="height: 400px">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-flag"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Kampanye Kesadaran</h4>
                        <p>Program ini bertujuan untuk meningkatkan kesadaran dan pemahaman mengenai kekerasan seksual di kalangan mahasiswa dan masyarakat kampus. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style shadow" style="height: 400px">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-home"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Pelatihan Pendidikan Seksualitas</h4>
                        <p>Program ini memberikan pelatihan dan pendidikan mengenai seksualitas yang sehat, persetujuan, batasan pribadi, dan mengenali tanda-tanda kekerasan seksual. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style shadow" style="height: 400px">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-briefcase"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Layanan Konseling dan Pendampingan</h4>
                        <p>Program ini menyediakan layanan konseling dan pendampingan bagi korban kekerasan seksual. Tim yang terlatih dan sensitif akan membantu korban dalam proses pemulihan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style shadow" style="height: 420px">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-bolt"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Sistem Pelaporan Aduan</h4>
                        <p>Program ini membangun sistem pelaporan aduan yang aman dan terpercaya bagi korban kekerasan seksual. Sistem ini dapat diakses melalui platform online atau melalui saluran komunikasi yang disediakan oleh satuan tugas.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style shadow" style="height: 420px">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-infinite"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Penegakan Aturan dan Sanksi</h4>
                        <p>Satuan tugas bekerja sama dengan pihak berwenang kampus untuk memastikan bahwa pelaku kekerasan seksual dihadapkan pada konsekuensi hukuman yang sesuai.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style shadow" style="height: 420px">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-reload"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Kolaborasi dengan Komunitas Luar</h4>
                        <p>Program ini melibatkan kolaborasi dengan komunitas luar, seperti LSM atau lembaga advokasi, untuk meningkatkan kesadaran dan memberikan dukungan bagi korban kekerasan seksual.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="team" class="contact-section cta-bg img-bg mt-5 mb-5 pt-110 pb-100" style="background-image: url({{asset('assets/img/slide-bg.png')}});">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7">
                <div class="section-title mb-60">
                    <span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;"></span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">" Bersama Mencegah, Bersama Mengatasi "</h2>
                    <p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual Universitas Singaperbangsa Karawang.</p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="contact-btn text-left text-lg-right">
                    <a href="https://rebrand.ly/fancy-ud" rel="nofollow" class="btn btn color-1 text-white pt-3 pb-3 pl-5 pr-5 rounded-pill">Lapor Sekarang!</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================= client-logo-section start ========================= -->
<section class="client-logo-section pt-100 pb-100">
    <div class="container">
        <div class="client-logo-wrapper">
            <div class="client-logo-carousel d-flex align-items-center justify-content-between">
                <div class="client-logo">
                    <img src="{{asset('assets/img/logo-unsika.png')}}" alt="" style="width: 100px; height: 100px">
                </div>
                <div class="client-logo">
                    <img src="{{asset('assets/img/main-logo.png')}}" alt="" style="">
                </div>
                <div class="client-logo">
                    <img src="{{asset('assets/img/logo-fasilkom.png')}}" alt="" style="width: 100px; height: 100px">
                </div>
                {{-- <div class="client-logo">
                    <img src="assets/img/client-logo/lineicons-logo.svg" alt="">
                </div>
                <div class="client-logo">
                    <img src="assets/img/client-logo/graygrids-logo.svg" alt="">
                </div>
                <div class="client-logo">
                    <img src="assets/img/client-logo/lineicons-logo.svg" alt="">
                </div> --}}
            </div>
        </div>
    </div>
</section>


@endsection