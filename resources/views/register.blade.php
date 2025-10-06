<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar CyberTutor</title>
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

        .register-card {
            background: #1c2128;
            border: 1px solid #30363d;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
            padding: 40px 30px;
            width: 420px;
            text-align: center;
        }

        .register-card h2 {
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

        .btn-register {
            border-radius: 12px;
            background-color: #238636;
            color: white;
            font-weight: 600;
            border: none;
        }

        .btn-register:hover {
            background-color: #2ea043;
        }

        a {
            text-decoration: none;
        }

        .text-muted {
            color: #8b949e !important;
        }

        .alert {
            border-radius: 10px;
        }

        .alert ul {
            margin-bottom: 0;
        }

        .fw-semibold {
            color: #f0f6fc;
        }

        a.text-primary {
            color: #58a6ff !important;
        }

        a.text-primary:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="register-card">
        <h2>Buat Akun Baru 🔐</h2>
        <p class="text-muted mb-4">Gabung dan mulai perjalanan belajar cybersecurity kamu!</p>

        <!-- Flash Error Message -->
        @if ($errors->any())
            <div class="alert alert-danger text-start">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Register Form -->
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3 text-start">
                <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Contoh: Jason Tandiari">
            </div>

            <div class="mb-3 text-start">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="contoh@email.com">
            </div>

            <div class="mb-3 text-start">
                <label for="password" class="form-label fw-semibold">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="••••••••">
            </div>

            <div class="mb-3 text-start">
                <label for="password_confirmation" class="form-label fw-semibold">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Ulangi kata sandi">
            </div>

            <button type="submit" class="btn btn-register w-100 py-2">Daftar Sekarang</button>
        </form>

        <p class="mt-4 text-muted">Sudah punya akun? 
            <a href="/login" class="text-primary fw-semibold">Masuk di sini</a>
        </p>
    </div>

</body>
</html>
