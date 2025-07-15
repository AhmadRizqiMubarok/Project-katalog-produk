@extends('layouts.adminlte')

@section('title', 'Profil Admin')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 align-items-center">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    <i class="fas fa-user-circle mr-2"></i>Profil Admin
                </h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show animate__animated animate__fadeInDown" role="alert">
                <i class="fas fa-check-circle mr-1"></i> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card card-primary card-outline shadow-lg animate__animated animate__fadeIn">
                    <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
                        <h3 class="card-title">
                            <i class="fas fa-user-cog mr-2"></i>Edit Profil Admin
                        </h3>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-light btn-sm">
                            <i class="fas fa-arrow-left mr-1"></i> Dashboard
                        </a>
                    </div>

                    <form action="{{ route('admin.profile.update') }}" method="POST">
                        @csrf
                        <div class="card-body">

                            {{-- Nama --}}
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ old('name', $admin->name) }}" required>
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ old('email', $admin->email) }}" required>
                                </div>
                                <small class="form-text text-muted">Email harus aktif dan valid.</small>
                            </div>

                            {{-- Password --}}
                            <div class="form-group">
                                <label for="password">Password Baru</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Kosongkan jika tidak ingin mengganti">
                                </div>
                                <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengganti password.</small>
                            </div>

                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save mr-1"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
