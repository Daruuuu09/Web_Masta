<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin - Masta Vape Store</title>
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
        }
        .product-card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            transition: all 0.3s;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .product-img {
            height: 180px;
            object-fit: cover;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .product-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
        }
        .btn-admin {
            padding: 8px 15px;
            font-weight: 500;
            border-radius: 4px;
        }
        .btn-edit {
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .btn-delete {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
        }
        .modal-content {
            border: none;
            border-radius: 5px;
        }
        .form-control, .form-select {
            border-radius: 4px;
        }
        .category-badge {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 12px;
            margin-right: 5px;
        }
        .badge-mod {
            background-color: #6f42c1;
            color: white;
        }
        .badge-pod {
            background-color: #fd7e14;
            color: white;
        }
        .badge-liquid {
            background-color: #20c997;
            color: white;
        }
        .badge-coil {
            background-color: #17a2b8;
            color: white;
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
                    <a class="nav-link active" href="admin-products.html">
                        <i class="fas fa-box-open"></i> Products
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('adminbook') }}" class="nav-link" href="admin-orders.html">
                        <i class="fas fa-shopping-cart"></i> Booking
                    </a>
                </li>
                <li class="nav-item mt-4">
                    <a class="nav-link" href="#">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('menu') }}" class="nav-link" href="index.html">
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
            <h4 class="mb-0">Product Management</h4>
            <div>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addProductModal">
                    <i class="fas fa-plus me-1"></i> Add Product
                </button>
            </div>
        </div>

        <div class="row">
            <!-- Product Filter -->
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>All Categories</option>
                                    <option>Mod & Pod</option>
                                    <option>Liquid</option>
                                    <option>Coil</option>
                                    <option>Accessories</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>All Status</option>
                                    <option>Active</option>
                                    <option>Out of Stock</option>
                                    <option>Hidden</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search products...">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products List -->
           <!-- Di dalam product-card atau sebagai tab baru -->
<div class="card mt-4">
    <div class="card-header bg-dark text-white">
        <h5 class="mb-0">Inventory Batches (FIFO Management)</h5>
    </div>
    <div class="card-body">
        <button class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#addBatchModal">
            <i class="fas fa-plus me-1"></i> Add New Batch
        </button>
        
        <div class="table-responsive">
            <table class="table table-hover" id="batchTable">
                <thead>
                    <tr>
                        <th>Batch ID</th>
                        <th>Purchase Price</th>
                        <th>Received Date</th>
                        <th>Expiry Date</th>
                        <th>Initial Qty</th>
                        <th>Remaining Qty</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data akan diisi via JavaScript -->
                </tbody>
            </table>
        </div>
    </div>
</div>
                        <!-- Pagination -->
                        <!-- <nav aria-label="Page navigation">
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
    </div> -->
    <!-- Admin Content End -->

<!-- Add Batch Modal -->
<div class="modal fade" id="addBatchModal" tabindex="-1" aria-labelledby="addBatchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="addBatchModalLabel">Add New Product Batch</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="batchForm">
                    <input type="hidden" id="productId" name="product_id" value="{{ request()->id }}">
                    <div class="mb-3">
                        <label for="batchQuantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="batchQuantity" required>
                    </div>
                    <div class="mb-3">
                        <label for="purchasePrice" class="form-label">Purchase Price (Rp)</label>
                        <input type="number" class="form-control" id="purchasePrice" required>
                    </div>
                    <div class="mb-3">
                        <label for="dateReceived" class="form-label">Date Received</label>
                        <input type="date" class="form-control" id="dateReceived" required>
                    </div>
                    <div class="mb-3">
                        <label for="expiryDate" class="form-label">Expiry Date (Optional)</label>
                        <input type="date" class="form-control" id="expiryDate">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveBatch">Save Batch</button>
            </div>
        </div>
    </div>
</div>

<!-- FIFO Allocation Report!!    -->
<div class="card mt-4">
    <div class="card-header bg-dark text-white">
        <h5 class="mb-0">FIFO Allocation Report</h5>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-4">
                <input type="date" class="form-control" id="reportStartDate">
            </div>
            <div class="col-md-4">
                <input type="date" class="form-control" id="reportEndDate">
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary" id="generateReport">Generate Report</button>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table table-hover" id="fifoReportTable">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Reference</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Batches Used</th>
                        <th>Total COGS</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data report akan diisi via JavaScript -->
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- FIFO visualisasi -->
<div class="card mt-4">
    <div class="card-header bg-dark text-white">
        <h5 class="mb-0">FIFO Flow Visualization</h5>
    </div>
    <div class="card-body">
        <div class="fifo-flow-container" style="overflow-x: auto; white-space: nowrap; padding: 10px 0;">
            <div class="d-flex" id="fifoFlow">
                <!-- FIFO flow items will be added here by JavaScript -->
            </div>
        </div>
    </div>
</div>

<style>
    .fifo-item {
        display: inline-block;
        width: 120px;
        margin-right: 15px;
        text-align: center;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        background-color: #f8f9fa;
        transition: all 0.3s;
    }
    .fifo-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .fifo-item .batch-id {
        font-weight: bold;
        margin-bottom: 5px;
    }
    .fifo-item .batch-date {
        font-size: 12px;
        color: #6c757d;
    }
    .fifo-item .batch-qty {
        margin-top: 5px;
        font-size: 14px;
    }
    .fifo-arrow {
        display: inline-block;
        margin-right: 15px;
        font-size: 24px;
        color: #6c757d;
        align-self: center;
    }
</style>

<script>
function visualizeFifoFlow(productId) {
    $.get(`/api/products/${productId}/batches`, function(response) {
        const fifoFlow = $('#fifoFlow');
        fifoFlow.empty();
        
        response.data.forEach((batch, index) => {
            // Tambahkan panah jika bukan batch pertama
            if (index > 0) {
                fifoFlow.append('<div class="fifo-arrow"><i class="fas fa-arrow-right"></i></div>');
            }
            
            // Tambahkan item batch
            const batchItem = `
                <div class="fifo-item" data-batch-id="${batch.batch_id}">
                    <div class="batch-id">${batch.batch_id}</div>
                    <div class="batch-date">${batch.date_received}</div>
                    <div class="batch-qty">
                        <span class="badge bg-primary">${batch.remaining_quantity}/${batch.quantity}</span>
                    </div>
                </div>
            `;
            fifoFlow.append(batchItem);
        });
    });
}
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
    
   <script>
// Fungsi untuk menampilkan alert
function showAlert(type, message) {
    const alert = `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>`;
    $('.admin-content').prepend(alert);
    
    // Hilangkan alert setelah 5 detik
    setTimeout(() => {
        $('.alert').alert('close');
    }, 5000);
}

// Fungsi untuk memuat batch produk
function loadProductBatches(productId) {
    console.log(`Loading batches for product ${productId}`); // Debug
    $.ajax({
        url: `/api/products/${productId}/batches`,
        method: 'GET',
        success: function(response) {
            console.log('Batch data received:', response); // Debug
            const batchTable = $('#batchTable tbody');
            batchTable.empty();
            
            response.data.forEach(batch => {
                const status = batch.remaining_quantity <= 0 ? 
                    '<span class="badge bg-secondary">Consumed</span>' : 
                    '<span class="badge bg-success">Active</span>';
                
                const row = `
                    <tr data-batch-id="${batch.batch_id}">
                        <td>${batch.batch_id}</td>
                        <td>Rp${batch.purchase_price.toLocaleString()}</td>
                        <td>${batch.date_received}</td>
                        <td>${batch.expiry_date || 'N/A'}</td>
                        <td>${batch.quantity}</td>
                        <td>${batch.remaining_quantity}</td>
                        <td>${status}</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary view-movement" 
                                data-bs-toggle="tooltip" title="View Movements">
                                <i class="fas fa-history"></i>
                            </button>
                        </td>
                    </tr>
                `;
                batchTable.append(row);
            });
        },
        error: function(error) {
            console.error('Error loading batches:', error);
            showAlert('danger', 'Failed to load batches: ' + error.responseJSON?.message);
        }
    });
}

// Event handler untuk tombol Save Batch
$('#saveBatch').click(function() {
    const productId = new URLSearchParams(window.location.search).get('id');
    
    if (!productId) {
        alert('Product ID tidak ditemukan!');
        return;
    }

    const formData = {
        quantity: $('#batchQuantity').val(),
        purchase_price: $('#purchasePrice').val(),
        date_received: $('#dateReceived').val(),
        expiry_date: $('#expiryDate').val() || null
    };

    $.ajax({
        url: `/api/products/${productId}/batches`,
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(formData),
        success: function(response) {
            alert('Batch berhasil ditambahkan!');
            location.reload();
        },
        error: function(xhr) {
            const error = xhr.responseJSON;
            alert(`Error: ${error.message || 'Gagal menyimpan batch'}`);
        }
    });
});

// Inisialisasi ketika modal ditampilkan
function setupModalEvents() {
    $('#addBatchModal').off('show.bs.modal').on('show.bs.modal', function(event) {
        const productId = $('#productId').val();
        console.log('Batch modal shown for product:', productId); // Debug
        if (!productId) {
            showAlert('danger', 'No product selected');
            return;
        }
    });
}

// Inisialisasi utama ketika dokumen siap
$(document).ready(function() {
    console.log('Document ready'); // Debug
    
    // Setup event handlers
    setupSaveBatchHandler();
    setupModalEvents();

    // Load initial data
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get('id');
    
    if (productId) {
        console.log('Initializing with product ID:', productId); // Debug
        $('#productId').val(productId);
        loadProductBatches(productId);
    } else {
        console.warn('No product ID found in URL'); // Debug
        showAlert('warning', 'No product selected. Please select a product first.');
    }
});
</script>
</body>
</html>