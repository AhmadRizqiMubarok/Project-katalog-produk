<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #e3f2fd, #ffffff);
        }
        .login-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .login-btn {
            background-color: #0d6efd;
            transition: all 0.3s ease;
        }
        .login-btn:hover {
            background-color: #084298;
        }
        .admin-icon {
            width: 70px;
            height: 70px;
            background-color: #0d6efd;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 2rem;
            margin: 0 auto 20px auto;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center min-vh-100 p-3">

    <div class="card login-card p-4 p-md-5 w-100" style="max-width: 450px;">
        <div class="card-body">
            <div class="admin-icon mb-3">
                <i class="bi bi-person-lock"></i> <!-- Pakai icon Bootstrap jika tersedia -->
            </div>
            <h3 class="text-center mb-3 fw-bold text-primary">Admin Login</h3>
            <p class="text-center text-muted mb-4">Silakan masuk untuk melanjutkan ke dashboard.</p>

            {{-- Alert untuk session --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0 ps-3">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Form Login --}}
            <form action="{{ route('login') }}" method="POST" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" class="form-control form-control-lg rounded-3" id="email" placeholder="contoh@email.com" required autocomplete="email">
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg rounded-3" id="password" placeholder="Masukkan password Anda" required autocomplete="current-password">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg rounded-3 fw-bold login-btn">Login</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Icon Bootstrap (opsional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
