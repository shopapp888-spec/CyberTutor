<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberTutor Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #0e1117;
            color: #e0e0e0;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(90deg, #1b1f24, #182028);
            box-shadow: 0 2px 10px rgba(0,0,0,0.4);
        }
        .navbar-brand {
            font-weight: 700;
            color: #4caf50 !important;
            letter-spacing: 0.5px;
        }
        .navbar-nav .nav-link {
            color: #bbb !important;
            font-weight: 500;
            transition: 0.3s;
        }
        .navbar-nav .nav-link:hover {
            color: #4caf50 !important;
        }

        /* Card */
        .card {
            background: #161b22;
            border: 1px solid #2c323a;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease forwards;
        }
        .card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 6px 20px rgba(0,0,0,0.5);
        }
        .card i {
            font-size: 40px;
            color: #4caf50;
            margin-bottom: 15px;
        }
        .card h5 {
            color: #4caf50;
        }
        .card p {
            color: #cfcfcf;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Buttons */
        .btn-success {
            background: linear-gradient(90deg, #2e7d32, #388e3c);
            border: none;
            border-radius: 10px;
            font-weight: 600;
            color: #fff;
            transition: 0.3s;
        }
        .btn-success:hover {
            background: linear-gradient(90deg, #43a047, #2e7d32);
            transform: scale(1.03);
        }

        /* Progress Section */
        .progress-section {
            background: #161b22;
            border: 1px solid #2c323a;
            border-radius: 16px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.4);
        }
        .progress {
            background-color: #2c323a;
            border-radius: 12px;
        }
        .progress-bar {
            background: linear-gradient(90deg, #43a047, #66bb6a);
            border-radius: 12px;
        }

        /* Section titles */
        .welcome {
            color: #4caf50;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        /* Logout link */
        .nav-link.text-danger {
            color: #ef5350 !important;
        }
        .nav-link.text-danger:hover {
            color: #f44336 !important;
        }

        /* Footer */
        footer {
            text-align: center;
            margin-top: 60px;
            color: #888;
            font-size: 0.9rem;
            padding: 20px 0;
            border-top: 1px solid #2c323a;
            background: #12161c;
        }

        hr {
            border-color: #2c323a;
        }

        /* Delay animation per card */
        .col-md-4:nth-child(1) .card { animation-delay: 0.1s; }
        .col-md-4:nth-child(2) .card { animation-delay: 0.2s; }
        .col-md-4:nth-child(3) .card { animation-delay: 0.3s; }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg px-4">
        <a class="navbar-brand" href="#">CyberTutor</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-2"><a class="nav-link" href="#">My Classes</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="#">Leaderboard</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="#">Profile</a></li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-danger" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <h2 class="mb-4 fw-bold welcome">Selamat datang kembali, {{ Auth::user()->name }} 👋</h2>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card p-4 text-center">
                    <i class="bi bi-envelope-exclamation"></i>
                    <h5 class="fw-semibold mb-2">Phishing Awareness</h5>
                    <p>Pelajari cara mengenali dan menghindari serangan phishing.</p>
                    <a href="/phishing" class="btn btn-success w-100">Mulai Kelas</a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card p-4 text-center">
                    <i class="bi bi-shield-lock"></i>
                    <h5 class="fw-semibold mb-2">Password Security</h5>
                    <p>Pahami cara membuat dan menjaga kata sandi yang kuat.</p>
                    <a href="/password" class="btn btn-success w-100">Mulai Kelas</a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card p-4 text-center">
                    <i class="bi bi-person-bounding-box"></i>
                    <h5 class="fw-semibold mb-2">Social Engineering</h5>
                    <p>Pelajari cara kerja manipulasi manusia dalam dunia siber.</p>
                    <a href="/social-engineering" class="btn btn-success w-100">Mulai Kelas</a>
                </div>
            </div>
        </div>

        <!-- Progress Section -->
        <div class="progress-section text-center">
            <h4 class="fw-semibold mb-3">Progress Belajar Kamu</h4>
            <div class="progress mx-auto" style="height: 25px; max-width: 600px;">
                <div class="progress-bar" role="progressbar" style="width: 60%;" 
                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
            </div>
            <p class="mt-3">Kamu sudah mengumpulkan <strong>120 poin</strong> 🎉 — lanjut belajar untuk tukarkan dengan hadiah menarik!</p>
        </div>
    </div>

    <footer>
        © 2025 <span class="text-success">CyberTutor</span> • Belajar Aman, Cerdas, dan Tanggung Jawab
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
