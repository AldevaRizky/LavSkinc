@extends('layouts.landing')

@section('title', 'BodyCare Products')

@section('content')
<section id="bodycare" class="py-12 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-gray-800 mb-4 text-center">BodyCare Products</h2>
        <p class="text-gray-600 mb-8 text-center">Treat your body with our premium body care products!</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($bodyCare as $product)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('storage/' . $product->gambar) }}" alt="BodyCare Product" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $product->nama }}</h3>
                        <p class="text-gray-600">Rp {{ number_format($product->harga, 2) }}</p>
                        <a href="{{ route('produk.detail', $product->id) }}" 
                            class="mt-4 px-4 py-2 bg-blue-500 text-white text-sm rounded hover:bg-blue-600 inline-block">
                            See More
                         </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
