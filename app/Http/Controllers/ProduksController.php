<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProduksController extends Controller
{
    public function show($id)
    {
        $product = Produk::with('kategori')->findOrFail($id); // Ambil produk berdasarkan ID
        return view('produk.detail', compact('product'));
    }
}
