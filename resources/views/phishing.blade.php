<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Phishing Awareness — CyberTutor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #0d1117;
            color: #e0e0e0;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }
        .navbar {
            background-color: #161b22;
            border-bottom: 1px solid #21262d;
        }
        .navbar-brand {
            color: #00c853 !important;
            font-weight: 700;
        }
        .nav-link {
            color: #c9d1d9 !important;
        }
        .nav-link:hover {
            color: #00e676 !important;
        }
        .card {
            background-color: #1c1f24;
            border: 1px solid #30363d;
            border-radius: 14px;
            color: #e6edf3;
            box-shadow: 0 6px 18px rgba(0,0,0,0.25);
        }
        .btn-primary {
            background-color: #00c853;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            color: #fff;
        }
        .btn-primary:hover {
            background-color: #00e676;
        }
        .btn-outline-light {
            border: 1px solid #00c853;
            color: #00c853;
            border-radius: 10px;
        }
        .btn-outline-light:hover {
            background-color: #00c853;
            color: #0d1117;
        }
        .section-title {
            color: #00e676;
            font-weight: 700;
        }
        .badge-pts {
            background: rgba(0,230,118,0.12);
            color: #00e676;
            border-radius: 8px;
            padding: 6px 10px;
            font-weight: 700;
        }
        .video-placeholder {
            background: #161b22;
            height: 320px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #8b949e;
            font-weight: 600;
        }
        textarea.form-control {
            background-color: #161b22;
            border: 1px solid #30363d;
            color: #c9d1d9;
            border-radius: 8px;
        }
        textarea.form-control:focus {
            border-color: #00c853;
            box-shadow: 0 0 0 0.2rem rgba(0,230,118,0.25);
        }
        a {
            text-decoration: none;
        }
        hr {
            border-color: rgba(255,255,255,0.05);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg px-4">
        <a class="navbar-brand fw-bold" href="/">CyberTutor</a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-2"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="/classes">Kelas</a></li>
                @auth
                    <li class="nav-item mx-2"><a class="nav-link" href="/dashboard">Dashboard</a></li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-danger" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                @else
                    <li class="nav-item mx-2"><a class="nav-link" href="{{ route('login.page') }}">Masuk</a></li>
                    <li class="nav-item mx-2"><a class="nav-link" href="{{ route('register.page') }}">Daftar</a></li>
                @endauth
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class="container my-5">
        <div class="row g-4">
            <!-- Left: class main -->
            <div class="col-lg-8">
                <div class="card p-4 mb-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h3 class="mb-1 text-light">Phishing Awareness</h3>
                            <p class="mb-1 text-muted">Pelajari cara mengenali dan menghindari serangan phishing yang umum terjadi di internet.</p>
                            <small class="text-secondary">Level: Beginner · Durasi: ~45 menit · Tutor: CyberTutor Team</small>
                        </div>
                        <div class="text-end">
                            <div class="badge-pts mb-2">+10 Poin Quiz</div>
                            <div><span class="small text-muted">Harga:</span> <strong>Gratis</strong></div>
                        </div>
                    </div>

                    <hr class="my-3">

                    <!-- Video -->
                    <div class="video-placeholder mb-3">
                        🎥 Video Pembelajaran (placeholder)
                    </div>

                    <h5 class="section-title">Ringkasan Materi</h5>
                    <ul>
                        <li>Mengerti apa itu phishing dan contoh nyatanya (email, SMS, WA link).</li>
                        <li>Tanda-tanda pesan phishing: domain palsu, ajakan mendesak, permintaan data sensitif.</li>
                        <li>Cara verifikasi sumber: cek header email, hover link sebelum klik, gunakan 2FA.</li>
                        <li>Langkah mitigasi jika terlanjur klik: ubah password, lapor ke layanan terkait, cek transaksi.</li>
                    </ul>

                    <h5 class="section-title mt-4">Materi Tambahan</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-outline-light w-100 mb-2">📄 Download Slide</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-outline-light w-100 mb-2">📧 Contoh Email Phishing</a>
                        </div>
                    </div>

                    <hr>

                    <p class="mb-1">Setelah menyelesaikan materi di atas, kamu dapat mengikuti quiz singkat untuk mendapatkan poin yang bisa ditukar voucher.</p>

                    <div class="d-flex gap-2 mt-3">
                        @auth
                            <a href="#" class="btn btn-primary">Mulai Kelas</a>
                            <a href="/quiz/phishing" class="btn btn-outline-light">Ambil Quiz (Trivia)</a>
                        @else
                            <a href="{{ route('login.page') }}" class="btn btn-primary">Masuk untuk Mulai</a>
                            <a href="{{ route('register.page') }}" class="btn btn-outline-light">Daftar Sekarang</a>
                        @endauth
                    </div>
                </div>

                <!-- Discussion -->
                <div class="card p-4">
                    <h5 class="section-title">Diskusi & Tanya Jawab</h5>
                    <p class="text-muted">Belum ada pertanyaan. Jadilah yang pertama bertanya tentang materi ini.</p>
                    @auth
                        <form action="#" method="POST">
                            @csrf
                            <textarea name="comment" class="form-control mb-2" rows="3" placeholder="Tulis pertanyaan atau komentar..."></textarea>
                            <button class="btn btn-primary">Kirim</button>
                        </form>
                    @else
                        <p class="small">Silakan <a href="{{ route('login.page') }}" class="text-success">login</a> untuk bertanya.</p>
                    @endauth
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="card p-3 mb-4">
                    <h6 class="section-title mb-2">Ringkasan Cepat</h6>
                    <p class="small mb-1">Target: Pengguna Internet Umum</p>
                    <p class="small mb-1">Poin Quiz: <strong>10</strong></p>
                    <p class="small mb-1">Durasi: <strong>45 Menit</strong></p>
                    <p class="small mb-0">Sertifikat: <strong>Tidak</strong></p>
                </div>

                <div class="card p-3 mb-4">
                    <h6 class="section-title mb-2">Langkah Praktis</h6>
                    <ol class="small mb-0">
                        <li>Jangan klik link mencurigakan.</li>
                        <li>Periksa domain pengirim dengan teliti.</li>
                        <li>Gunakan autentikasi dua langkah (2FA).</li>
                        <li>Laporkan pesan phishing.</li>
                    </ol>
                </div>

                <div class="card p-3">
                    <h6 class="section-title mb-2">Ingin Tukar Poin?</h6>
                    <p class="small mb-2">Kumpulkan poin dari quiz untuk ditukar voucher.</p>
                    @auth
                        <a href="/vouchers" class="btn btn-outline-light w-100">🎁 Lihat Voucher</a>
                    @else
                        <a href="{{ route('login.page') }}" class="btn btn-outline-light w-100">Masuk untuk Lihat</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
