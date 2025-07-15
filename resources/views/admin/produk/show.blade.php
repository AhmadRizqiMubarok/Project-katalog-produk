<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk - Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap & Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background: linear-gradient(45deg, #0d6efd, #6610f2);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.3rem;
        }

        .card {
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.06);
            background-color: #fff;
        }

        .product-image {
            max-width: 100%;
            max-height: 350px;
            object-fit: cover;
            border-radius: 16px;
            border: 1px solid #dee2e6;
        }

        .label {
            font-weight: 600;
            color: #495057;
        }

        .value {
            font-size: 1.1rem;
            color: #212529;
        }

        .back-btn {
            transition: all 0.2s ease;
        }

        .back-btn:hover {
            background-color: #e2e6ea;
        }

        footer {
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-cogs me-1"></i> Admin Panel</a>
    </div>
</nav>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-dark"><i class="fas fa-box-open me-2 text-primary"></i>Detail Produk</h3>
        <a href="{{ route('admin.produk.index') }}" class="btn btn-outline-secondary back-btn">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="card">
        <div class="row g-4">
            <div class="col-md-5 text-center">
                @if($produk->foto)
                    <img src="{{ asset('storage/' . $produk->foto) }}" alt="Foto Produk" class="product-image shadow-sm">
                @else
                    <div class="d-flex align-items-center justify-content-center bg-light rounded" style="height: 300px;">
                        <span class="text-muted">Tidak ada foto</span>
                    </div>
                @endif
            </div>
            <div class="col-md-7">
                <h4 class="fw-bold text-primary">{{ $produk->nama }}</h4>
                <hr>
                <p class="mb-2"><span class="label">Harga:</span> <span class="value">Rp{{ number_format($produk->harga, 0, ',', '.') }}</span></p>
                <p class="mb-2"><span class="label">Stok:</span> <span class="value">{{ $produk->stok }}</span></p>

                @if (!empty($produk->deskripsi))
                    <p class="mb-0"><span class="label">Deskripsi:</span><br>
                        <span class="value">{{ $produk->deskripsi }}</span>
                    </p>
                @endif
            </div>
        </div>
    </div>
</div>

<footer class="text-center py-4 mt-5">
    &copy; {{ date('Y') }} Admin Panel — Detail Produk
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
