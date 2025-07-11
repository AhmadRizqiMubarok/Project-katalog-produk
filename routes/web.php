<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware('auth');


Route::post('/beli', function (Request $request) {
    $produkNama = $request->input('nama');

    // Ambil stok dari session
    $stok = session('stok', []);

    // Jika produk ditemukan, kurangi stoknya
    if (isset($stok[$produkNama]) && $stok[$produkNama] > 0) {
        $stok[$produkNama]--;
        session(['stok' => $stok]);
        return redirect()->back()->with('success', 'Berhasil membeli 1 ' . $produkNama);
    }

    return redirect()->back()->with('error', 'Stok habis untuk produk: ' . $produkNama);
})->name('beli.produk');





