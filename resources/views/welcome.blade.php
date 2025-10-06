<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberTutor - Belajar Cybersecurity Jadi Mudah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #0d1117;
            color: #f0f6fc;
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #161b22 !important;
            border-bottom: 1px solid #30363d;
        }
        .navbar-brand {
            color: #2ea043 !important;
            font-weight: 700;
        }
        .navbar .nav-link {
            color: #c9d1d9 !important;
        }
        .navbar .nav-link:hover {
            color: #58a6ff !important;
        }
        .hero {
            background: linear-gradient(135deg, #0d1117, #161b22);
            padding: 100px 0;
            text-align: center;
        }
        .hero h1 {
            font-weight: 700;
            color: #f0f6fc;
        }
        .hero p {
            color: #8b949e;
        }
        .btn-primary {
            background-color: #238636;
            border: none;
        }
        .btn-primary:hover {
            background-color: #2ea043;
        }
        .btn-light {
            background-color: #f0f6fc;
            color: #0d1117;
        }
        .btn-light:hover {
            background-color: #c9d1d9;
        }
        .section-title {
            color: #f0f6fc;
        }
        .feature-card, .class-card {
            background-color: #161b22;
            border: 1px solid #30363d;
            border-radius: 12px;
            transition: 0.3s;
            color: #c9d1d9;
        }
        .feature-card:hover, .class-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 10px rgba(88, 166, 255, 0.2);
        }
        .feature-icon {
            font-size: 2.5rem;
            color: #2ea043;
        }
        footer {
            background-color: #161b22;
            border-top: 1px solid #30363d;
            color: #8b949e;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">CyberTutor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon text-light"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#features" class="nav-link">Fitur</a></li>
                    <li class="nav-item"><a href="#classes" class="nav-link">Kelas</a></li>
                    <li class="nav-item"><a href="#rewards" class="nav-link">Hadiah</a></li>
                    <li class="nav-item"><a href="/login" class="btn btn-primary ms-3 px-4">Masuk</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero mt-5 pt-5">
        <div class="container">
            <h1 class="display-5">Belajar Cybersecurity Jadi Seru dan Menguntungkan 💡</h1>
            <p class="lead mt-3 mb-4">
                Kuasai dunia siber, pelajari cara melindungi dirimu dari ancaman digital, dan tukarkan poinmu dengan voucher menarik!
            </p>
            <a href="/register" class="btn btn-light btn-lg fw-bold">Mulai Belajar Sekarang</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5" id="features">
        <div class="container text-center">
            <h2 class="fw-bold mb-5 section-title">Mengapa Pilih CyberTutor?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card p-4">
                        <div class="feature-icon mb-3">🧠</div>
                        <h5 class="fw-bold text-white">Materi Mudah Dipahami</h5>
                        <p>Dirancang agar semua orang bisa memahami dasar keamanan digital dengan mudah.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card p-4">
                        <div class="feature-icon mb-3">🎯</div>
                        <h5 class="fw-bold text-white">Belajar Sambil Main</h5>
                        <p>Ikuti kuis interaktif dan kumpulkan poin untuk naik peringkat di leaderboard.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card p-4">
                        <div class="feature-icon mb-3">🎁</div>
                        <h5 class="fw-bold text-white">Tukar Poin dengan Voucher</h5>
                        <p>Kumpulkan poin untuk menukar voucher kopi, makanan, dan hadiah eksklusif lainnya!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Class Section -->
    <section class="py-5" id="classes">
        <div class="container text-center">
            <h2 class="fw-bold mb-5 section-title">Kelas Populer</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="class-card p-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/888/888848.png" class="w-50 mx-auto mb-3" alt="class">
                        <h5 class="fw-bold text-white">Cybersecurity Dasar</h5>
                        <p>Pelajari cara melindungi akun, data, dan perangkatmu dari ancaman umum.</p>
                        <a href="/class/1" class="btn btn-primary mt-2">Lihat Kelas</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="class-card p-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/3064/3064197.png" class="w-50 mx-auto mb-3" alt="class">
                        <h5 class="fw-bold text-white">Phishing & Social Engineering</h5>
                        <p>Kenali modus penipuan online dan cara agar tidak terjebak.</p>
                        <a href="/class/phishing" class="btn btn-primary mt-2">Lihat Kelas</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="class-card p-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/1250/1250615.png" class="w-50 mx-auto mb-3" alt="class">
                        <h5 class="fw-bold text-white">Keamanan Jaringan</h5>
                        <p>Pelajari dasar-dasar jaringan dan bagaimana melindunginya dari serangan.</p>
                        <a href="/class/3" class="btn btn-primary mt-2">Lihat Kelas</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rewards Section -->
    <section class="py-5" id="rewards">
        <div class="container text-center">
            <h2 class="fw-bold mb-5 section-title">Kumpulkan Poin & Dapatkan Hadiah 🎉</h2>
            <p class="lead text-muted mb-4">
                Selesaikan setiap quiz dan kumpulkan poin. Tukarkan poinmu untuk hadiah seru setiap bulan!
            </p>
            <a href="/vouchers" class="btn btn-primary btn-lg">Lihat Voucher</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 text-center">
        <p class="mb-0">© 2025 CyberTutor. Edukasi Digital untuk Semua. 🔐</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
