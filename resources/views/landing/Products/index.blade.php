@extends('layouts.landing')

@section('title', 'All Products')

@section('content')
<section id="new-arrivals" class="py-12 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-gray-800 mb-4 text-center">All Products</h2>
        <p class="text-gray-600 mb-8 text-center">Discover all the products we have to offer!</p>

        <div class="mb-6 text-center">
            <form action="{{ route('search.products') }}" method="GET" class="flex justify-center">
                <input 
                    type="text" 
                    name="query" 
                    placeholder="Search products..." 
                    class="px-4 py-2 border rounded-l-lg w-1/2 focus:outline-none focus:ring focus:border-blue-300">
                <button 
                    type="submit" 
                    class="px-4 py-2 bg-blue-500 text-white rounded-r-lg hover:bg-blue-600">
                    Search
                </button>
            </form>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @isset($products)
                @foreach($products as $product)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('storage/' . $product->gambar) }}" alt="Product Image" class="w-full h-64 object-cover">
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
            @else
                @foreach($newArrivals as $product)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('storage/' . $product->gambar) }}" alt="Product Image" class="w-full h-64 object-cover">
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
            @endisset
        </div>
    </div>
</section>
@endsection
