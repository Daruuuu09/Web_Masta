<x-guest-layout>
    <style>
        :root {
            --primary-color: #00BFFF;
            --dark-color: #1a1a1a;
        }
        
        body {
            background-color: rgb(119, 159, 173);
            font-family: 'Open Sans', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 0;
        }
        
        .login-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            min-height: 100vh;
            padding: 20px;
        }
        
        .login-container {
            max-width: 500px;
            width: 100%;
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
            box-shadow: 0 0 0 0.25rem rgba(0, 191, 255, 0.25);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 20px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            width: 100%;
        }
        
        .btn-primary:hover {
            background-color: #0095d9;
            border-color: #0095d9;
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
                padding: 1.5rem;
            }
            
            .logo-container img {
                height: 50px;  
            }
        }
    </style>

    <div class="login-wrapper">
        <div class="login-container">
            <div class="logo-container text-center">
                <img src="{{ asset('img/Logo masta.jpg') }}" alt="Masta Vape Store Logo" class="mx-auto d-block">
                <h3 class="mb-3">Admin Dashboard</h3>
                <p class="text-muted">Silakan masuk dengan akun admin Anda</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus autocomplete="username">
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input id="password" class="form-control" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                        <span class="input-group-text password-toggle" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                </div>

                <!-- Remember Me -->
                <div class="mb-3 form-check">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                </div>

                <div class="d-grid gap-2 mb-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Log in') }}
                    </button>
                </div>

                @if (Route::has('password.request'))
                    <div class="text-center">
                        <a class="text-decoration-none" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    </div>
                @endif
            </form>

            <div class="text-center mt-4">
                <p class="text-muted mb-0">© {{ date('Y') }} Masta Vape Store. All rights reserved.</p>
            </div>
        </div>
    </div>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    
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
    </script>
</x-guest-layout>