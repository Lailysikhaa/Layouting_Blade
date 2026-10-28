{{-- SCRIPTS: JS inti -> JS khusus halaman (@push('scripts')) -> app.js --}}
<!-- JAVASCRIPT -->
<script src="{{ asset('assets/admin/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/node-waves/waves.min.js') }}"></script>

{{-- JS khusus halaman --}}
@stack('scripts')

{{-- URL dasar aset: dipakai app.js saat berpindah tema (RTL/Dark) agar path CSS benar di Laravel --}}
<script>window.UPCUBE_ASSET_URL = "{{ asset('assets/admin') }}";</script>

<!-- App js -->
<script src="{{ asset('assets/admin/js/app.js') }}"></script>
