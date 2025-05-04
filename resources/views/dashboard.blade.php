<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Bootstrap</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid p-3">
    <a class="navbar-brand" href="#">Loker.co</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/profil') }}">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/layanan') }}">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/galeri') }}">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/kontak') }}">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4 fw-bold">Selamat Datang di <span class="text-warning">Loker.co</span></h1>
        <p class="lead">Temukan ribuan lowongan pekerjaan dari seluruh Indonesia hanya dalam satu klik.</p>
        <a href="{{ url('/layanan') }}" class="btn btn-light btn-lg mt-3">Lihat Lowongan</a>
    </div>
</div>

<!-- Fitur Utama -->
<section class="py-5 bg-light text-center">
    <div class="container">
        <h2 class="mb-4">Fitur Unggulan Kami</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 border rounded-3 shadow-sm bg-white">
                    <h4>🔍 Cari Pekerjaan</h4>
                    <p>Gunakan filter untuk menemukan lowongan sesuai lokasi dan bidang.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border rounded-3 shadow-sm bg-white">
                    <h4>📁 Unggah CV</h4>
                    <p>Kelola CV-mu langsung di platform untuk proses lamaran cepat.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border rounded-3 shadow-sm bg-white">
                    <h4>📊 Statistik Lamaran</h4>
                    <p>Lihat riwayat lamaran dan status langsung dari dashboard-mu.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-dark text-white py-4 mt-5">
    <div class="container text-center">
        <p class="mb-0">&copy; {{ date('Y') }} Loker.co All rights reserved.</p>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
