{{--
    ====================================================================
    LAYOUT UTAMA LANDING PAGE (template Restoran)
    ====================================================================
    Dipakai oleh 6 halaman:
      home, about, service, menu, booking, team

    Section / stack yang disediakan untuk view anak:
      @section('title')    -> judul tab browser
      @section('hero')     -> area hero di bawah navbar (header halaman)
      @section('content')  -> isi utama halaman
      @push('styles')      -> CSS tambahan khusus halaman
      @push('scripts')     -> JS tambahan khusus halaman
--}}
<!DOCTYPE html>
<html lang="en">

<head>
    {{-- HEAD --}}
    @include('landing.partials.head')
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">

            {{-- HEADER / MENUBAR --}}
            @include('landing.partials.navbar')

            {{-- HERO: diisi tiap halaman --}}
            @yield('hero')

        </div>
        <!-- Navbar & Hero End -->

        {{-- MAIN CONTENT --}}
        @yield('content')

        {{-- FOOTER --}}
        @include('landing.partials.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    {{-- SCRIPTS --}}
    @include('landing.partials.scripts')
</body>

</html>
