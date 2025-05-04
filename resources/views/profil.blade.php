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
          <a class="nav-link" aria-current="page" href="{{ url('/dashboard') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/profil') }}">Profil</a>
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

<div class="container mt-5">
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4">
            <h1 class="mb-3 text-primary">Tentang Loker.co</h1>
            
            <p><strong>Loker.co</strong> adalah platform digital yang dirancang untuk menghubungkan pencari kerja dan perusahaan secara efisien. Kami menyediakan layanan informasi lowongan kerja dari berbagai industri di seluruh Indonesia.</p>
            
            <h5 class="mt-4">🎯 Visi</h5>
            <p>Menjadi platform terpercaya dalam membantu masyarakat Indonesia mendapatkan pekerjaan yang sesuai dengan potensi dan minat mereka.</p>

            <h5 class="mt-4">🎯 Misi</h5>
            <ul>
                <li>Menyediakan informasi lowongan kerja yang valid, relevan, dan terkini.</li>
                <li>Menjadi jembatan komunikasi antara pencari kerja dan perusahaan.</li>
                <li>Mendorong pemerataan akses kerja di seluruh wilayah Indonesia.</li>
            </ul>
            <h5 class="mt-4">📍 Kantor Pusat</h5>
            <p>Jl. Kerja Nyata No. 88, Jakarta Selatan, Indonesia</p>
        </div>
    </div>
</div>

<footer class="bg-dark text-white py-4 mt-5">
    <div class="container text-center">
        <p class="mb-0">&copy; {{ date('Y') }} Loker.co All rights reserved.</p>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
