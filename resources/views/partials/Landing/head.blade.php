<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LavSkin')</title>
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