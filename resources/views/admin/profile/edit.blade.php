@extends('layouts.app') {{-- Sesuaikan jika Anda punya layout sendiri --}}

@section('content')
<div class="container">
    <h3>Edit Profil</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.profile.update') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama Pengguna</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $user->name) }}" required>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
