<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LavSkin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- CRUD Kategori -->
    <li class="nav-item {{ request()->is('kategori*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kategori.index') }}">
            <i class="fas fa-fw fa-tags"></i> <!-- Ikon kategori -->
            <span>Kategori</span>
        </a>
    </li>
    <!-- CRUD Produk -->
    <li class="nav-item {{ request()->is('produk*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('produk.index') }}">
            <i class="fas fa-fw fa-box"></i> <!-- Ikon produk -->
            <span>Produk</span>
        </a>
    </li>
    <!-- CRUD Massage -->
    <li class="nav-item {{ request()->is('contactus*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('contactus.index') }}">
            <i class="fas fa-fw fa-envelope"></i> <!-- Ikon pesan -->
            <span>Massage</span>
        </a>
    </li>


    <!-- Add more menu items here -->
</ul>