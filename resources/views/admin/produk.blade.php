<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Produk - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .table thead th {
            vertical-align: middle;
        }

        .btn-action {
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        img.product-thumb {
            object-fit: cover;
            border: 1px solid #dee2e6;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.05);
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
            <h3 class="fw-bold">Daftar Produk</h3>
            <div>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary me-2">
                    <i class="fas fa-arrow-left"></i> Dashboard
                </a>
                <a href="{{ route('admin.produk.create') }}" class="btn btn-success">
                    <i class="fas fa-plus"></i> Tambah Produk
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
            </div>
        @endif

        <div class="card p-3">
            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($produks as $produk)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if($produk->foto)
                                        <img src="{{ asset('storage/' . $produk->foto) }}" alt="Foto Produk" width="60" height="60" class="rounded product-thumb">
                                    @else
                                        <span class="badge bg-secondary">Tidak ada</span>
                                    @endif
                                </td>
                                <td>{{ $produk->nama }}</td>
                                <td>Rp{{ number_format($produk->harga, 0, ',', '.') }}</td>
                                <td>{{ $produk->stok }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.produk.show', $produk->id) }}" class="btn btn-sm btn-info btn-action text-white">
                                        <i class="fas fa-eye"></i> Lihat
                                    </a>
                                    <a href="{{ route('admin.produk.edit', $produk->id) }}" class="btn btn-sm btn-warning btn-action">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.produk.destroy', $produk->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger btn-action">
                                            <i class="fas fa-trash-alt"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Belum ada produk.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="text-center text-muted py-4">
        &copy; {{ date('Y') }} Admin Panel &mdash; Produk
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
