<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Bookings - Masta Vape Store</title>
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
        .admin-sidebar {
            background-color: #1a1a1a;
            min-height: 100vh;
            position: fixed;
            width: 250px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        .admin-content {
            margin-left: 250px;
            padding: 20px;
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .sidebar-logo {
            padding: 20px;
            border-bottom: 1px solid #333;
        }
        .sidebar-menu {
            padding: 20px 0;
        }
        .sidebar-menu .nav-link {
            color: #ddd;
            padding: 10px 20px;
            margin: 5px 0;
            border-left: 3px solid transparent;
            transition: all 0.3s;
        }
        .sidebar-menu .nav-link:hover, .sidebar-menu .nav-link.active {
            color: #fff;
            background-color: #333;
            border-left: 3px solid #00BFFF;
        }
        .sidebar-menu .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        .admin-header {
            background-color: #fff;
            padding: 15px 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .admin-profile {
            display: flex;
            align-items: center;
        }
        .profile-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #00BFFF;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-size: 18px;
        }
        .booking-card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            transition: all 0.3s;
            border-left: 4px solid #ff6b00;
        }
        .booking-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .booking-status {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }
        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }
        .status-confirmed {
            background-color: #d4edda;
            color: #155724;
        }
        .status-completed {
            background-color: #d1ecf1;
            color: #0c5460;
        }
        .status-cancelled {
            background-color: #f8d7da;
            color: #721c24;
        }
        .btn-admin {
            padding: 8px 15px;
            font-weight: 500;
            border-radius: 4px;
        }
        .btn-confirm {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
        }
        .btn-cancel {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
        }
        .btn-complete {
            background-color: #17a2b8;
            border-color: #17a2b8;
            color: white;
        }
        .service-badge {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 12px;
            margin-right: 5px;
            background-color: #6f42c1;
            color: white;
        }
        .default-profile {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #00BFFF;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <!-- Admin Sidebar Start -->
    <div class="admin-sidebar">
        <div class="sidebar-logo text-center">
            <h4 class="text-uppercase text-white">Masta Vape Admin</h4>
        </div>
        <div class="sidebar-menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ url('admin') }}" class="nav-link" href="admin-products.html">
                        <i class="fas fa-box-open"></i> Products
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('adminbook') }}" class="nav-link active" href="admin-bookings.html">
                        <i class="fas fa-calendar-check"></i> Bookings
                    </a>
                </li>
                <li class="nav-item mt-4">
                    <a class="nav-link" href="#">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-sign-out-alt"></i> Back to Store
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Admin Sidebar End -->

  <!-- Admin Content Start -->
<div class="admin-content">
    <div class="admin-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Booking Management</h4>
        
        <!-- Admin Profile with Dropdown -->
        <div class="dropdown">
            <button class="btn btn-link text-decoration-none dropdown-toggle d-flex align-items-center" type="button" id="adminDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="admin-profile d-flex align-items-center">
                    <div class="profile-icon me-2">
                        <i class="fas fa-user-circle fs-4"></i>
                    </div>
                    <div class="text-end">
                        <h6 class="mb-0">Admin</h6>
                        <small class="text-muted">Administrator</small>
                    </div>
                </div>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="adminDropdown">
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user me-2"></i> Profile
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cog me-2"></i> Settings
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item text-danger" href="#" id="logoutBtn">
                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">

            <!-- Booking Stats -->
            <div class="col-md-12 mb-4">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h6 class="card-title">Total Bookings</h6>
                                <h3 class="mb-0">24</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-warning text-dark">
                            <div class="card-body">
                                <h6 class="card-title">Pending</h6>
                                <h3 class="mb-0">5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <h6 class="card-title">Confirmed</h6>
                                <h3 class="mb-0">16</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <h6 class="card-title">Cancelled</h6>
                                <h3 class="mb-0">3</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bookings List -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs mb-4">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">All Bookings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Today</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Upcoming</a>
                            </li>
                        </ul>
                        
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Booking ID</th>
                                        <th>Customer</th>
                                        <th>Service</th>
                                        <th>Date & Time</th>
                                        <th>Device</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>BK001</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="default-profile">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Budi Santoso</h6>
                                                    <small class="text-muted">+62 812-3456-7890</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="service-badge">Device Maintenance</span>
                                        </td>
                                        <td>
                                            <div>
                                                <strong>15 Jun 2023</strong>
                                                <div class="text-muted">14:00 - 14:30</div>
                                            </div>
                                        </td>
                                        <td>Vaporesso Gen 200</td>
                                        <td><span class="booking-status status-confirmed">Confirmed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-complete me-1">
                                                <i class="fas fa-check"></i> Complete
                                            </button>
                                            <button class="btn btn-sm btn-cancel">
                                                <i class="fas fa-times"></i> Cancel
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BK002</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="default-profile">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Ani Wijaya</h6>
                                                    <small class="text-muted">+62 813-9876-5432</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="service-badge">Coil Building</span>
                                        </td>
                                        <td>
                                            <div>
                                                <strong>15 Jun 2023</strong>
                                                <div class="text-muted">15:00 - 15:45</div>
                                            </div>
                                        </td>
                                        <td>Geekvape Aegis L200</td>
                                        <td><span class="booking-status status-pending">Pending</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-confirm me-1">
                                                <i class="fas fa-check-circle"></i> Confirm
                                            </button>
                                            <button class="btn btn-sm btn-cancel">
                                                <i class="fas fa-times"></i> Cancel
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BK003</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="default-profile">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Rudi Hermawan</h6>
                                                    <small class="text-muted">+62 811-2233-4455</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="service-badge">Liquid Consultation</span>
                                        </td>
                                        <td>
                                            <div>
                                                <strong>16 Jun 2023</strong>
                                                <div class="text-muted">17:00 - 17:20</div>
                                            </div>
                                        </td>
                                        <td>OXVA Xlim Pro</td>
                                        <td><span class="booking-status status-confirmed">Confirmed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-complete me-1">
                                                <i class="fas fa-check"></i> Complete
                                            </button>
                                            <button class="btn btn-sm btn-cancel">
                                                <i class="fas fa-times"></i> Cancel
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BK004</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="default-profile">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Dewi Lestari</h6>
                                                    <small class="text-muted">+62 817-5566-7788</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="service-badge">Full Service</span>
                                        </td>
                                        <td>
                                            <div>
                                                <strong>16 Jun 2023</strong>
                                                <div class="text-muted">18:30 - 19:30</div>
                                            </div>
                                        </td>
                                        <td>Lost Vape Centaurus</td>
                                        <td><span class="booking-status status-completed">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary me-1" disabled>
                                                <i class="fas fa-check-double"></i> Done
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BK005</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="default-profile">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Hendra Pratama</h6>
                                                    <small class="text-muted">+62 819-9988-7766</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="service-badge">Device Troubleshooting</span>
                                        </td>
                                        <td>
                                            <div>
                                                <strong>17 Jun 2023</strong>
                                                <div class="text-muted">20:00 - 20:45</div>
                                            </div>
                                        </td>
                                        <td>Voopoo Drag 4</td>
                                        <td><span class="booking-status status-cancelled">Cancelled</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-secondary" disabled>
                                                <i class="fas fa-ban"></i> Cancelled
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mt-4">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Admin Content End -->

    <!-- Booking Detail Modal -->
    <div class="modal fade" id="bookingDetailModal" tabindex="-1" aria-labelledby="bookingDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="bookingDetailModalLabel">Booking Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <h6 class="text-muted">Customer Information</h6>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="default-profile" style="width: 60px; height: 60px; font-size: 24px;">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Budi Santoso</h5>
                                        <p class="mb-1">+62 812-3456-7890</p>
                                        <p class="mb-0">budi.santoso@example.com</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <h6 class="text-muted">Booking Information</h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between px-0">
                                        <span>Booking ID:</span>
                                        <strong>BK001</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between px-0">
                                        <span>Date:</span>
                                        <strong>15 June 2023</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between px-0">
                                        <span>Time:</span>
                                        <strong>14:00 - 14:30</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between px-0">
                                        <span>Status:</span>
                                        <span class="booking-status status-confirmed">Confirmed</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-4">
                                <h6 class="text-muted">Service Details</h6>
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h5 class="card-title">Device Maintenance</h5>
                                        <p class="card-text">Professional cleaning, calibration, and optimization of your vape device to ensure peak performance.</p>
                                        <div class="d-flex justify-content-between">
                                            <span>Duration:</span>
                                            <strong>30 minutes</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <h6 class="text-muted">Device Information</h6>
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h5 class="card-title">Vaporesso Gen 200</h5>
                                        <p class="card-text">Dual battery mod with 200W max output</p>
                                        <div class="d-flex align-items-center">
                                            <img src="img/ModProduk1 Centa.jpeg" alt="Device" class="img-thumbnail me-3" width="60">
                                            <div>
                                                <div class="d-flex justify-content-between">
                                                    <span>Type:</span>
                                                    <strong>Box Mod</strong>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span>Condition:</span>
                                                    <strong>Good</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <h6 class="text-muted">Special Requests</h6>
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <p class="card-text">Please check the battery connection as it sometimes disconnects. Also need advice on best coils for fruity flavors.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Print Receipt</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
    <script>
        $(document).ready(function() {
            // Booking action buttons
            $('.btn-confirm').click(function() {
                if(confirm('Confirm this booking?')) {
                    const row = $(this).closest('tr');
                    row.find('.booking-status')
                        .removeClass('status-pending')
                        .addClass('status-confirmed')
                        .text('Confirmed');
                    alert('Booking confirmed!');
                }
            });
            
            $('.btn-complete').click(function() {
                if(confirm('Mark this booking as completed?')) {
                    const row = $(this).closest('tr');
                    row.find('.booking-status')
                        .removeClass('status-confirmed')
                        .addClass('status-completed')
                        .text('Completed');
                    alert('Booking marked as completed!');
                }
            });
            
            $('.btn-cancel').click(function() {
                if(confirm('Cancel this booking?')) {
                    const row = $(this).closest('tr');
                    row.find('.booking-status')
                        .removeClass('status-pending status-confirmed')
                        .addClass('status-cancelled')
                        .text('Cancelled');
                    alert('Booking cancelled!');
                }
            });
            
            // View booking details
            $('tbody tr').click(function(e) {
                if(!$(e.target).is('button')) {
                    $('#bookingDetailModal').modal('show');
                }
            });
        });
    </script>
</body>
</html>