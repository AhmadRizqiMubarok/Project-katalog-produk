<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk - Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-label {
            font-weight: 500;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.05);
        }

        .btn i {
            margin-right: 4px;
        }

        .product-preview {
            max-width: 150px;
            max-height: 150px;
            object-fit: cover;
            border: 1px solid #dee2e6;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Panel</a>
        </div>
    </nav>

    <div class="container my-5">
        <div class="mb-4 d-flex justify-content-between align-items-center">
            <h3 class="fw-bold mb-0">Edit Produk</h3>
            <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>

        {{-- Notifikasi sukses --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
            </div>
        @endif

        {{-- Tampilkan error validasi --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data" class="card p-4">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $produk->nama) }}" required>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga', $produk->harga) }}" required>
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="{{ old('stok', $produk->stok) }}" required>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto Produk (opsional)</label>
                @if ($produk->foto)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $produk->foto) }}" alt="Foto Produk" class="img-thumbnail product-preview">
                    </div>
                @endif
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
