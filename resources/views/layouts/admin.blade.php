{{--
    ====================================================================
    LAYOUT UTAMA ADMIN (template Upcube)
    ====================================================================
    Dipakai oleh 6 halaman:
      dashboard, calendar, form-elements, tables-datatable, sweet-alert, login

    Section / stack yang disediakan untuk view anak:
      @section('title')              -> judul halaman (tag <title> + page title)
      @section('breadcrumb_parent')  -> induk breadcrumb
      @section('content')            -> isi utama halaman
      @push('styles')                -> CSS tambahan khusus halaman
      @push('scripts')               -> JS tambahan khusus halaman
      @section('auth', 'true')       -> mode halaman auth (tanpa topbar, sidebar, footer)
--}}
<!doctype html>
<html lang="en">

<head>
    {{-- HEAD --}}
    @include('admin.partials.head')
</head>

@hasSection('auth')
<body class="auth-body-bg">
@else
<body data-topbar="dark">
@endif

    @hasSection('auth')
        {{-- MODE AUTH: hanya konten (halaman login), tanpa topbar/sidebar/footer --}}
        @yield('content')
    @else
        {{-- Begin page --}}
        <div id="layout-wrapper">

            {{-- HEADER / MENUBAR ATAS --}}
            @include('admin.partials.header')

            {{-- MENUBAR KIRI (SIDEBAR) --}}
            @include('admin.partials.sidebar')

            {{-- Start right Content here --}}
            <div class="main-content">

                {{-- MAIN CONTENT --}}
                <div class="page-content">
                    <div class="container-fluid">

                        @include('admin.partials.page-title')

                        @yield('content')

                    </div>
                    {{-- container-fluid --}}
                </div>
                {{-- End Page-content --}}

                {{-- FOOTER --}}
                @include('admin.partials.footer')

            </div>
            {{-- end main content --}}

        </div>
        {{-- END layout-wrapper --}}

        {{-- Panel Settings kanan --}}
        @include('admin.partials.right-sidebar')
    @endif

    {{-- SCRIPTS --}}
    @include('admin.partials.scripts')

</body>

</html>
