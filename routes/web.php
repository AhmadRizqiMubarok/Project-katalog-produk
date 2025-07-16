<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

// -------------------- USER ROUTES --------------------

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', function () {
    return view('product');
})->name('produk.semua');

Route::get('/produk/{id}', [ProductController::class, 'show']);
Route::get('/admin', [ProductController::class, 'index']);

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

// -------------------- AUTH ROUTES --------------------

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// -------------------- ADMIN ROUTES --------------------

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin');
    });

    Route::get('/produk', [AdminProductController::class, 'index'])->name('produk.index');
    Route::get('/produk/create', [AdminProductController::class, 'create'])->name('produk.create');
    Route::post('/produk', [AdminProductController::class, 'store'])->name('produk.store');
    
});
    