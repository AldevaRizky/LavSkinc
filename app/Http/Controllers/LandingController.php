<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // Mengambil produk terbaru
        $newArrivals = Produk::orderBy('created_at', 'desc')->take(4)->get();

        // Mengambil produk berdasarkan kategori (Skincare, Makeup, dll.)
        $skincare = Produk::whereHas('kategori', function ($query) {
            $query->where('kategori', 'Skincare');
        })->take(4)->get();

        $makeup = Produk::whereHas('kategori', function ($query) {
            $query->where('kategori', 'Makeup');
        })->take(4)->get();

        return view('landing.index', compact('newArrivals', 'skincare', 'makeup'));
    }

    public function sendContactMessage(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Simpan data ke tabel contact_us
        ContactUs::create([
            'nama' => $validatedData['name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
        ]);

        // Redirect kembali dengan alert sukses
        return redirect()->to('/#contact')->with('success', 'Thank you for contacting us! Your message has been sent.');
    }

    public function showProduk()
    {
        // Mengambil semua produk
        $newArrivals = Produk::all();  // Ambil semua produk
        return view('landing.products.index', compact('newArrivals'));  // Kirim produk terbaru ke view
    }

    public function searchProducts(Request $request)
    {
        $query = $request->input('query');
        
        // Mencari produk berdasarkan query
        $products = Produk::where('nama', 'like', '%' . $query . '%')->get();

        return view('landing.products.index', compact('products'));  // Kirim hasil pencarian ke view
    }

    public function showSkincare()
    {
        // Mengambil produk dengan kategori 'Skincare'
        $skincare = Produk::whereHas('kategori', function ($query) {
            $query->where('kategori', 'Skincare');
        })->get();

        return view('landing.products.skincare', compact('skincare'));  // Kirim data skincare ke view
    }

    public function showMakeup()
{
    // Mengambil semua produk dengan kategori 'Makeup'
    $makeup = Produk::whereHas('kategori', function ($query) {
        $query->where('kategori', 'Makeup');  // Menyaring berdasarkan nama kategori
    })->get();  // Mengambil semua produk tanpa batasan jumlah

    return view('landing.products.makeup', compact('makeup'));  // Kirim data makeup ke view
}

public function showBodyCare()
{
    // Mengambil semua produk dengan kategori 'BodyCare'
    $bodyCare = Produk::whereHas('kategori', function ($query) {
        $query->where('kategori', 'BodyCare');  // Menyaring berdasarkan nama kategori
    })->get();  // Mengambil semua produk tanpa batasan jumlah

    return view('landing.products.bodycare', compact('bodyCare'));  // Kirim data bodyCare ke view
}

public function showHairCare()
{
    // Mengambil semua produk dengan kategori 'HairCare'
    $hairCare = Produk::whereHas('kategori', function ($query) {
        $query->where('kategori', 'HairCare');  // Menyaring berdasarkan nama kategori
    })->get();  // Mengambil semua produk tanpa batasan jumlah

    return view('landing.products.haircare', compact('hairCare'));  // Kirim data hairCare ke view
}

}
