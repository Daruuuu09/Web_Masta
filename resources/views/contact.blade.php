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
                            <a href="{{ url('menu') }}" class="nav-item nav-link">Menu</a>
                            <a href="{{ url('service') }}" class="nav-item nav-link">Our Service</a>
                            <a href="{{ url('contact') }}" class="nav-item nav-link active">Contact Us</a>
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
 <div class="container-fluid bg-primary hero-header">
    <div class="container h-100">
        <div class="row justify-content-start align-items-center h-100">
            <div class="col-lg-8 text-center text-lg-start py-6"> <!-- Menambah padding vertikal besar -->
                <h1 class="font-secondary text-primary mb-4 fs-2">Masta Vape Store</h1>
                <h1 class="display-2 text-uppercase text-white mb-5 fw-bold">Vape & Recoil Terbaik</h1> <!-- Ukuran font lebih besar -->
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start mb-4">
                </div>
                <a href="{{ url('menu') }}" class="btn btn-dark btn-lg border-inner py-3 px-5 me-3">Lihat Produk</a>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

    <!-- Contact Start -->
<div class="container-fluid position-relative px-5 mt-5" style="margin-top: 135px;">
    <div class="container">
        <div class="row g-5 mb-5">
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="bg-primary border-inner text-center text-white p-5 w-100 d-flex flex-column" style="height: 100%;">
                    <i class="bi bi-geo-alt fs-1 text-white"></i>
                    <h6 class="text-uppercase my-2">Our Office</h6>
                    <span>Jl. Sekolahan, Kedungwringin, Kec. Patikraja, Kab. Banyumas, Jawa Tengah 53171</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="bg-primary border-inner text-center text-white p-5 w-100 d-flex flex-column" style="height: 100%;">
                    <i class="bi bi-envelope-open fs-1 text-white"></i>
                    <h6 class="text-uppercase my-2">Email Us</h6>
                    <span>mastavapestore@gmail.com</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="bg-primary border-inner text-center text-white p-5 w-100 d-flex flex-column" style="height: 100%;">
                    <i class="bi bi-phone-vibrate fs-1 text-white"></i>
                    <h6 class="text-uppercase my-2">Call Us</h6>
                    <span>+62 813 9085 7474</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


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