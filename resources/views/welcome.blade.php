<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roti Sari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .product-card img {
            height: 200px;
            width: 100%; 
            object-fit: contain; 
          }
    </style>
</head>
<body>

<div id="#beranda">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8B4513;">
    <div class="container-fluid">
        <img src="images/logo.png" alt="Logo" widht="50px" height="60px">
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak-footer">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>
</div>


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
    $kategoriList = ['Manis', 'Pandan', 'Coklat', 'Strawberry'];
    $produks = [
       
    [
        'nama' => 'Roti Coklat',
        'harga' => 12000,
        'kategori' => 'Coklat',
        'stok' => 20,
        'gambar' => asset('images/roticoklat9.jpg'),
    ],
    [
        'nama' => 'Roti Manis',
        'harga' => 9000,
        'kategori' => 'Manis',
        'stok' => 15,
        'gambar' => asset('images/rotimanis3.jpg'),
    ],
    [
        'nama' => 'Roti Strawberry',
        'harga' => 10000,
        'kategori' => 'Strawberry',
        'stok' => 10,
        'gambar' => asset('images/rotistrawberry3.jpg'),
    ],
    [
        'nama' => 'Roti Pandan',
        'harga' => 13000,
        'kategori' => 'Pandan',
        'stok' => 18,
        'gambar' => asset('images/rotipandan1.jpg'),
    ],
    [
        'nama' => 'Roti Matcha',
        'harga' => 13000,
        'kategori' => 'Matcha',
        'stok' => 18,
        'gambar' => asset('images/rotimatcha.jpg'),
    ],
    [
        'nama' => 'Roti Daging Tuna',
        'harga' => 13000,
        'kategori' => 'Tuna',
        'stok' => 18,
        'gambar' => asset('images/rotidagingtuna1.jpg'),
    ],
    [
        'nama' => 'Roti Qornet',
        'harga' => 13000,
        'kategori' => 'Kornet',
        'stok' => 18,
        'gambar' => asset('images/rotikornet3.jpg'),
    ],
    [
        'nama' => 'Roti Sosis',
        'harga' => 13000,
        'kategori' => 'Sosis',
        'stok' => 18,
        'gambar' => asset('images/rotisosis3.png'),
    ],
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
        <img src="profil2.webp" alt="Aneka Roti" 
            style="
                max-height: 400px; /* Pertahankan tinggi maksimum yang Anda inginkan */
                width: 100%;       /* Pastikan lebar gambar mengisi 100% dari container */
                object-fit: cover; /* **PERUBAHAN PENTING: Mengisi seluruh area, mungkin memotong bagian gambar** */
            " 
            class="img-fluid rounded shadow">
    </div>

    </div>

    <div id="tentang" class="container py-5">
  <div class="text-center mb-4">
    <h1 class="fw-bold display-5" style="color: #8B4513;">Tentang Kami</h1>
    <hr class="w-25 mx-auto" style="border: 2px solid #8B4513">
  </div>
  
  <div class="bg-light rounded-4 shadow-lg p-4 mx-auto" style="max-width: 800px;">
    <p class="fs-5" style="text-align: justify;">
      <strong>Roti Sari</strong> adalah toko roti lokal yang berkomitmen menghadirkan roti <strong>segar</strong>, <strong>lezat</strong>, dan <strong>berkualitas tinggi</strong> setiap hari. Dibuat dari bahan-bahan pilihan dan tanpa pengawet, setiap gigitan menyuguhkan cita rasa <em>tradisional</em> yang hangat dan menggugah selera.
    </p>
    <p class="fs-5" style="text-align: justify;">
      Sejak awal berdiri, Roti Sari telah menjadi <strong>pilihan utama keluarga</strong> untuk sarapan sehat, camilan nikmat, hingga oleh-oleh khas Bandung. Dengan semangat <strong>UMKM</strong> dan dedikasi pada kualitas, kami terus menghadirkan inovasi dalam bentuk roti manis, roti isi, kue kering, dan <em>pastry</em> yang disukai berbagai kalangan.
    </p>
    <p class="fs-5 fst-italic text-center mt-4">
      "Setiap roti punya cerita — dan di Roti Sari, kami ingin menjadi bagian dari cerita hangat Anda. -since 2k25-"
    </p>
  </div>
</div>


    <div id="produk" class="container mt-4">
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
        @php
            $stokTersedia = session('stok')[$produk['nama']] ?? $produk['stok'] ?? 10;
        @endphp

        <div class="col-md-3">
            <div class="card product-card shadow-sm">
                <img src="{{ $produk['gambar'] }}" class="card-img-top" alt="{{ $produk['nama'] }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $produk['nama'] }}</h5>
                    <p class="text-muted mb-1">Rp{{ number_format($produk['harga'], 0, ',', '.') }}</p>

                    {{-- Tambahan stok di bawah harga --}}
                    <p class="text-danger fw-semibold mb-3">Stok: {{ $stokTersedia }}</p>

                    <div class="d-grid gap-2">
                        <a href="https://wa.me/6283110469411?text=Halo,%20saya%20ingin%20memesan%20{{ urlencode($produk['nama']) }}.%20Apakah%20masih%20tersedia%3F" 
                        target="_blank" 
                        class="btn btn-sm" 
                        style="background-color: #25D366; color: white;">
                        <i class="fab fa-whatsapp text-success"></i>
                        Pesan via WhatsApp
                        </a>


                        <a href="mailto:admin@rotisari.com?subject=Pesan%20{{ urlencode($produk['nama']) }}" 
                            class="btn btn-sm" 
                            style="background-color: #007BFF; color: white;">
                            <i class="fas fa-envelope text-warning me-2"></i>
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


<div class="d-flex justify-content-center my-5">
    <button onclick="window.location.href='{{ url('/produk') }}'"
        class="btn btn-light border px-4 py-4 shadow-lg rounded-4 fw-bold d-flex flex-column align-items-center justify-content-center gap-2"
        style="width: 220px; transition: all 0.3s ease;">
        <i class="bi bi-basket-fill fs-1 text-primary icon-hover"></i>
        <span class="text-dark">Lihat Semua Produk Roti...</span>
    </button>
</div>

<style>
.icon-hover:hover {
    transform: scale(1.2);
    transition: transform 0.3s ease;
}
</style>


<footer id="kontak-footer" class="text-white text-center py-4 mt-5" style="background-color: #212529; width: 100vw; margin-left: calc(-50vw + 50%); padding: 0; box-sizing: border-box;">
    <div class="container">
        <div class="row text-start">
            <!-- Kolom kiri: Kontak -->
            <div class="col-md-6 mb-3">
                <p class="mb-1 fw-bold">Kontak Kami:</p>
                <p class="mb-0">
                    <i class="fas fa-envelope text-warning me-2"></i>
                    Email: 
                    <a href="mailto:admin@rotisari.com" class="text-white text-decoration-underline">
                        admin@rotisari.com
                    </a>
                </p>
                <p class="mb-0">
                    <i class="fab fa-whatsapp text-success me-2"></i>
                    WhatsApp: 
                    <a href="https://wa.me/6283110469411" class="text-white text-decoration-underline" target="_blank">
                        +62 831-1046-9411
                    </a>
                </p>
                <p class="mb-2">
                    <i class="fas fa-map-marker-alt text-danger me-2"></i>
                    Alamat: Jl. Roti Manis No. 12, Bandung
                </p>
            </div>
            

            <!-- Kolom kanan: Maps -->
            <div class="col-md-6">
                <div style="width: 100%; height: 200px; border-radius: 8px; overflow: hidden;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d253597.80987383527!2d108.45481099999999!3d-6.7128715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1752295514028!5m2!1sid!2sid" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <hr class="bg-light" style="opacity: 0.1;">
    <p class="mb-1">© {{ date('Y') }} Roti Sari. Semua hak dilindungi.</p>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>