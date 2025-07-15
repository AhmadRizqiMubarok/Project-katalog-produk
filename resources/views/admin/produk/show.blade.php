<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.05);
        }

        img.product-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            border: 1px solid #dee2e6;
            object-fit: cover;
        }

        .label {
            font-weight: bold;
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
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">Detail Produk</h3>
            <a href="{{ route('admin.produk.index') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>

        <div class="card p-4">
            <div class="row">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    @if($produk->foto)
                        <img src="{{ asset('storage/' . $produk->foto) }}" alt="Foto Produk" class="product-image">
                    @else
                        <span class="badge bg-secondary">Tidak ada foto</span>
                    @endif
                </div>
                <div class="col-md-8">
                    <h4 class="fw-bold">{{ $produk->nama }}</h4>
                    <p><span class="label">Harga:</span> Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
                    <p><span class="label">Stok:</span> {{ $produk->stok }}</p>
                    {{-- Tambahkan deskripsi jika tersedia --}}
                    @if (!empty($produk->deskripsi))
                        <p><span class="label">Deskripsi:</span> {{ $produk->deskripsi }}</p>
                    @endif

                    <div class="mt-4">
                        <a href="{{ route('admin.produk.edit', $produk->id) }}" class="btn btn-warning me-2">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('admin.produk.destroy', $produk->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center text-muted py-4">
        &copy; {{ date('Y') }} Admin Panel &mdash; Detail Produk
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
