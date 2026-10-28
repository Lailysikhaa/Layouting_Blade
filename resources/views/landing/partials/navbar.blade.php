{{-- Header / Menubar. Menu aktif ditentukan dari route yang sedang dibuka (request()->routeIs) --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('landing.home') }}" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
        {{-- <img src="assets/landing/img/logo.png" alt="Logo"> (logo.png tidak ada di paket template) --}}
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="{{ route('landing.home') }}" class="nav-item nav-link {{ request()->routeIs('landing.home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('landing.about') }}" class="nav-item nav-link {{ request()->routeIs('landing.about') ? 'active' : '' }}">About</a>
            <a href="{{ route('landing.service') }}" class="nav-item nav-link {{ request()->routeIs('landing.service') ? 'active' : '' }}">Service</a>
            <a href="{{ route('landing.menu') }}" class="nav-item nav-link {{ request()->routeIs('landing.menu') ? 'active' : '' }}">Menu</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('landing.booking', 'landing.team') ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('landing.booking') }}" class="dropdown-item {{ request()->routeIs('landing.booking') ? 'active' : '' }}">Booking</a>
                    <a href="{{ route('landing.team') }}" class="dropdown-item {{ request()->routeIs('landing.team') ? 'active' : '' }}">Our Team</a>
                    <a href="#" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="#" class="nav-item nav-link">Contact</a>
        </div>
        <a href="{{ route('landing.booking') }}" class="btn btn-primary py-2 px-4">Book A Table</a>
    </div>
</nav>
