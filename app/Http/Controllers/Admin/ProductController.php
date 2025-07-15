<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $produks = Product::all();
        return view('admin.produk', compact('produks'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'  => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok'  => 'required|integer|min:0',
            'foto'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('produk', 'public');
        }

        Product::create([
            'nama'  => $request->nama,
            'harga' => $request->harga,
            'stok'  => $request->stok,
            'foto'  => $fotoPath,
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function show($id)
    {
        $produk = Product::findOrFail($id);
        return view('admin.produk.show', compact('produk'));
    }

    public function edit($id)
    {
        $produk = Product::findOrFail($id);
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'  => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok'  => 'required|integer|min:0',
            'foto'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $produk = Product::findOrFail($id);

        if ($request->hasFile('foto')) {
            if ($produk->foto && Storage::disk('public')->exists($produk->foto)) {
                Storage::disk('public')->delete($produk->foto);
            }
            $produk->foto = $request->file('foto')->store('produk', 'public');
        }

        $produk->update([
            'nama'  => $request->nama,
            'harga' => $request->harga,
            'stok'  => $request->stok,
            'foto'  => $produk->foto,
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $produk = Product::findOrFail($id);

        if ($produk->foto && Storage::disk('public')->exists($produk->foto)) {
            Storage::disk('public')->delete($produk->foto);
        }

        $produk->delete();

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus!');
    }
}
