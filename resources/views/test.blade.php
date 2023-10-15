<!DOCTYPE html><html class="no-js" lang="en"><head>
    <meta charset="utf-8">
     <meta name="description" content="Website Official Mikrotik Academy Universitas Jenderal Soedirman">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--====== Title ======-->
    <title>Mikrotik Academy Unsoed</title>
    
   

    <!--====== Favicon Icon ======-->
    {{-- <link rel="shortcut icon" href="images/favicon.png" type="image/png"> --}}
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/LineIcons.css') }}">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" --}}

    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
    <!--====== PRELOADER PART START ======-->
{{-- 
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
    </div> --}}

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                       
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('img/logo.svg') }}" alt="Logo">
                        </a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#home">home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#about">About</a></li>
                              
                                <li class="nav-item"><a class="page-scroll" href="#team">Trainer</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#services">Services</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#portfolio">Portfolio</a></li>
                                <!-- <li class="nav-item"><a class="page-scroll" href="#pricing">Pricing</a></li> -->
                               
                            
                            </ul>
                        </div>
                        
                        <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                <li><a class="solid" href="https://mikrotik.com/download">Download</a></li>
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->
    
    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
                <li data-target="#carouselThree" data-slide-to="1"></li>
                <li data-target="#carouselThree" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Mikrotik Academy</h1>
                                    <p class="text">Universitas Jenderal Soedirman </p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-one" href="#about">GET STARTED</a></li>
                                   
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="{{ asset('img/1.png') }}" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">MTCNA</h1>
                                    <p class="text">MikroTik Certified Network Associate (MTCNA) adalah sebuah program sertifikasi dari MikroTik untuk teknisi (Network Engineer) pada tingkatan entry-level. Sertifikasi ini membantu Network Engineer untuk memahami dasar-dasar networking dan meningkatkan atau memberi nilai tambah pada Network Engineer tersebut</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <!-- <li><a class="main-btn rounded-one" href="#">Daftar Sekarang</a></li> -->
                                        <li><a class="main-btn rounded-two" href="#about">GET STARTED</a></li>
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="{{ asset('img/2.png') }}" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">MTCRE</h1>
                                    <p class="text">MikroTik Certified Routing Engineer (MTCRE) adalah salah satu dari pelatihan MikroTik tingkat Mahir yang membahas topik tentang Routing, Swithching dan Tunneling di Mikrotik. Dalam pelatihan ini peserta akan memahami beberapa materi berkaitan dengan Routing baik Statik (ECMP, PCC) maupun Dynamic (OSPF).</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <!-- <li><a class="main-btn rounded-one" href="#">Daftar Sekarang</a></li> -->
                                        <li><a class="main-btn rounded-two" href="#about">GET STARTED</a></li>
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="{{ asset('img/3.png') }}" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->
            </div>

            <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
                <i class="lni lni-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
                <i class="lni lni-arrow-right"></i>
            </a>
        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->
    
 

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="faq-content mt-45">
                        <div class="about-title">
                            <h6 class="sub-title">Mengenai Mikrotik Academy</h6>
                            <h4 class="title">Mikrotik Academy <br></h4>
                        </div> <!-- faq title -->
                        <div class="about-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Apa itu MikroTik Academy</a>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">MikroTik Academy adalah sebuah program yang disiapkan untuk jalur pendidikan, yaitu Politeknik / universitas / Kampus kejuruan dan sejenisnya untuk mepelajari MikroTik. Kelas MikroTik akan banyak menggunakan LAB-Komputer layaknya pelatihan atau sertifikasi dan akan terdapat ujian untuk mengukur seberapa jauh kemampuan yang di miliki mahasiswa. Tujuan dari MikroTik Academy adalah Kampus dapat mengadopsi kurikulum MTCNA kedalam kegiatan belajar mengajar serta memberi nilai tambah bagi Kampus dan bila disetujui Kampus dapat mengadakan Sertifikasi Internasional.</p>
                                        </div>
                                    </div> 
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Keuntungan Mengikuti Mikrotik Academy</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Kemampuan untuk memperoleh pengetahuan dengan karakter praktis dan terapan yang kuat di bidang jaringan komputer;
                                                Memperoleh kualifikasi tambahan – sertifikat MTCNA yang diakui secara internasional;
                                                Melakukan sesi laboratorium dengan peralatan jaringan modern dan dosen yang berkualitas.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Kurikulum</a>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">MikroTik Academy akan memberikan sertifikasi MTCNA (MikroTik Certified Network Associate) yang menjadi langkah awal kepada peserta training untuk masuk dalam asosiasi dan sebagai syarat untuk mengambil sertifikasi yang lebih tinggi dari MikroTik.
                                                Materi MTCNA diantaranya:
                                               </p><ul> 
                                                <li>-Introduction to Mikrotik</li>
                                                <li>-DHCP</li>
                                                <li>-Bridge</li>
                                                <li>-Routing</li>
                                                <li>-Firewall</li>
                                                <li>-Quality of Service</li>
                                                <li>-Wireless</li>
                                                <li>-Tunnel</li>
                                            </ul><p></p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingFore">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">Fasilitas yang didapat</a>
                                    </div>
                                    <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Pengetahuan dan keterampilan kurikulum yang relevan dengan skema MTCNA;
                                                Kemampuan pemahaman terkait MikroTik RouterOS dan solusi terintegrasi lainnya dari MikroTik;
                                                Memberikan kesempatan untuk memperoleh sertifikat MikroTik Certified Network Associate (MTCNA);
                                                Lisensi RouterOS Level 4 gratis saat Anda menjalankan ujian sertifikasi.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Tentang Mikrotik</a>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">SIA Mikrotikls adalah perusahaan di negara Latvia yang memproduksi peralatan dan perangkat lunak jaringan untuk keperluan manajemen jaringan data, yang dikenal secara internasional dengan merek MikroTik RouterOS dan RouterBOARD.

                                                Perangkat lunak RouterOS dan router RouterBOARD banyak digunakan untuk memastikan berbagai tugas manajemen jaringan di ISP dan jaringan perusahaan yang komplek.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                            </div>
                        </div> <!-- faq accordion -->
                    </div> <!-- faq content -->
                </div>
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ asset('img/6.png') }}" alt="about">
                    </div> <!-- faq image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
   <!--====== FEATRES TWO PART START ======-->

   <section id="services" class="features-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-10">
                    <h3 class="title">Layanan Mikrotik Academy Unsoed</h3>
                    <p class="text">Maju bersama dengan keahlian yang mumpuni menghadapi dunia industri!</p>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Sertifikasi MTCNA</a></h4>
                        <div class="features-icon">
                            <i class="lni lni-brush"></i>
                            <img class="shape" src="{{ asset('img/f-shape-1.svg') }}" alt="Shape">
                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Memberikan layanan pelatihan intensif dan sertifikasi MTCNA Mikrotik sebagai pendamping Ijazah bagi mahasiswa.</p>
                       
                    </div>
                </div> <!-- single features -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Integrasi Kurikulum</a></h4>
                        <div class="features-icon">
                            <i class="lni lni-layout"></i>
                            <img class="shape" src="{{ asset('img/f-shape-1.svg') }}" alt="Shape">
                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Kurikulum MTCNA terintegrasi dengan kurikulum Informatika pada matakuliah Jaringan Komputer.</p>
                    
                    </div>
                </div> <!-- single features -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Dunia Industri</a></h4>
                        <div class="features-icon">
                            <i class="lni lni-bolt"></i>
                            <img class="shape" src="{{ asset('img/f-shape-1.svg') }}" alt="Shape">
                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Sejalan dengan MBKM, Mikrotik academy Unsoed akan memberikan bekal terbaik sebelum mahasiswa melaksanakan kegiatan MBKM.</p>

                    </div>
                </div> <!-- single features -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

    <section id="portfolio" class="portfolio-area portfolio-four pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Galeri Kegiatan</h3>
                       
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="portfolio-menu text-center mt-50">
                        <ul>
                            <li data-filter="*" class="active">SEMUA KEGIATAN</li>
                            <li data-filter=".branding-4">PELATIHAN</li>
                           <li data-filter=".planning-4">ALUMNI</li>
                            <li data-filter=".research-4">RESEARCH</li>
                        </ul>
                    </div> <!-- portfolio menu -->
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row no-gutters grid mt-50">
                        <div class="col-lg-4 col-sm-6 branding-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ asset('img/1.jpg') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ asset('img/1.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{ asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 marketing-4 research-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ asset('img/2.jpg') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ asset('img/2.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{ asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 branding-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ asset('img/3.jpg') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="assets/images/portfolio/3.jpg"><i class="lni lni-zoom-in"></i></a>
                                                <img src="images/shape.svg" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="images/shape.svg" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 branding-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ asset('img/4.jpg') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ asset('img/2.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{ asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6  branding-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ asset('img/5.jpg') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ asset('img/5.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{ asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 research-4  branding-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ asset('img/6.jpg') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ asset('img/6.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{ asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ asset('img/7.jpg') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ asset('img/7.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{  asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ asset('img/8.jpg') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ asset('img/8.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{ asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 marketing-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{ asset('img/9.jpg') }}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{ asset('img/9.jpg') }}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{ asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{ asset('img/shape.svg') }}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PORTFOLIO PART ENDS ======-->
    
   
    <!--====== PRINICNG ENDS ======-->
    
    
    
    
    
    <!--====== TEAM START ======-->

    <section id="team" class="team-area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Trainer/Instruktur</h3>
                        <p class="text">Mikrotik Academy Unsoed memiliki instruktur yang telah tersertifikasi Mikrotik!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-sm-6 mx-auto">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-image">
                            <img src="{{ asset('img/lasmedi.jpg') }}" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#">Lasmedi Afuan</a></h4>
                            <span class="sub-title">MTCRE , MTCNA</span>
                        </div>
                    </div> <!-- single team -->
                </div>
                            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEAM  ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

  <!--====== TESTIMONIAL PART START ======-->

  <section id="testimonial" class="testimonial-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-6">
                <div class="testimonial-left-content mt-45">
                    <h6 class="sub-title">Testimonials</h6>
                    <h4 class="title">Pendapat Mahasiswa <br> Mikrotik Academy Unsoed</h4>
                    <ul class="testimonial-line">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p class="text">Testimoni mahasiswa terhadap implementasi kurikulum mikrotik</p>
                </div> <!-- testimonial left content -->
            </div>
            <div class="col-lg-6">
                <div class="testimonial-right-content mt-50">
                    <div class="quota">
                        <i class="lni lni-quotation"></i>
                    </div>
                    <div class="testimonial-content-wrapper testimonial-active">
                        <div class="single-testimonial">
                            <div class="testimonial-text">
                                <p class="text">“Sangat bermanfaat bagi kami, meningkatkan pengetahuan tentang jaringan.Bisa menyesuaikan dengan real world..”</p>
                            </div>
                            <div class="testimonial-author d-sm-flex justify-content-between">
                                <div class="author-info d-flex align-items-center">
                                    <div class="author-image">
                                        <img src="{{ asset('img/author-1.jpg') }}" alt="author">
                                    </div>
                                    <div class="author-name media-body">
                                        <h5 class="name">Elis</h5>
                                        <span class="sub-title">Mahasiswi 2020</span>
                                    </div>
                                </div>
                                <div class="author-review">
                                    <ul class="star">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                    </ul>
                                    <span class="review">( 7 Reviews )</span>
                                </div>
                            </div>
                        </div> <!-- single testimonial -->
                        <div class="single-testimonial">
                            <div class="testimonial-text">
                                <p class="text">“sip jadi bisa atur dan config jaringan nih”</p>
                            </div>
                            <div class="testimonial-author d-sm-flex justify-content-between">
                                <div class="author-info d-flex align-items-center">
                                    <div class="author-image">
                                            <img src="{{ asset('img/author-2.jpg') }}" alt="author">
                                    </div>
                                    <div class="author-name media-body">
                                        <h5 class="name">Selvi</h5>
                                        <span class="sub-title">Mahasiswi 2019</span>
                                    </div>
                                </div>
                                <div class="author-review">
                                    <ul class="star">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                    </ul>
                                    <span class="review">( 7 Reviews )</span>
                                </div>
                            </div>
                        </div> <!-- single testimonial -->
                        <div class="single-testimonial">
                            <div class="testimonial-text">
                                <p class="text">“Kemampuan saya jadi meningkat”</p>
                            </div>
                            <div class="testimonial-author d-sm-flex justify-content-between">
                                <div class="author-info d-flex align-items-center">
                                    <div class="author-image">
                                            <img src="{{ asset('img/author-3.jpg') }}" alt="author">
                                    </div>
                                    <div class="author-name media-body">
                                        <h5 class="name">Anto</h5>
                                        <span class="sub-title">Mahasiswa 2018</span>
                                    </div>
                                </div>
                                <div class="author-review">
                                    <ul class="star">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                    </ul>
                                    <span class="review">( 7 Reviews )</span>
                                </div>
                            </div>
                        </div> <!-- single testimonial -->
                    </div> <!-- testimonial content wrapper -->
                </div> <!-- testimonial right content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- <div class="footer-logo text-center">
                        <a class="mt-30" href="index.html"><img src="assets/images/logo.svg" alt="Logo"></a>
                    </div>  -->
                    <!-- <ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul>  -->
                    <div class="footer-support text-center">
                        <!-- <span class="number">+8801234567890</span>
                        <span class="mail">support@uideck.com</span> -->
                    </div>
                    <div class="copyright text-center mt-35">
                        <p class="text">copyright Informatika Unsoed  </p>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/modernizr-3.7.1.min.js') }}"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    {{-- <script src="js/bootstrap.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
    
    <!--====== Slick js ======-->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="{{ asset('js/ajax-contact.js') }}"></script>
    
    <!--====== Isotope js ======-->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/scrolling-nav.js') }}"></script>
    
    <!--====== Main js ======-->
    <script src="{{ asset('js/main.js') }}"></script>
    



</body></html>