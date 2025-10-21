<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - {{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.2.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon1.png') }}">
    <style>
        html {
            overflow-x: hidden;
        }

        body {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #db2777 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }

        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            width: 100%;
            max-width: 100vw;
            overflow: hidden;
        }

        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(120, 219, 255, 0.2) 0%, transparent 50%);
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            box-shadow:
                0 32px 64px rgba(0, 0, 0, 0.12),
                0 16px 32px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.3);
            position: relative;
            overflow: hidden;
            max-width: 450px;
            width: 100%;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #4f46e5, #7c3aed, #db2777);
        }

        .brand-logo {
            width: 80px;
            height: 80px;
            object-fit: contain;
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
        }

        .form-floating>.form-control {
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
        }

        .form-floating>.form-control:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
            background: rgba(255, 255, 255, 1);
        }

        .form-floating>label {
            color: #6b7280;
            font-weight: 500;
        }

        .btn-login {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            border: none;
            border-radius: 12px;
            padding: 14px 32px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-login:hover::before {
            left: 100%;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(79, 70, 229, 0.4);
            background: linear-gradient(135deg, #5b51f0 0%, #8b42f5 100%);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .social-btn {
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 12px 24px;
            font-weight: 500;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
        }

        .social-btn:hover {
            transform: translateY(-2px);
            border-color: #4f46e5;
            background: rgba(255, 255, 255, 1);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .forgot-link {
            color: #4f46e5;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .forgot-link:hover {
            color: #7c3aed;
            text-decoration: underline;
        }

        .divider {
            position: relative;
            text-align: center;
            margin: 32px 0;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, #d1d5db, transparent);
        }

        .divider span {
            background: rgba(255, 255, 255, 0.95);
            padding: 0 24px;
            color: #6b7280;
            font-size: 14px;
            font-weight: 500;
        }

        .welcome-text {
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
            max-width: 100vw;
        }

        .floating-shapes::before,
        .floating-shapes::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 6s ease-in-out infinite;
        }

        .floating-shapes::before {
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-shapes::after {
            bottom: 10%;
            right: 10%;
            animation-delay: 3s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #9ca3af;
            cursor: pointer;
            z-index: 5;
            padding: 4px;
            border-radius: 4px;
            transition: color 0.3s ease;
        }

        .password-toggle:hover {
            color: #4f46e5;
        }
    </style>
</head>

<body>
    <div class="container-fluid login-container">
        <div class="floating-shapes"></div>
        <div class="row justify-content-center align-items-center w-100 m-0">
            <div class="col-11 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card login-card border-0 mx-auto">
                    <div class="card-body p-4 p-sm-5">
                        <!-- Brand Section -->
                        <div class="text-center mb-5">
                            <img src="{{ asset('img/icon1.png') }}" alt="Logo" class="brand-logo mb-3">
                            <h2 class="fw-bold welcome-text mb-2">Welcome Back!</h2>
                            <p class="text-muted mb-0">Please sign in to your account</p>
                        </div>

                        <!-- Login Form -->
                        <form action="{{ url('/login') }}" method="POST" id="loginForm">
                            @csrf

                            <!-- Email Field -->
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" id="floatingEmail" name="email"
                                    placeholder="name@example.com" required>
                                <label for="floatingEmail">
                                    <i class="bi bi-envelope me-2"></i>Email address
                                </label>
                            </div>

                            <!-- Password Field -->
                            <div class="form-floating mb-4 position-relative">
                                <input type="password" class="form-control" id="floatingPassword" name="password"
                                    placeholder="Password" required>
                                <label for="floatingPassword">
                                    <i class="bi bi-lock me-2"></i>Password
                                </label>
                                <button type="button" class="password-toggle" onclick="togglePassword()">
                                    <i class="bi bi-eye" id="passwordIcon"></i>
                                </button>
                            </div>

                            {{-- <!-- Remember Me & Forgot Password -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                                    <label class="form-check-label text-muted" for="rememberMe">
                                        Remember me
                                    </label>
                                </div>
                                <a href="#" class="forgot-link">Forgot Password?</a>
                            </div> --}}

                            <!-- Login Button -->
                            <button type="submit" class="btn btn-primary btn-login w-100 mb-4">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Sign In
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('floatingPassword');
            const passwordIcon = document.getElementById('passwordIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.className = 'bi bi-eye-slash';
            } else {
                passwordInput.type = 'password';
                passwordIcon.className = 'bi bi-eye';
            }
        }

        // Add form validation animation
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const email = document.getElementById('floatingEmail');
            const password = document.getElementById('floatingPassword');

            if (!email.value || !password.value) {
                e.preventDefault();

                if (!email.value) {
                    email.classList.add('is-invalid');
                    setTimeout(() => email.classList.remove('is-invalid'), 3000);
                }

                if (!password.value) {
                    password.classList.add('is-invalid');
                    setTimeout(() => password.classList.remove('is-invalid'), 3000);
                }
            }
        });

        // Remove invalid class on input
        document.getElementById('floatingEmail').addEventListener('input', function() {
            this.classList.remove('is-invalid');
        });

        document.getElementById('floatingPassword').addEventListener('input', function() {
            this.classList.remove('is-invalid');
        });
    </script>
</body>

</html>
