<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LavSkin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- Tailwind CSS Customization -->
<style>
  /* Navbar styles */
  .navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 10;
    transition: all 0.3s ease;
  }

  .navbar.transparent {
    background-color: transparent;
    box-shadow: none;
  }

  .navbar.scrolled {
    background-color: #00194e;
    padding: 10px 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .navbar-logo-img {
    transition: all 0.3s ease;
  }

  .navbar-logo-img.large {
    width: 3rem;
    height: 3rem;
  }

  .navbar-logo-img.small {
    width: 2.5rem;
    height: 2.5rem;
  }

  .navbar-text {
    transition: all 0.3s ease;
  }

  .navbar-text.large {
    font-size: 1.25rem;
  }

  .navbar-text.small {
    font-size: 1rem;
  }

  /* Dropdown Menu */
  .dropdown-menu {
    display: none;
    position: absolute;
    background-color: rgba(18, 34, 66, 0.9);
    color: white;
    z-index: 20;
    border-radius: 0.5rem;
    padding: 0.5rem 0;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  }

  .dropdown-menu a {
    display: block;
    padding: 0.5rem 1rem;
    text-decoration: none;
    color: white;
  }

  .dropdown-menu a:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }

  .dropdown.active .dropdown-menu {
    display: block;
  }
/* Mobile dropdown-menu styling */
#mobile-menu .dropdown-menu {
  z-index: 20; /* Tambahkan z-index yang lebih tinggi */
}

#mobile-menu .dropdown-menu.hidden {
  display: none;
}

#mobile-menu .dropdown-menu:not(.hidden) {
  display: block;
}
    
  /* Hero section */
  .hero {
      height: 100vh;
      position: relative;
      overflow: hidden;
    }

    .hero-images {
      display: flex;
      transition: transform 1s ease-in-out;
    }

    .hero-image {
      min-width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
    }

    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: 1;
    }

    .hero-content {
      position: absolute;
      z-index: 2;
      color: white;
      text-align: center;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

  /* Logo section */
  #logo-section {
    z-index: 8;
    visibility: hidden;
  }

  /* Mobile menu */
  #mobile-menu {
    position: fixed;
    left: 0;
    width: 100%;
    z-index: 5;
    top: 4.5rem; /* Default top position when navbar is not scrolled */
  }
</style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

<!-- Navigation Bar -->
<nav id="navbar" class="navbar transparent py-5 px-6 flex justify-between items-center text-white">
  <div class="flex items-center">
    <h1 class="navbar-logo text-xl font-bold large">LavSkin</h1>
  </div>

  <!-- Menu List -->
  <ul id="menu" class="hidden md:flex space-x-6 relative">
    <li><a href="#" class="navbar-text hover:text-blue-400 large">Beranda</a></li>
    <li class="dropdown">
      <a href="#" id="tentangKami" class="navbar-text hover:text-blue-400 large">Kategori</a>
      <div class="dropdown-menu">
        <a href="#">Skincare</a>
        <a href="#">Makeup</a>
        <a href="#">BodyCare</a>
        <a href="#">HairCare</a>
      </div>
    </li>
    <li><a href="#" class="navbar-text hover:text-blue-400 large">Produk</a></li>
    <li><a href="#" class="navbar-text hover:text-blue-400 large">About Us</a></li>
  </ul>
  <button class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-white text-sm hidden md:block">LOGIN</button>

  <!-- Hamburger Button -->
  <button id="hamburger" class="md:hidden flex items-center text-white focus:outline-none">
    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
    </svg>
  </button>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden md:hidden flex flex-col bg-gray-800 text-white py-4 px-6 fixed left-0 w-full z-10">
  <a href="#" class="py-2 border-b border-gray-600">Beranda</a>
  <div class="py-2 border-b border-gray-600 relative">
    <a href="#" id="mobileTentangKami" class="block">Kategori</a>
    <div class="dropdown-menu absolute left-0 w-full bg-gray-700 hidden">
      <a href="#" class="block px-4 py-2">Skincare</a>
      <a href="#" class="block px-4 py-2">Makeup</a>
      <a href="#" class="block px-4 py-2">BodyCare</a>
      <a href="#" class="block px-4 py-2">HairCare</a>
    </div>
  </div>
  <a href="#" class="py-2 border-b border-gray-600">Produk</a>
  <a href="#" class="py-2 border-b border-gray-600">About Us</a>
  <button class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded text-white text-sm mt-4">LOGIN</button>
</div>

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

<section id="new-arrivals" class="py-12 bg-gray-100">
    <div class="container mx-auto px-4">
      <h2 class="text-4xl font-bold text-gray-800 mb-4 text-center">New Arrivals</h2>
      <p class="text-gray-600 mb-8 text-center">Discover our latest products curated just for you!</p>
  
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Product Card 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="https://d2jlkn4m127vak.cloudfront.net/medias/products/thumbnail-1721980255.webp" alt="Product Image" class="w-full h-64 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">Product Name 1</h3>
            <p class="text-gray-600">$25.00</p>
            <button class="mt-4 px-4 py-2 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">See More</button>
          </div>
        </div>
  
        <!-- Product Card 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="https://d2jlkn4m127vak.cloudfront.net/medias/products/thumbnail-1721980255.webp" alt="Product Image" class="w-full h-64 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">Product Name 2</h3>
            <p class="text-gray-600">$30.00</p>
            <button class="mt-4 px-4 py-2 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">See More</button>
          </div>
        </div>
  
        <!-- Product Card 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="https://d2jlkn4m127vak.cloudfront.net/medias/products/thumbnail-1721980481.webp" alt="Product Image" class="w-full h-64 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">Product Name 3</h3>
            <p class="text-gray-600">$20.00</p>
            <button class="mt-4 px-4 py-2 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">See More</button>
          </div>
        </div>
  
        <!-- Product Card 4 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="https://d2jlkn4m127vak.cloudfront.net/medias/products/thumbnail-1721980481.webp" alt="Product Image" class="w-full h-64 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">Product Name 4</h3>
            <p class="text-gray-600">$28.00</p>
            <button class="mt-4 px-4 py-2 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">See More</button>
          </div>
        </div>
      </div>
  
      <div class="mt-8 text-center">
        <button class="px-6 py-3 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">View All Products</button>
      </div>
    </div>
  </section>
  
  <section id="skincare" class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-4xl font-bold text-gray-800 mb-4 text-center">Skincare</h2>
      <p class="text-gray-600 mb-8 text-center">Pamper your skin with our specially curated skincare products!</p>
  
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Product Card 1 -->
        <div class="bg-gray-100 rounded-lg shadow-md overflow-hidden">
          <img src="https://d2jlkn4m127vak.cloudfront.net/medias/products/thumbnail-1721980481.webp" alt="Skincare Product 1" class="w-full h-64 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">Skincare Product 1</h3>
            <p class="text-gray-600">$18.00</p>
            <button class="mt-4 px-4 py-2 bg-green-500 text-white text-sm rounded hover:bg-green-600">See More</button>
          </div>
        </div>
  
        <!-- Product Card 2 -->
        <div class="bg-gray-100 rounded-lg shadow-md overflow-hidden">
          <img src="https://d2jlkn4m127vak.cloudfront.net/medias/products/thumbnail-1721980481.webp" alt="Skincare Product 2" class="w-full h-64 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">Skincare Product 2</h3>
            <p class="text-gray-600">$22.00</p>
            <button class="mt-4 px-4 py-2 bg-green-500 text-white text-sm rounded hover:bg-green-600">See More</button>
          </div>
        </div>
  
        <!-- Product Card 3 -->
        <div class="bg-gray-100 rounded-lg shadow-md overflow-hidden">
          <img src="https://d2jlkn4m127vak.cloudfront.net/medias/products/thumbnail-1721980481.webp" alt="Skincare Product 3" class="w-full h-64 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">Skincare Product 3</h3>
            <p class="text-gray-600">$20.00</p>
            <button class="mt-4 px-4 py-2 bg-green-500 text-white text-sm rounded hover:bg-green-600">See More</button>
          </div>
        </div>
  
        <!-- Product Card 4 -->
        <div class="bg-gray-100 rounded-lg shadow-md overflow-hidden">
          <img src="https://d2jlkn4m127vak.cloudfront.net/medias/products/thumbnail-1721980481.webp" alt="Skincare Product 4" class="w-full h-64 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">Skincare Product 4</h3>
            <p class="text-gray-600">$25.00</p>
            <button class="mt-4 px-4 py-2 bg-green-500 text-white text-sm rounded hover:bg-green-600">See More</button>
          </div>
        </div>
      </div>
  
      <div class="mt-8 text-center">
        <button class="px-6 py-3 bg-green-500 text-white text-sm rounded hover:bg-green-600">View All Skincare</button>
      </div>
    </div>
  </section>
  
  <section id="makeup" class="py-12 bg-gray-100">
    <div class="container mx-auto px-4">
      <h2 class="text-4xl font-bold text-gray-800 mb-4 text-center">Makeup</h2>
      <p class="text-gray-600 mb-8 text-center">Enhance your beauty with our premium makeup collection!</p>
  
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Product Card 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="https://d2jlkn4m127vak.cloudfront.net/medias/products/thumbnail-1721980481.webp" alt="Makeup Product 1" class="w-full h-64 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">Makeup Product 1</h3>
            <p class="text-gray-600">$15.00</p>
            <button class="mt-4 px-4 py-2 bg-pink-500 text-white text-sm rounded hover:bg-pink-600">See More</button>
          </div>
        </div>
  
        <!-- Product Card 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="https://d2jlkn4m127vak.cloudfront.net/medias/products/thumbnail-1721980481.webp" alt="Makeup Product 2" class="w-full h-64 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">Makeup Product 2</h3>
            <p class="text-gray-600">$28.00</p>
            <button class="mt-4 px-4 py-2 bg-pink-500 text-white text-sm rounded hover:bg-pink-600">See More</button>
          </div>
        </div>
  
        <!-- Product Card 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="https://d2jlkn4m127vak.cloudfront.net/medias/products/thumbnail-1721980481.webp" alt="Makeup Product 3" class="w-full h-64 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">Makeup Product 3</h3>
            <p class="text-gray-600">$32.00</p>
            <button class="mt-4 px-4 py-2 bg-pink-500 text-white text-sm rounded hover:bg-pink-600">See More</button>
          </div>
        </div>
  
        <!-- Product Card 4 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="https://d2jlkn4m127vak.cloudfront.net/medias/products/thumbnail-1721980481.webp" alt="Makeup Product 4" class="w-full h-64 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">Makeup Product 4</h3>
            <p class="text-gray-600">$18.00</p>
            <button class="mt-4 px-4 py-2 bg-pink-500 text-white text-sm rounded hover:bg-pink-600">See More</button>
          </div>
        </div>
      </div>
  
      <div class="mt-8 text-center">
        <button class="px-6 py-3 bg-pink-500 text-white text-sm rounded hover:bg-pink-600">View All Makeup</button>
      </div>
    </div>
  </section>
  
  <section id="contact" class="py-12 bg-gradient-to-r from-indigo-500 to-blue-500">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-white mb-4 text-center">Contact Us</h2>
        <p class="text-white mb-8 text-center">We'd love to hear from you! Feel free to reach out with any questions or comments.</p>

        <div class="flex justify-center">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-3xl">
                <form action="#" method="POST">
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

<footer class="bg-[#00194e] text-white py-6">
    <div class="container mx-auto px-4 text-center">
        <p class="text-lg font-semibold">LavSkin</p>
        <p class="text-sm mt-2">Providing quality skincare for all your needs.</p>
        <p class="text-sm mt-4">&copy; 2025 LavSkin. All rights reserved.</p>
    </div>
</footer>

  

  <script>
    window.onscroll = function() {
      const navbar = document.getElementById("navbar");
      const logo = document.querySelector(".navbar-logo-img");
      const navbarText = document.querySelectorAll(".navbar-text");
      const mobileMenu = document.getElementById("mobile-menu");
  
      // Scroll-based navbar effects
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navbar.classList.remove("transparent");
        navbar.classList.add("scrolled");
        logo.classList.remove("large");
        logo.classList.add("small");
        navbarText.forEach((text) => {
          text.classList.remove("large");
          text.classList.add("small");
        });
  
        // Adjust mobile menu top position dynamically when navbar is small
        mobileMenu.style.top = `${navbar.offsetHeight}px`;
      } else {
        navbar.classList.remove("scrolled");
        navbar.classList.add("transparent");
        logo.classList.remove("small");
        logo.classList.add("large");
        navbarText.forEach((text) => {
          text.classList.remove("small");
          text.classList.add("large");
        });
  
        // Reset mobile menu top position to default when navbar is large
        mobileMenu.style.top = `4.5rem`; // Default top when navbar is not scrolled
      }
    };
  
    // Hamburger Menu Toggle
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    
    hamburger.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });




     ScrollReveal().reveal('#logo-section', {
      duration: 1000,
      origin: 'bottom',
      distance: '50px',
      delay: 200,
      opacity: 0,
      easing: 'ease-in-out',
      reset: false
    });
  </script>
   <script>
    const images = document.getElementById('hero-images');
    const totalImages = images.children.length;
    let currentIndex = 0;

    setInterval(() => {
      currentIndex = (currentIndex + 1) % totalImages;
      images.style.transform = `translateX(-${currentIndex * 100}%)`;
    }, 4000);
  </script>
  <script>
    document.getElementById('tentangKami').addEventListener('click', function(e) {
      e.preventDefault();
      const parent = this.parentElement;
      parent.classList.toggle('active');
    });
  
    document.getElementById('mobileTentangKami').addEventListener('click', function(e) {
      e.preventDefault();
      const dropdown = this.nextElementSibling;
      dropdown.classList.toggle('hidden');
    });
  </script>
</body>
</html>