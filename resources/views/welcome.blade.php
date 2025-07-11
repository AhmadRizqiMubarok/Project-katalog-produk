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
    $kategoriList = ['Manis', 'Tawar', 'Coklat', 'Strawberry'];
    $produks = [
       
        
        ['nama' => 'Roti Coklat', 'gambar' => 'data:image/jpeg;base64,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', 'harga' => 9000, 'kategori' => 'Coklat'],
        ['nama' => 'Roti Manis', 'gambar' => 'data:image/jpeg;base64,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', 'harga' => 8000, 'kategori' => 'Manis'],
        ['nama' => 'Roti Strawberry', 'gambar' => 'data:image/jpeg;base64,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', 'harga' => 9000, 'kategori' => 'Strawberry'],
        ['nama' => 'Roti Pandan', 'gambar' => 'data:image/jpeg;base64,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', 'harga' => 9500, 'kategori' => 'Durian'],
        ['nama' => 'Kue Matcha', 'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjamCHLxJTcDFejceTOsT-32Sw9abY6s3qlw&s', 'harga' => 11500, 'kategori' => 'Matcha'],
        ['nama' => 'Roti Daging Tuna', 'gambar' => 'https://png.pngtree.com/png-clipart/20250308/original/pngtree-fresh-tuna-sandwich-with-lettuce-and-whole-wheat-bread-png-image_20601837.png', 'harga' => 13000, 'kategori' => 'Tuna'],
        ['nama' => 'Roti Kornet', 'gambar' => 'https://shopee.co.id/inspirasi-shopee/wp-content/uploads/2021/10/grilled-cheese-corned-beef-88c3c7ca6eebfed56b5fcff9af48ef8c_600x400.webp', 'harga' => 13000, 'kategori' => 'Kornet'],
        ['nama' => 'Roti Sosis', 'gambar' => 'https://png.pngtree.com/png-clipart/20240131/original/pngtree-sausage-buns-on-white-white-photo-png-image_14192396.png', 'harga' => 13000, 'kategori' => 'Sosis'],
        
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
    <button onclick="tampilkanProdukLain(this)"
        class="btn btn-light border px-4 py-4 shadow-lg rounded-4 fw-semibold d-flex flex-column align-items-center justify-content-center gap-2"
        style="width: 240px; transition: all 0.3s ease;">
        <i class="bi bi-chevron-double-down fs-3 text-primary"></i>
        <span class="text-dark">Lihat Semua Produk Roti...</span>
    </button>
</div>






<footer id="kontak-footer" class="text-white text-center py-4 mt-5" style="background-color: #212529; width: 100vw; margin-left: calc(-50vw + 50%); padding: 0; box-sizing: border-box;">
    <div class="container">
        <p class="mb-1">© {{ date('Y') }} Roti Sari. Semua hak dilindungi.</p>
        <hr class="bg-light" style="opacity: 0.1;">
        
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
</footer>

            

            </div>
        </div> 
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>