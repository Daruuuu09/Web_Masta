<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Masta Vape Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #00BFFF;
            --dark-color: #1a1a1a;
        }
        
        body {
            background-color:rgb(119, 159, 173);
            font-family: 'Open Sans', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .login-container {
            max-width: 500px;
            width: 100%;
            margin: auto;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-top: 5px solid var(--primary-color);
        }
        
        .logo-container {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .logo-container img {
            height: 60px;
            margin-bottom: 1rem;
        }
        
        .form-control {
            padding: 12px 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(212, 175, 55, 0.25);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 20px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .btn-primary:hover {
            background-color: #00BFFF;
            border-color: #00BFFF;
        }
        
        .form-floating label {
            color: #666;
        }
        
        .forgot-password {
            color: var(--dark-color);
            text-decoration: none;
            font-size: 0.9rem;
        }
        
        .forgot-password:hover {
            color: var(--primary-color);
        }
        
        .input-group-text {
            background-color: white;
            border-right: none;
        }
        
        .password-toggle {
            cursor: pointer;
            background-color: white;
            border-left: none;
        }
        
        @media (max-width: 576px) {
            .login-container {
                margin: 20px;
                padding: 1.5rem;
            }
            
            .logo-container img {
                height: 50px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="logo-container">
                <img src="img/Logo masta.jpg" alt="Masta Vape Store Logo">
                <h3 class="mb-3">Admin Dashboard</h3>
                <p class="text-muted">Silakan masuk dengan akun admin Anda</p>
            </div>
            
            <form action="/admin/login" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    <label for="username"><i class="fas fa-user me-2"></i>Username</label>
                </div>
                
                <div class="form-floating mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <span class="input-group-text password-toggle" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </span>
                        <label for="password"></label>
                    </div>
                </div>
                
                <a href="{{ url('admin') }}" type="submit" class="btn btn-primary w-100 py-2 mb-3">MASUK</a>
                
                <div class="text-center">
                    <p class="text-muted mb-0">© 2025 Masta Vape Store. All rights reserved.</p>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
        
        // Form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            if (!username || !password) {
                e.preventDefault();
                alert('Username dan password harus diisi!');
            }
        });
    </script>
</body>
</html>