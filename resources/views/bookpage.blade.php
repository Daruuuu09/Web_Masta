<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Book Service - Masta Vape Store</title>
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
    
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
    <style>
        .booking-container {
            background-color: #1a1a1a;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
        .booking-header {
            border-bottom: 2px solid #00BFFF;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }
        .form-control, .form-select {
            background-color: #2d2d2d;
            border: 1px solid #444;
            color: #fff;
        }
        .form-control:focus, .form-select:focus {
            background-color: #333;
            border-color: #00BFFF;
            color: #fff;
            box-shadow: 0 0 0 0.25rem rgba(255, 107, 0, 0.25);
        }
        .btn-booking {
            background-color: #00BFFF;
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            text-transform: uppercase;
            transition: all 0.3s;
        }
        .btn-booking:hover {
            background-color: #00BFFF;
            transform: translateY(-2px);
        }
        .time-slot {
            background-color: #2d2d2d;
            border: 1px solid #444;
            color: #fff;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.2s;
        }
        .time-slot:hover, .time-slot.selected {
            background-color: #00BFFF;
            border-color: #00BFFF;
            color: #fff;
        }
        .service-card {
            background-color: #2d2d2d;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 4px solid #00BFFF;
            transition: all 0.3s;
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
        .datepicker table tr td.active, .datepicker table tr td.active:hover {
            background-color: #00BFFF !important;
            background-image: none !important;
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
                            <a href="{{ url('index') }}" class="nav-item nav-link">Home</a>
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
            <div class="d-inline-flex align-items-center justify-content-end w-100 ">
                <i class="bi bi-phone-vibrate fs-1 text-white me-3 hover-text-primary"></i>
                <div class="text-start text-white hover-text-primary">
                    <h6 class="text-uppercase mb-1 text-white hover-text-primary">Call Us</h6>
                    <span>+62 813 9085 7474</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

    <!-- Hero Start -->
<div class="container-fluid bg-primary hero-headerbook">
    <div class="container h-100">
        <div class="row justify-content-start align-items-center h-100">
            <div class="col-lg-8 text-center text-lg-start py-6"> <!-- Menambah padding vertikal besar -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

    <!-- Booking Form Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="booking-container">
                        <div class="booking-header text-center mb-5">
                            <h2 class="text-uppercase text-primary mb-3">Nota Booking Masta Vape Store</h2>
                            <p class="text-light">isi sesuai dengan yang anda butuhkan</p>
                        </div>
                            
                            <div class="row mb-4">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <label for="bookingDate" class="form-label text-light">Pilih Tanggal</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-dark text-light border-end-0"><i class="bi bi-calendar3"></i></span>
                                        <input type="text" class="form-control py-3 border-start-0" id="bookingDate" placeholder="Choose date" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-light">Waktu Tersedia</label>
                                    <div class="time-slots-container d-flex flex-wrap">
                                        <!-- Time slots will be populated here by JavaScript -->
                                    </div>
                                    <input type="hidden" id="selectedTimeSlot" value="">
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label for="specialRequests" class="form-label text-light">Permintaan Tambahan</label>
                                <textarea class="form-control" id="specialRequests" rows="3" placeholder="Tolong siapkan ya ....."></textarea>
                            </div>
                            
                            <div class="row mb-4">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <label for="customerName" class="form-label text-light">Nama Anda</label>
                                    <input type="text" class="form-control py-3" id="customerName" placeholder="Anto" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="customerPhone" class="form-label text-light">Nomer WhatsApp</label>
                                    <input type="tel" class="form-control py-3" id="customerPhone" placeholder="08123456789" required>
                                </div>
                            </div>
                            
                            <div class="text-center mt-5">
                                <button type="button" class="btn btn-primary border-inner py-3 px-5 me-3" onclick="sendToWhatsApp()">Pesan Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Form End -->

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
    
    <!-- Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
    <script>
        $(document).ready(function() {
            // Initialize datepicker
            $('#bookingDate').datepicker({
                format: 'dd MM yyyy',
                autoclose: true,
                todayHighlight: true,
                startDate: '+1d',
                endDate: '+14d',
                daysOfWeekDisabled: [0], // Disable Sunday
                beforeShowDay: function(date) {
                    // Disable specific dates if needed
                    return {
                        enabled: true
                    };
                }
            });
            
            // Generate time slots
            function generateTimeSlots() {
                const container = $('.time-slots-container');
                container.empty();
                
                // Store hours are from 17:00 to 00:00 (5 PM to midnight)
                const startHour = 17;
                const endHour = 24;
                const interval = 30; // minutes
                
                for (let hour = startHour; hour < endHour; hour++) {
                    for (let minute = 0; minute < 60; minute += interval) {
                        const displayHour = hour > 12 ? hour - 12 : hour;
                        const ampm = hour >= 12 ? 'PM' : 'AM';
                        const timeString = `${displayHour}:${minute === 0 ? '00' : minute} ${ampm}`;
                        
                        const timeSlot = $('<div class="time-slot">' + timeString + '</div>');
                        timeSlot.data('time', `${hour}:${minute === 0 ? '00' : minute}`);
                        
                        timeSlot.click(function() {
                            $('.time-slot').removeClass('selected');
                            $(this).addClass('selected');
                            $('#selectedTimeSlot').val(timeString);
                        });
                        
                        container.append(timeSlot);
                    }
                }
            }
            
            // Initial generation of time slots
            generateTimeSlots();
        });
        
        function sendToWhatsApp() {
            const name = document.getElementById('customerName').value;
            const phone = document.getElementById('customerPhone').value;
            const date = document.getElementById('bookingDate').value;
            const timeSlot = $('#selectedTimeSlot').val();
            const serviceType = $('#serviceType option:selected').text();
            const deviceType = $('#deviceType option:selected').text();
            const requests = document.getElementById('specialRequests').value;

            // Validasi
            if (!name || !phone || !date || !timeSlot) {
                alert('Harap isi semua field yang wajib diisi!');
                return;
            }
            
            const message = `*NOTA BOOKING MASTA VAPE STORE*%0A` +
                            `*===================================================*%0A%0A` +
                           `*Nama Pemesan:* ${name}%0A` +
                           `*Nomor Telepon:* ${phone}%0A` +
                           `*Produk:* ${deviceType}%0A` +
                           `*Tanggal Booking:* ${date}%0A` +
                           `*Waktu Booking:* ${timeSlot}%0A` +
                           `*Permintaan Khusus:* ${requests || '-'}%0A%0A` +
                           `*====================================================*%0A` +
                           `_Booking ini dikirim melalui website Masta Vape Store_`;
            
            // WhatsApp number masta vape store
            window.open(`https://wa.me/6287776695616?text=${message}`, '_blank');
        }
    </script>
</body>
</html>