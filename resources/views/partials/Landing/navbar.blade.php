<!-- Navigation Bar -->
<nav id="navbar" class="navbar transparent py-5 px-6 flex justify-between items-center text-white">
    <div class="flex items-center">
      <h1 class="navbar-logo text-xl font-bold large">LavSkin</h1>
    </div>
  
    <!-- Menu List -->
    <ul id="menu" class="hidden md:flex space-x-6 relative">
      <li><a href="{{ route('landing.index')}}" class="navbar-text hover:text-blue-400 large">Beranda</a></li>
      <li class="dropdown">
        <a href="#" id="tentangKami" class="navbar-text hover:text-blue-400 large">Kategori</a>
        <div class="dropdown-menu">
          <a href="{{ route('products.skincare')}}">Skincare</a>
          <a href="{{ route('products.makeup')}}">Makeup</a>
          <a href="{{ route('products.bodycare')}}">BodyCare</a>
          <a href="{{ route('products.haircare')}}">HairCare</a>
        </div>
      </li>
      <li>
        <a href="{{ route('products.index') }}" class="navbar-text hover:text-blue-400 large">Produk</a>
    </li>    
      <li><a href="{{ route('about') }}" class="navbar-text hover:text-blue-400 large">About Us</a></li>
    </ul>
    <button 
    class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-white text-sm hidden md:block"
    onclick="window.location.href='{{ route('login') }}'"
>
    LOGIN
</button>

  
    <!-- Hamburger Button -->
    <button id="hamburger" class="md:hidden flex items-center text-white focus:outline-none">
      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
      </svg>
    </button>
  </nav>
  
  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden flex flex-col bg-gray-800 text-white py-4 px-6 fixed left-0 w-full z-10">
    <a href="{{ route('landing.index')}}" class="py-2 border-b border-gray-600">Beranda</a>
    <div class="py-2 border-b border-gray-600 relative">
      <a href="#" id="mobileTentangKami" class="block">Kategori</a>
      <div class="dropdown-menu absolute left-0 w-full bg-gray-700 hidden">
        <a href="{{ route('products.skincare')}}" class="block px-4 py-2">Skincare</a>
        <a href="{{ route('products.makeup')}}" class="block px-4 py-2">Makeup</a>
        <a href="{{ route('products.bodycare')}}" class="block px-4 py-2">BodyCare</a>
        <a href="{{ route('products.haircare')}}" class="block px-4 py-2">HairCare</a>
      </div>
    </div>
    <a href="{{ route('products.index') }}" class="py-2 border-b border-gray-600">Produk</a>
    <a href="{{ route('about') }}" class="py-2 border-b border-gray-600">About Us</a>
    <button
    class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-white text-sm mt-4"
    onclick="window.location.href='{{ route('login') }}'">
    LOGIN
</button>

  </div>