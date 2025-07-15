@extends('layouts.admin') {{-- Pastikan layout admin sudah ada --}}

@section('content')
<div class="container-fluid">
  <h4 class="mb-4">Manajemen Produk</h4>

  <a href="{{ route('admin.produk.create') }}" class="btn btn-success mb-3">+ Tambah Produk</a>

  <div class="card">
    <div class="card-body table-responsive">
      <table class="table table-bordered">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $index => $product)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name ?? '-' }}</td>
            <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
            <td>{{ $product->stock }}</td>
            <td>
              @if($product->stock > 20)
                <span class="badge bg-success">Aktif</span>
              @elseif($product->stock > 0)
                <span class="badge bg-warning text-dark">Menipis</span>
              @else
                <span class="badge bg-danger">Habis</span>
              @endif
            </td>
            <td>
              <a href="{{ route('admin.produk.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
              <form action="{{ route('admin.produk.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
