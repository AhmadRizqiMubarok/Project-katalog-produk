<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Roti Sari</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .product-card img {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold fs-3 text-uppercase" href="{{ url('/') }}">
      Roti Sari
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarBasic">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontak</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('login') }}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<div class="container text-center mt-5">
  <h1 class="fw-bold">Selamat Datang di Roti Sari</h1>
  <p class="lead">Nikmati berbagai pilihan roti segar setiap hari!</p>
</div>

<!-- Katalog Produk -->
<div class="container mt-5">
  <h2 class="text-center mb-4">Katalog Produk</h2>
  <div class="row g-4">
    <!-- Produk 1 -->
    <div class="col-md-4">
      <div class="card product-card shadow-sm">
        <img src="https://via.placeholder.com/400x200?text=Roti+Manis" class="card-img-top" alt="Roti Manis">
        <div class="card-body text-center">
          <h5 class="card-title">Roti Manis</h5>
        </div>
      </div>
    </div>
    <!-- Produk 2 -->
    <div class="col-md-4">
      <div class="card product-card shadow-sm">
        <img src="https://via.placeholder.com/400x200?text=Roti+Tawar" class="card-img-top" alt="Roti Tawar">
        <div class="card-body text-center">
          <h5 class="card-title">Roti Tawar</h5>
        </div>
      </div>
    </div>
    <!-- Produk 3 -->
    <div class="col-md-4">
      <div class="card product-card shadow-sm">
        <img src="https://via.placeholder.com/400x200?text=Roti+Coklat" class="card-img-top" alt="Roti Coklat">
        <div class="card-body text-center">
          <h5 class="card-title">Roti Coklat</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4 mt-5">
  <p class="mb-0">© {{ date('Y') }} Roti Sari. Semua hak dilindungi.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
