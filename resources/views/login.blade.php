<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk ke CyberTutor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0d1117, #161b22);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            color: #f0f6fc;
        }

        .login-card {
            background: #1c2128;
            border: 1px solid #30363d;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
            padding: 40px 30px;
            width: 400px;
            text-align: center;
        }

        .login-card h2 {
            font-weight: 700;
            color: #58a6ff;
        }

        .form-control {
            border-radius: 12px;
            background-color: #0d1117;
            border: 1px solid #30363d;
            color: #f0f6fc;
        }

        .form-control:focus {
            background-color: #0d1117;
            border-color: #58a6ff;
            box-shadow: none;
            color: #f0f6fc;
        }

        .btn-login {
            border-radius: 12px;
            background-color: #238636;
            color: white;
            font-weight: 600;
            border: none;
        }

        .btn-login:hover {
            background-color: #2ea043;
        }

        .btn-register {
            border-radius: 12px;
            background-color: transparent;
            color: #58a6ff;
            font-weight: 600;
            border: 1px solid #58a6ff;
        }

        .btn-register:hover {
            background-color: #58a6ff;
            color: #0d1117;
        }

        a {
            text-decoration: none;
        }

        .form-check-label,
        .text-muted {
            color: #8b949e !important;
        }

        .alert {
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h2>Selamat Datang 👋</h2>
        <p class="text-muted mb-4">Masuk ke akun CyberTutor kamu</p>

        <!-- Flash Message -->
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Login Form -->
        <form method="POST" action="{{ route('login.custom') }}">
            @csrf
            <div class="mb-3 text-start">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus placeholder="contoh@email.com">
            </div>

            <div class="mb-3 text-start">
                <label for="password" class="form-label fw-semibold">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="••••••••">
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label for="remember" class="form-check-label small text-muted">Ingat saya</label>
                </div>
                <a href="#" class="small text-info">Lupa password?</a>
            </div>

            <button type="submit" class="btn btn-login w-100 py-2">Masuk</button>
        </form>

        <hr class="my-4 border-secondary">

        <p class="text-muted mb-2">Belum punya akun?</p>
        <a href="{{ route('register.page') }}" class="btn btn-register w-100 py-2">Daftar Sekarang</a>
    </div>

</body>
</html>
