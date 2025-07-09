@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Daftar Produk</h3>
  <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

  @foreach($produks as $produk)
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{ asset('storage/' . $produk->gambar) }}" class="img-fluid" alt="{{ $produk->nama }}">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{ $produk->nama }}</h5>
            <a href="{{ route('produk.edit', $produk) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('produk.destroy', $produk) }}" method="POST" class="d-inline">
              @csrf @method('DELETE')
              <button class="btn btn-danger">Hapus</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
