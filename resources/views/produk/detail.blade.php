@extends('layouts.landing')

@section('title', $product->nama)

@section('content')
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Image Section -->
            <div>
                <img src="{{ asset('storage/' . $product->gambar) }}" alt="{{ $product->nama }}" class="rounded-lg shadow-lg w-full">
            </div>

            <!-- Product Details Section -->
            <div>
                <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $product->nama }}</h1>
                <p class="text-gray-600 text-lg mb-6">
                    <strong>Category:</strong> {{ $product->kategori->kategori ?? 'Uncategorized' }}
                </p>
                <p class="text-gray-600 text-lg mb-6">
                    {{ $product->deskripsi }}
                </p>
                <p class="text-2xl font-semibold text-blue-500 mb-6">
                    ${{ number_format($product->harga, 2) }}
                </p>
                <button class="px-6 py-3 bg-green-500 text-white text-lg rounded-lg shadow-md hover:bg-green-600">
                    Add to Cart
                </button>
            </div>
        </div>
    </div>
</section>
@endsection
