<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminDashboardControllers;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\ProduksController;
use App\Http\Controllers\LandingController; // Tambahkan import controller LandingController
use Illuminate\Support\Facades\Route;

/*
|-------------------------------------------------------------------------- 
| Web Routes 
|-------------------------------------------------------------------------- 
| 
| Here is where you can register web routes for your application. These 
| routes are loaded by the RouteServiceProvider and all of them will 
| be assigned to the "web" middleware group. Make something great! 
| 
*/

// Route untuk Landing Page
Route::get('/', [LandingController::class, 'index'])->name('landing.index'); 
Route::post('/contact', [LandingController::class, 'sendContactMessage'])->name('sendContactMessage');
Route::get('/products', [LandingController::class, 'showProduk'])->name('products.index');
Route::get('/search/products', [LandingController::class, 'searchProducts'])->name('search.products');
Route::get('/skincare', [LandingController::class, 'showSkincare'])->name('products.skincare');
Route::get('/makeup', [LandingController::class, 'showMakeup'])->name('products.makeup');
Route::get('/bodycare', [LandingController::class, 'showBodyCare'])->name('products.bodycare');
Route::get('/haircare', [LandingController::class, 'showHairCare'])->name('products.haircare');
Route::get('/about-us', function () {
    return view('landing.about');
})->name('about');
Route::get('/produk/{id}', [ProduksController::class, 'show'])->name('produk.detail');



Route::get('/dashboard', [AdminDashboardControllers::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Admin routes
Route::resource('kategori', KategoriController::class)->except(['create', 'edit', 'show']);
Route::resource('produk', ProdukController::class)->except(['create', 'edit', 'show']);
Route::resource('contactus', ContactUsController::class)->only(['index', 'show', 'destroy']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
