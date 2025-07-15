<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $produks = Product::all(); // Ambil semua produk dari tabel 'products'
        return view('admin.produk', compact('produks')); // Kirim ke view
    }

    public function create()
    {
        return view('admin.produk.create');
    }

}
