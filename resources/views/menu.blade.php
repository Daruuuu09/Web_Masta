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
</head>
    <style>
       #product{
            padding: 48px 0 0 0;
        }
    </style>
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
                            <a href="{{ url('index') }}" class="nav-item nav-link">Home</a>
                            <a href="{{ url('about') }}" class="nav-item nav-link">About Us</a>
                            <a href="{{ url('menu') }}" class="nav-item nav-link active">Menu</a>
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

    <!-- Products Start -->
    <div class="container-fluid about " id="product">
        <div class="container">
            <div class=" position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary"></h2>
                <h1 class="display-4 text-uppercase"></h1>
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

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Contoh</h5>
                                        <span>Deskripsi Produk</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Contoh</h5>
                                        <span>Deskripsi Produk</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Contoh</h5>
                                        <span>Deskripsi Produk</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Contoh</h5>
                                        <span>Deskripsi Produk</span>
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

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Contoh</h5>
                                        <span>Deskripsi Produk</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Contoh</h5>
                                        <span>Deskripsi Produk</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Contoh</h5>
                                        <span>Deskripsi Produk</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Contoh</h5>
                                        <span>Deskripsi Produk</span>
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

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Contoh</h5>
                                        <span>Deskripsi Produk</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Contoh</h5>
                                        <span>Deskripsi Produk</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Contoh</h5>
                                        <span>Deskripsi Produk</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Contoh</h5>
                                        <span>Deskripsi Produk</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Contoh</h5>
                                        <span>Deskripsi Produk</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Contoh</h5>
                                        <span>Deskripsi Produk</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ url('bookpage') }}" style="text-decoration: none; color: inherit;">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-light p-2 m-0">Rp.000.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-light px-4">
                                        <h5 class="text-uppercase">Contoh</h5>
                                        <span>Deskripsi Produk</span>
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