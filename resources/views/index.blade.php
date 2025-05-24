<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Masta Vape Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        #product{
            padding: 0;
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-0 d-none d-lg-block topbar-dark-bg topbar-no-gap topbar-no-border" style="position: fixed; top: 0; left: 0; right: 0; z-index: 1040;">
    <div class="row gx-0 align-items-center" id="">
        <!-- Kiri: Logo + Nama -->
        <div class="col-lg-3 bg-dark py-3 ps-4" style="margin-right: 0px;">
            <div class="d-inline-flex align-items-center">
                <img src="img/Logo masta.jpg" alt="Logo" style="height: 40px;" class="me-2">
                <h5 class="text-uppercase text-white mb-0 hover-text-primary">Masta Vape Store</h5>
            </div>
        </div>

        <!-- Tengah: Navbar -->
        <div class="col-lg-6 bg-dark">
            <nav class="navbar navbar-expand-lg navbar-dark py-0">
                <div class="container-fluid justify-content-center">
                    <div class="collapse show" id="navbarCollapseTop">
                        <div class="navbar-nav">
                            <a href="{{ url('index') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ url('about') }}" class="nav-item nav-link">About Us</a>
                            <a href="{{ url('menu') }}" class="nav-item nav-link">Menu</a>
                            <a href="{{ url('service') }}" class="nav-item nav-link">Our Service</a>
                            <a href="{{ url('contact') }}" class="nav-item nav-link">Contact Us</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Kanan: Call Us -->
        <div class="col-lg-3 bg-dark py-3 pe-4 ">
            <a href="https://wa.me/6281390857474">
            <div class="d-inline-flex align-items-center justify-content-end w-100 ">
                <i class="bi bi-phone-vibrate fs-1 text-white me-3 hover-text-primary"></i>
                <div class="text-start text-white hover-text-primary">
                    <h6 class="text-uppercase mb-1 text-white hover-text-primary">Call Us</h6>
                    <span>+62 813 9085 7474</span>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>
<!-- Topbar End -->

    <!-- Hero Start -->
<div class="container-fluid bg-primary hero-headerindx">
    <div class="container h-100">
        <div class="row justify-content-start align-items-center h-100">
            <div class="col-lg-8 text-center text-lg-start py-6"> <!-- Menambah padding vertikal besar -->
                <h1 class="font-secondary text-primary mb-4 fs-2">Masta Vape Store</h1>
                <h1 class="display-2 text-uppercase text-white mb-5 fw-bold">Vape & Recoil Terbaik</h1> <!-- Ukuran font lebih besar -->
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start mb-5">
                    <i class="bi bi-geo-alt-fill text-white me-3 fs-4"></i>
                    <h2 class="text-uppercase text-white fs-5 mb-0">
                        Jl. Sekolahan, Kedungwringin, Kec. Patikraja, Kab. Banyumas, Jawa Tengah 53171
                    </h2>
                </div>
                <a href="{{ url('menu') }}" class="btn btn-outline-primary btn-lg py-3 px-5 me-3">Lihat Produk</a>
                <a href="{{ url('contact') }}" class="btn btn-outline-primary btn-lg py-3 px-5 me-3">Hubungi Kami</a>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">About</h2>
                <h1 class="display-4 text-uppercase text-dark">Masta Vape Store</h1>
            </div>
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="position-relative" style="min-height: 400px;">
                        <img src="img/About Vape.jpeg" alt="About Masta Vape Store" class="position-absolute w-100 h-100" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <h4 class="mb-4 text-dark">Toko vape terpercaya dengan berbagai pilihan device, liquid, dan aksesoris berkualitas.</h4>
                    <p class="mb-5 text-dark">Masta Vape Store hadir untuk para vapers yang mencari produk berkualitas, harga bersaing, dan pelayanan terbaik. Kami menyediakan berbagai macam vaporizer, liquid premium, coil, kapas, hingga aksesoris terbaru dengan tren terkini.</p>
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary mb-4 border-inner" style="width: 90px; height: 90px;">
                                <i class="fas fa-smoking fa-2x text-primary"></i>
                            </div>
                            <h4 class="text-uppercase">Produk Terlengkap</h4>
                            <p class="mb-0 text-dark">Tersedia berbagai device dan liquid dari brand ternama dengan pilihan rasa dan varian terupdate.</p>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary mb-4 border-inner" style="width: 90px; height: 90px;">
                                <i class="fas fa-star fa-2x text-primary"></i>
                            </div>
                            <h4 class="text-uppercase">Pelayanan Terbaik</h4>
                            <p class="mb-0 text-dark">Tim kami siap membantu dengan ramah, memberikan rekomendasi, dan layanan purna jual yang memuaskan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid bg-img py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary d-flex align-items-center justify-content-center mb-3 border-inner" style="width: 60px; height: 60px;">
                            <i class="fas fa-fire text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Pengalaman Kami</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary d-flex align-items-center justify-content-center mb-3 border-inner" style="width: 60px; height: 60px;">
                            <i class="fas fa-user-cog text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Vape Expert</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary d-flex align-items-center justify-content-center mb-3 border-inner" style="width: 60px; height: 60px;">
                            <i class="fas fa-box text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Produk Terjual</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary d-flex align-items-center justify-content-center mb-3 border-inner" style="width: 60px; height: 60px;">
                            <i class="fas fa-smile-beam text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Pelanggan Puas</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Products Start -->
    <div class="container-fluid about " id="product">
        <div class="container">
            <div class="position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Menu & Harga</h2>
                <h1 class="display-4 text-uppercase">Paling Laris</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase border-inner p-4 mb-5">
                    <li class="nav-item">
                        <a class="nav-link text-white active" data-bs-toggle="pill" href="#tab-1">Mod & Pod</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-2">Liquid</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-3">Coil</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Mod&pod -->
                    <div id="tab-1" class="tab-pane fade show p-0 active ">
                    <div class="row g-3">
                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/ModProduk1 Centa.jpeg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.400.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Mod Centaurus M200</h5>
                                        <span>Mod Centaurus M200 adalah pilihan yang tak bisa diabaikan untuk dijadikan pertimbangan ketika kamu ingin ganti atau menambah device vape</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                            
                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/PodProduk1Oxva.jpeg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.250.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Pod Oxva</h5>
                                        <span>Pod Oxva adalah sistem pod vape yang dikenal karena desainnya yang ramping, portabilitas memungkinkan pengguna agar dapat digunakan dengan mudah</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/ModProduk2 Hex.jpeg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.3.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Mod Hexom V3</h5>
                                        <span>Fitur-fitur yang canggih seperti chip Hex-T30 yang mampu menghasilkan daya maksimum hingga 180W membuat pengalaman vape anda jauh lebih baik</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/PodProduk2Smok.jpeg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.255.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Pod Smok</h5>
                                        <span>Mudah digunakan, dan biasanya menggunakan pod khusus berisi e-liquid yang bisa diisi ulang atau diganti sehingga durability nya lebih baik</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/ModProduk3 Panda.jpeg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.380.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Dovpo MVV 2 Panda Mod</h5>
                                        <span>Mod ini menggunakan dua baterai 18650, memungkinkan daya hingga 280W, sehingga ideal untuk vaping DTL dan menghasilkan uap yang tebal</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/PodProduk3Foom.jpeg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.200.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Foom Pod</h5>
                                        <span>Mudah digunakan, dan biasanya menggunakan pod khusus berisi e-liquid yang bisa diisi ulang atau diganti sehingga durability nya lebih baik</span>
                                    </div>
                                </div>
                                </a>    
                            </div>
                        </div>
                    </div>

                    <!-- Liquid -->
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/LiquidProduk1Milksh.jpeg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.120.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Milk Shake Series</h5>
                                        <span class="text-dark">Liquid Milkshake Series biasanya menawarkan rasa yang manis, creamy, dan lezat, menyerupai milkshake yang sering kita jumpai dimana saja</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/LiquidProduk2Vapelabz.jpeg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.110.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Vapelabz Liquid</h5>
                                        <span class="text-dark">Liquid ini hadir dalam berbagai variasi rasa, aroma, dan kandungan nikotin, untuk menyesuaikannya dengan preferensi masing-masing</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/LiquidProduk3Beast.jpeg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.120.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Beast Master Juice Series</h5>
                                        <span class="text-dark">Beast Master Juice Series adalah rangkaian liquid premium yang dirancang khusus untuk para vapers yang mencari cita rasa intens, kompleks, dan memuaskan</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/LiquidProduk4Foam.jpeg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.140.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Foam Series</h5>
                                        <span class="text-dark">Setiap series memiliki ciri khas dan varian rasa yang unik, seperti Foom Beverage Series dengan rasa es teh, kopi, dan berbagai rasa buah bauhan lain nya</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/LiquidProduk5English.jpeg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.135.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">English Break East Series</h5>
                                        <span class="text-dark">Liquid premium ini menawarkan flavor fusion creamy dan fruity yang menyegarkan. Mood booster untuk memulai segala kegiatan dan kapanpun kamu butuh asupan</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/LiquidProduk6Secret.jpeg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.75.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Secret Late</h5>
                                        <span class="text-dark">Liquid Secret Late adalah varian liquid vape dari Secret Lab yang menawarkan rasa Kopi dengan lapisan-lapisan rasa yang kompleks dan tidak membosankan</span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Coil -->
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/CoilProduk1Disco.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.60.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Coil Disco</h5>
                                        <span class="text-dark">Disco adalah coil penuh karakter didesain untuk mereka yang suka tampil beda. Sensasi uap tebal, dan konsisten bikin setiap puff jadi  rasa yang tak terlupakan</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/CoilProduk2Habitat.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.50.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Coil Habitat</h5>
                                        <span class="text-dark">Habitat menghadirkan pengalaman vaping yang halus dan alami. Dengan desain coil yang fokus pada kejernihan rasa dan efisiensi daya</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/CoilProduk3A2r.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.65.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Coil A2r</h5>
                                        <span class="text-dark">Coil vape berperforma tinggi yang dirancang dengan presisi teknologi. A2R menghadirkan panas merata, rasa tajam </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Service Start -->
<div class="container-fluid service position-relative px-5 mt-5" style="margin-bottom: 135px;">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-light p-5">
                    <div class="service-icon mb-4">
                        <i class="fas fa-comments fa-3x icon-warna1"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-light">Konsultasi Produk</h4>
                    <p>Konsultasi gratis dengan ahli vape kami untuk menemukan perangkat dan liquid yang sesuai dengan kebutuhan dan preferensi Anda.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-light p-5">
                    <div class="service-icon mb-4">
                        <i class="fas fa-tools fa-3x icon-warna1"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-light">PerawatanDevice</h4>
                    <p>Layanan perawatan dan perbaikan perangkat vape oleh teknisi berpengalaman untuk menjaga performa optimal perangkat Anda.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-light p-5">
                    <div class="service-icon mb-4">
                        <i class="fas fa-cogs fa-3x icon-warna1"></i>
                    </div>
                    <h4 class="text-uppercase mb-3 text-light">Custom Build</h4>
                    <p>Layanan khusus untuk membangun mod vape custom sesuai keinginan Anda, mulai dari casing hingga spesifikasi teknis.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-6 text-center">
                <h1 class="text-uppercase text-light mb-4">30% Discount Untuk Produk rekomendasi</h1>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


    <!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
            <h2 class="text-primary font-secondary">Owner</h2>
            <h1 class="display-4 text-uppercase">Our Vape Expert</h1>
        </div>
        <div class="row g-5 justify-content-center"> <!-- Added justify-content-center -->
            <div class="col-lg-4 col-md-6">
                <div class="team-item h-100">
                    <!-- Modified image container -->
                    <div class="position-relative overflow-hidden" style="height: 300px; background: #f8f9fa;">
                        <img class="img-fluid h-100 w-100 object-fit-cover" src="img/team-2.jpg" alt="" style="object-position: center center;">
                        <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                            <div class="d-flex align-items-center justify-content-start">
                            </div>
                        </div>
                    </div>
                    <div class="bg-dark border-inner text-center p-4">
                        <h4 class="text-uppercase text-light">Bakhtiar Riffaizt</h4>
                        <p class="text-light m-0">Owner Of Masta Vape Store</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="position-relative text-center mx-auto mb-4 pb-3" style="max-width: 600px;">
                        <h2 class="text-primary font-secondary">Paket Hemat</h2>
                        <h1 class="display-4 text-uppercase text-light">Paket Siap Kebul</h1>
                    </div>
                    <p class="text-light mb-4">Tingkatkan pengalaman vaping Anda dengan paket eksklusif kami. Dapatkan perangkat premium, liquid berkualitas tinggi, dan aksesoris dengan harga terbaik. Penawaran terbatas!</p>
                    <a href="" class="btn btn-primary border-inner py-3 px-5 me-3">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Testimoni Pelanggan</h2>
                <h1 class="display-4 text-uppercase">Suara Pembeli Kita!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Farah</h4>
                            <span>Vaper Sejak 2018</span>
                        </div>
                    </div>
                    <p class="mb-0">Liquidnya original dan rasanya sangat pure. Toko ini selalu jadi langganan saya karena pelayanannya ramah dan cepat.
                    </p>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Deni</h4>
                            <span>Pengguna Pod Sejak 2020</span>
                        </div>
                    </div>
                    <p class="mb-0">Pod yang saya beli disini awet dan original. Harganya juga lebih murah dibanding toko lain. Bakal balik lagi pasti!
                    </p>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Fauzan</h4>
                            <span>Vaper Sejak 2020</span>
                        </div>
                    </div>
                    <p class="mb-0">Beli coil dan pasang disini buat sensasi vape jadi lebih enak, karna pengalaman owner nya yang tidak diragukan lagi, fiks langganan
                    </p>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Cintya</h4>
                            <span>Vaper Sejak 2025</span>
                        </div>
                    </div>
                    <p class="mb-0">Saya pengguna baru, disini saya diberikan pengetahuan yang membuat pengalaman pertama vape saya jadi lebih menarik!
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    

<!-- Footer Start -->
<div class="container-fluid footer-with-bg"> 
  <div class="container">
    <div class="row gx-5">
      <div class="col-lg-4 col-md-6">
        <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary border-inner p-4">
          <a href="index.html" class="navbar-brand">
            <h1 class="m-0 text-uppercase text-white"><i class="fa fs-1 text-dark me-3"></i>Masta Vape Store</h1>
          </a>
          <p class="mt-3">Toko vape terpercaya dengan produk original dan harga terbaik. Berbagai perangkat, liquid, dan aksesoris vape berkualitas.</p>
        </div>
      </div>
      <div class="col-lg-8 col-md-6">
        <div class="row gx-5 justify-content-end"> 
          <div class="col-lg-4 col-md-12 pt-5 mb-5 text-end"> 
            <h4 class="text-primary text-uppercase mb-4">Hubungi Kami</h4>
            <div class="d-flex mb-2 justify-content-end"> 
              <p class="mb-0 me-2 text-end">Jl. Sekolahan, Kedungwringin, Kec. Patikraja, Kabupaten Banyumas, Jawa Tengah</p>
              <i class="bi bi-geo-alt text-primary me-2 fs-5"></i>
            </div>
            <div class="d-flex mb-2 justify-content-end"> 
              <p class="mb-0 me-2 text-end">+62 813 9085 7474</p>
              <i class="bi bi-telephone text-primary me-2 fs-5"></i>
            </div>
            <div class="d-flex mb-3 justify-content-end"> 
              <p class="mb-0 me-2 text-end">Buka Setiap Hari<br>17:00 - 00:00 WIB</p>
              <i class="bi bi-clock text-primary me-2 fs-5"></i>
            </div>
            <div class="d-flex mt-4 justify-content-end"> 
              <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-instagram fw-normal"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid footer-bottom py-3">
  <div class="container text-center">
    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Masta Vape Store Purwokerto</a>. All Rights Reserved. 
    Designed by <a class="text-white border-bottom" href="https://www.instagram.com/masntapjiwa/">Daru</a></p>
    <br>Distributed By: <a class="text-white border-bottom" href="https://www.instagram.com/mastavapestore/" target="_blank">Masta&Team</a>
  </div>
</div>
<!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-inner py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- Add this section to your index.html -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
            <h2 class="text-primary font-secondary">Featured</h2>
            <h1 class="display-4 text-uppercase">Popular Products</h1>
        </div>
        <div class="row g-3" id="featured-products">
            <!-- Products will be loaded here by JavaScript -->
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Sample featured products - in a real app, this would come from an API
        const featuredProducts = [
            {
                id: 1,
                name: "Mod Centaurus M200",
                price: 400000,
                image: "img/ModProduk1 Centa.jpeg",
                description: "Premium mod with advanced features"
            },
            {
                id: 2,
                name: "Pod Oxva",
                price: 250000,
                image: "img/PodProduk1Oxva.jpeg",
                description: "Compact and powerful pod system"
            },
            {
                id: 3,
                name: "Milk Shake Series",
                price: 120000,
                image: "img/LiquidProduk1Milksh.jpeg",
                description: "Delicious milkshake flavored e-liquid"
            }
        ];

        // Load featured products
        const container = $('#featured-products');
        featuredProducts.forEach(product => {
            const productHtml = `
                <div class="col-lg-4 col-md-6">
                    <div class="product-card bg-light p-4 text-center">
                        <img src="${product.image}" alt="${product.name}" class="img-fluid mb-3" style="height: 150px; object-fit: contain;">
                        <h4 class="text-uppercase">${product.name}</h4>
                        <p class="text-dark mb-3">${product.description}</p>
                        <h5 class="text-primary">Rp${product.price.toLocaleString()}</h5>
                        <a href="menu.html" class="btn btn-dark border-inner mt-2">View Details</a>
                    </div>
                </div>
            `;
            container.append(productHtml);
        });
    });
</script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
</body>

</html>