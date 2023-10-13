<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Website Official Mikrotik SMKS Airlangga Balikpapan">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mikrotik SMK Airlangga</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- <link href="" rel="stylesheet"> --}}
    {{-- //hubungkan ke css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/LineIcons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('img/logo.svg') }}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo"
                            aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
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
                        {{-- <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                <li><a class="solid" href="https://mikrotik.com/download">Download</a></li>
                            </ul>
                        </div> --}}
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    {{-- ini crousel --}}
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
                                    <p class="text">SMKS Airlangga Balikpapan </p>
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
                                    <p class="text">MikroTik Certified Network Associate (MTCNA) adalah sebuah program
                                        sertifikasi dari MikroTik untuk teknisi (Network Engineer) pada tingkatan
                                        entry-level. Sertifikasi ini membantu Network Engineer untuk memahami
                                        dasar-dasar networking dan meningkatkan atau memberi nilai tambah pada Network
                                        Engineer tersebut</p>
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
                                    <p class="text">MikroTik Certified Routing Engineer (MTCRE) adalah salah satu
                                        dari pelatihan MikroTik tingkat Mahir yang membahas topik tentang Routing,
                                        Swithching dan Tunneling di Mikrotik. Dalam pelatihan ini peserta akan memahami
                                        beberapa materi berkaitan dengan Routing baik Statik (ECMP, PCC) maupun Dynamic
                                        (OSPF).</p>
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

    {{-- about --}}
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
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">Apa itu MikroTik
                                            Academy</a>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">MikroTik Academy adalah sebuah program yang disiapkan
                                                untuk jalur pendidikan, yaitu Politeknik / universitas / Kampus kejuruan
                                                dan sejenisnya untuk mepelajari MikroTik. Kelas MikroTik akan banyak
                                                menggunakan LAB-Komputer layaknya pelatihan atau sertifikasi dan akan
                                                terdapat ujian untuk mengukur seberapa jauh kemampuan yang di miliki
                                                mahasiswa. Tujuan dari MikroTik Academy adalah Kampus dapat mengadopsi
                                                kurikulum MTCNA kedalam kegiatan belajar mengajar serta memberi nilai
                                                tambah bagi Kampus dan bila disetujui Kampus dapat mengadakan
                                                Sertifikasi Internasional.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <a href="#" class="collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">Keuntungan Mengikuti Mikrotik Academy</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Kemampuan untuk memperoleh pengetahuan dengan karakter
                                                praktis dan terapan yang kuat di bidang jaringan komputer;
                                                Memperoleh kualifikasi tambahan – sertifikat MTCNA yang diakui secara
                                                internasional;
                                                Melakukan sesi laboratorium dengan peralatan jaringan modern dan dosen
                                                yang berkualitas.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <a href="#" class="collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">Kurikulum</a>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">MikroTik Academy akan memberikan sertifikasi MTCNA
                                                (MikroTik Certified Network Associate) yang menjadi langkah awal kepada
                                                peserta training untuk masuk dalam asosiasi dan sebagai syarat untuk
                                                mengambil sertifikasi yang lebih tinggi dari MikroTik.
                                                Materi MTCNA diantaranya:
                                            </p>
                                            <ul>
                                                <li>-Introduction to Mikrotik</li>
                                                <li>-DHCP</li>
                                                <li>-Bridge</li>
                                                <li>-Routing</li>
                                                <li>-Firewall</li>
                                                <li>-Quality of Service</li>
                                                <li>-Wireless</li>
                                                <li>-Tunnel</li>
                                            </ul>
                                            <p></p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingFore">
                                        <a href="#" class="collapsed" data-toggle="collapse"
                                            data-target="#collapseFore" aria-expanded="false"
                                            aria-controls="collapseFore">Fasilitas yang didapat</a>
                                    </div>
                                    <div id="collapseFore" class="collapse" aria-labelledby="headingFore"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Pengetahuan dan keterampilan kurikulum yang relevan
                                                dengan skema MTCNA;
                                                Kemampuan pemahaman terkait MikroTik RouterOS dan solusi terintegrasi
                                                lainnya dari MikroTik;
                                                Memberikan kesempatan untuk memperoleh sertifikat MikroTik Certified
                                                Network Associate (MTCNA);
                                                Lisensi RouterOS Level 4 gratis saat Anda menjalankan ujian sertifikasi.
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <a href="#" class="collapsed" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">Tentang Mikrotik</a>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">SIA Mikrotikls adalah perusahaan di negara Latvia yang
                                                memproduksi peralatan dan perangkat lunak jaringan untuk keperluan
                                                manajemen jaringan data, yang dikenal secara internasional dengan merek
                                                MikroTik RouterOS dan RouterBOARD.

                                                Perangkat lunak RouterOS dan router RouterBOARD banyak digunakan untuk
                                                memastikan berbagai tugas manajemen jaringan di ISP dan jaringan
                                                perusahaan yang komplek.</p>
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
    {{-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> --}}
</body>
<script src="{{ asset('js/ajax-contact.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>

</html>
