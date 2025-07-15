<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Di sinilah Anda dapat mendefinisikan semua rute web aplikasi Anda.
| Rute ini dimuat oleh RouteServiceProvider dan semua memiliki
| middleware grup "web".
|--------------------------------------------------------------------------
*/


// =======================
// PUBLIC USER ROUTES
// =======================

Route::get('/', fn () => view('welcome'));

Route::get('/produk', fn () => view('product'))->name('produk.semua');

Route::get('/produk/{id}', [ProductController::class, 'show']);

Route::post('/beli', function (Request $request) {
    $produkNama = $request->input('nama');
    $stok = session('stok', []);

    if (isset($stok[$produkNama]) && $stok[$produkNama] > 0) {
        $stok[$produkNama]--;
        session(['stok' => $stok]);
        return redirect()->back()->with('success', 'Berhasil membeli 1 ' . $produkNama);
    }

    return redirect()->back()->with('error', 'Stok habis untuk produk: ' . $produkNama);
})->name('beli.produk');

// Redirect sementara ke halaman admin produk (jika tidak login akan error)
Route::get('/admin', [ProductController::class, 'index']);


// =======================
// USER AUTH ROUTES
// =======================

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// =======================
// ADMIN ROUTES (PROTECTED)
// =======================

Route::prefix('admin')->middleware(['auth:admin'])->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', fn () => view('admin.dashboard'))->name('dashboard');

    // Manajemen Produk
    Route::get('/produk', [AdminProductController::class, 'index'])->name('produk.index');
    Route::get('/produk/create', [AdminProductController::class, 'create'])->name('produk.create');
    Route::post('/produk', [AdminProductController::class, 'store'])->name('produk.store');
    Route::get('/produk/{id}', [AdminProductController::class, 'show'])->name('produk.show');
    Route::get('/produk/{id}/edit', [AdminProductController::class, 'edit'])->name('produk.edit');
    Route::put('/produk/{id}', [AdminProductController::class, 'update'])->name('produk.update');
    Route::delete('/produk/{id}', [AdminProductController::class, 'destroy'])->name('produk.destroy');

    // Profil Admin
    Route::get('/profile', [AdminProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [AdminProfileController::class, 'update'])->name('profile.update');

    // Kategori (opsional)
    // Route::resource('/kategori', AdminCategoryController::class);
});
