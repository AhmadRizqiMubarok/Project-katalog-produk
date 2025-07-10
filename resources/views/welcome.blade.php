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


<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8B4513;">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold fs-4 text-uppercase">Roti Sari</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="welcome">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="logout">Log Out</a></li>
            </ul>
        </div>
    </div>
</nav>



<div class="container text-center mt-5">
<h1 style="
            font-size: 100px; 
            font-weight: bold; 
            color: transparent;
            -webkit-text-stroke: 2px white;
            letter-spacing: 15px; 
            text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
        ">
            ROTI SARI
        </h1>
    </h1>
    <p class="lead" style="
        font-size: 1.6rem; /* memperbesar ukuran */
        font-weight: 600;
        color: white;
        text-shadow:
            -1px -1px 0 #000,  
             1px -1px 0 #000,
            -1px  1px 0 #000,
             1px  1px 0 #000; /* efek outline hitam */
    ">
        Nikmati berbagai pilihan roti segar setiap hari!
    </p>
</div>



@php
    // Data produk dan kategori disimpan manual
    $kategoriList = ['Manis', 'Tawar', 'Coklat'];
    $produks = [
        ['nama' => 'Roti Manis', 'gambar' => 'https://via.placeholder.com/400x200?text=Roti+Manis', 'harga' => 8000, 'kategori' => 'Manis'],
        ['nama' => 'Roti Tawar', 'gambar' => 'https://via.placeholder.com/400x200?text=Roti+Tawar', 'harga' => 7000, 'kategori' => 'Tawar'],
        ['nama' => 'Roti Coklat', 'gambar' => 'https://via.placeholder.com/400x200?text=Roti+Coklat', 'harga' => 9000, 'kategori' => 'Coklat'],
        ['nama' => 'Roti Strawberry', 'gambar' => 'https://via.placeholder.com/400x200?text=Roti+Coklat', 'harga' => 9000, 'kategori' => 'Strawberry'],
        ['nama' => 'Roti Nanas', 'gambar' => 'https://via.placeholder.com/400x200?text=Roti+Coklat', 'harga' => 8500, 'kategori' => 'Nanas'],
        ['nama' => 'Roti Susu', 'gambar' => 'https://via.placeholder.com/400x200?text=Roti+Coklat', 'harga' => 7500, 'kategori' => 'Susu'],
        ['nama' => 'Roti Durian', 'gambar' => 'https://via.placeholder.com/400x200?text=Roti+Coklat', 'harga' => 9500, 'kategori' => 'Durian'],
        ['nama' => 'Roti Blueberry', 'gambar' => 'https://via.placeholder.com/400x200?text=Roti+Coklat', 'harga' => 10000, 'kategori' => 'Blueberry'],
        ['nama' => 'Roti Keju', 'gambar' => 'https://via.placeholder.com/400x200?text=Roti+Coklat', 'harga' => 9000, 'kategori' => 'Keju'],
        ['nama' => 'Roti Kacang', 'gambar' => 'https://via.placeholder.com/400x200?text=Roti+Coklat', 'harga' => 9000, 'kategori' => 'Kacang'],
        ['nama' => 'Roti Matcha', 'gambar' => 'https://via.placeholder.com/400x200?text=Roti+Coklat', 'harga' => 11500, 'kategori' => 'Matcha'],
        ['nama' => 'Roti Red Velvet', 'gambar' => 'https://via.placeholder.com/400x200?text=Roti+Coklat', 'harga' => 15000, 'kategori' => 'Red Velvet'],
    ];
    $search = request('search');
    $filterKategori = request('kategori');
    $filtered = collect($produks)->filter(function ($p) use ($search, $filterKategori) {
        $matchSearch = !$search || str_contains(strtolower($p['nama']), strtolower($search));
        $matchKategori = !$filterKategori || $p['kategori'] === $filterKategori;
        return $matchSearch && $matchKategori;
    });
@endphp

<div class="container my-4">
    <form method="GET">
        <div class="row g-2">
            <div class="col-md-4">
                <input type="text" name="search" class="form-control" placeholder="Cari roti..." value="{{ $search }}">
            </div>
            <div class="col-md-4">
                <select name="kategori" class="form-select">
                    <option value="">Semua Kategori</option>
                    @foreach($kategoriList as $kategori)
                        <option value="{{ $kategori }}" {{ $kategori == $filterKategori ? 'selected' : '' }}>{{ $kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary w-100">Cari</button>
            </div>
        </div>
    </form>

    <div class="text-center my-4">
    <img src="bg_kayu.jpg" alt="Aneka Roti" 
         style="
            max-height: 400px; /* Pertahankan tinggi maksimum yang Anda inginkan */
            width: 100%;       /* Pastikan lebar gambar mengisi 100% dari container */
            object-fit: cover; /* **PERUBAHAN PENTING: Mengisi seluruh area, mungkin memotong bagian gambar** */
         " 
         class="img-fluid rounded shadow">
</div>

</div>

<div class="container mt-4">
<h2 class="text-center mb-4 fw-bold" style="
  color: transparent;
  -webkit-text-stroke: 1.5px white;
  font-size: 2.5rem;
  text-shadow: 1px 1px 5px rgba(0,0,0,0.7);
">
  Katalog Produk
</h2>

    <div class="row g-4">
        @forelse($filtered as $produk)
            <div class="col-md-3">
                <div class="card product-card shadow-sm">
                    <img src="{{ $produk['gambar'] }}" class="card-img-top" alt="{{ $produk['nama'] }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $produk['nama'] }}</h5>
                        <p class="text-muted">Rp{{ number_format($produk['harga'], 0, ',', '.') }}</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/6283110469411?text=Halo,%20saya%20ingin%20memesan,%20apakah%ada?{{ urlencode($produk['nama']) }}" 
                                target="_blank" 
                                class="btn btn-sm" 
                                style="background-color: #819067; color: white;">
                                Pesan via WhatsApp
                            </a>

                            <a href="mailto:admin@rotisari.com?subject=Pesan%20{{ urlencode($produk['nama']) }}" 
                                class="btn btn-sm" 
                                style="background-color: #3D74B6; color: white;">
                                Pesan via Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-muted">Produk tidak ditemukan.</p>
        @endforelse
    </div>
</div>

<footer class="text-white text-center py-4 mt-5" style="background-color: #212529; width: 100vw; margin: 0; padding: 0; box-sizing: border-box;">
    <p class="mb-1" style="padding: 0 20px;">© {{ date('Y') }} Roti Sari. Semua hak dilindungi.</p>
    <hr class="bg-light" style="opacity: 0.1; margin: 1rem 20px;"> <div class="row justify-content-center" style="margin-left: 0; margin-right: 0;">
        <div class="col-md-4" style="padding-left: 20px; padding-right: 20px;">
            <p class="mb-1">Kontak Kami:</p>
            <p class="mb-0">Email: <a href="mailto:admin@rotisari.com" class="text-white text-decoration-underline">admin@rotisari.com</a></p>
            <p class="mb-0">WhatsApp: <a href="https://wa.me/6283110469411" class="text-white text-decoration-underline" target="_blank">+62 831-1046-9411</a></p>
            <p class="mb-0">Alamat: Jl. Roti Manis No. 12, Bandung</p>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>