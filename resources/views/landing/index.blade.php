@extends('layouts.landing')

@section('title', 'Beranda')

@section('content')
 <!-- Hero Section -->
 <header class="hero relative">
    <div class="hero-overlay"></div>
  
    <div id="hero-images" class="hero-images absolute top-0 left-0 w-full h-full">
      <div class="hero-image" style="background-image: url('https://skintific.com/cdn/shop/files/2160x1080px_cbefc455-92c2-4f4b-8a4e-6067a4bc8b8b.jpg?v=1732099090&width=1400');"></div>
      <div class="hero-image" style="background-image: url('https://skintific.com/cdn/shop/files/2160x1080px_eae457f6-e697-42c7-a3cd-acd2811f7cc9.jpg?v=1729569486&width=1400');"></div>
      <div class="hero-image" style="background-image: url('https://skintific.com/cdn/shop/files/2160x1080px_cbefc455-92c2-4f4b-8a4e-6067a4bc8b8b.jpg?v=1732099090&width=1400');"></div>
      <div class="hero-image" style="background-image: url('https://d2jlkn4m127vak.cloudfront.net/medias/sliders/slider-desktop-1729675654.webp');"></div>
      <div class="hero-image" style="background-image: url('https://d2jlkn4m127vak.cloudfront.net/medias/sliders/slider-desktop-1724900406.jpg');"></div>
    </div>
  </header>
  
 <!-- New Arrivals Section -->
 <section id="new-arrivals" class="py-12 bg-gray-100">
  <div class="container mx-auto px-4">
      <h2 class="text-4xl font-bold text-gray-800 mb-4 text-center">New Arrivals</h2>
      <p class="text-gray-600 mb-8 text-center">Discover our latest products curated just for you!</p>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
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
      </div>

      <div class="mt-8 text-center">
        <a href="{{ route('products.index') }}" class="px-6 py-3 bg-blue-500 text-white text-sm rounded hover:bg-blue-600 inline-block">
          View All Products
      </a>
      
      </div>
  </div>
</section>

<!-- Skincare Section -->
<section id="skincare" class="py-12 bg-white">
  <div class="container mx-auto px-4">
      <h2 class="text-4xl font-bold text-gray-800 mb-4 text-center">Skincare</h2>
      <p class="text-gray-600 mb-8 text-center">Pamper your skin with our specially curated skincare products!</p>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          @foreach($skincare as $product)
              <div class="bg-gray-100 rounded-lg shadow-md overflow-hidden">
                  <img src="{{ asset('storage/' . $product->gambar) }}" alt="Skincare Product" class="w-full h-64 object-cover">
                  <div class="p-4">
                      <h3 class="text-lg font-semibold text-gray-800">{{ $product->nama }}</h3>
                      <p class="text-gray-600">Rp {{ number_format($product->harga, 2) }}</p>
                      <a href="{{ route('produk.detail', $product->id) }}" 
                        class="mt-4 px-4 py-2 bg-green-500 text-white text-sm rounded hover:bg-green-600 inline-block">
                        See More
                     </a>
                  </div>
              </div>
          @endforeach
      </div>

      <div class="mt-8 text-center">
        <button onclick="window.location.href='{{ route('products.skincare') }}'" 
        class="px-6 py-3 bg-green-500 text-white text-sm rounded hover:bg-green-600">
            View All Skincare
        </button>

      </div>
  </div>
</section>

<!-- Makeup Section -->
<section id="makeup" class="py-12 bg-gray-100">
  <div class="container mx-auto px-4">
      <h2 class="text-4xl font-bold text-gray-800 mb-4 text-center">Makeup</h2>
      <p class="text-gray-600 mb-8 text-center">Enhance your beauty with our premium makeup collection!</p>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          @foreach($makeup as $product)
              <div class="bg-white rounded-lg shadow-md overflow-hidden">
                  <img src="{{ asset('storage/' . $product->gambar) }}" alt="Makeup Product" class="w-full h-64 object-cover">
                  <div class="p-4">
                      <h3 class="text-lg font-semibold text-gray-800">{{ $product->nama }}</h3>
                      <p class="text-gray-600">Rp {{ number_format($product->harga, 2) }}</p>
                      <a href="{{ route('produk.detail', $product->id) }}" 
                        class="mt-4 px-4 py-2 bg-pink-500 text-white text-sm rounded hover:bg-pink-600 inline-block">
                        See More
                     </a>
                  </div>
              </div>
          @endforeach
      </div>

      <div class="mt-8 text-center">
          <button onclick="window.location.href='{{ route('products.makeup') }}'" 
                class="px-6 py-3 bg-pink-500 text-white text-sm rounded hover:bg-pink-600">
            View All Makeup
        </button>

      </div>
  </div>
</section>
    
<section id="contact" class="py-12 bg-gradient-to-r from-indigo-500 to-blue-500">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-white mb-4 text-center">Contact Us</h2>
    <p class="text-white mb-8 text-center">We'd love to hear from you! Feel free to reach out with any questions or comments.</p>

    <!-- Alert -->
    @if(session('success'))
      <div class="bg-green-500 text-white p-4 rounded-lg mb-6 text-center">
        {{ session('success') }}
      </div>
    @endif

    <div class="flex justify-center">
      <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-3xl">
        <form action="{{ route('sendContactMessage') }}" method="POST">
          @csrf
          <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Your Name</label>
            <input type="text" id="name" name="name" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>

          <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold mb-2">Your Email</label>
            <input type="email" id="email" name="email" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>

          <div class="mb-4">
            <label for="message" class="block text-gray-700 font-semibold mb-2">Your Message</label>
            <textarea id="message" name="message" rows="5" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
          </div>

          <div class="text-center">
            <button type="submit" class="px-6 py-3 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">Send Message</button>
          </div>
        </form>
      </div>
    </div>

  
          <div class="mt-12 text-center">
              <p class="text-white">Or get in touch with us via social media:</p>
              <div class="flex justify-center space-x-6 mt-4">
                  <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-facebook-f text-2xl"></i></a>
                  <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-twitter text-2xl"></i></a>
                  <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-instagram text-2xl"></i></a>
                  <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-linkedin-in text-2xl"></i></a>
              </div>
          </div>
      </div>
  </section>
@endsection
