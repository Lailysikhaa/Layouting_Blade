# UTS Pemrograman Berbasis Framework — Layouting Blade (Admin Upcube + Landing Restoran)

Paket ini adalah **file-file yang ditambahkan ke proyek Laravel** (struktur foldernya sama dengan Laravel),
bukan seluruh proyek. `vendor/`, `.env`, dsb. dibuat oleh Laravel sendiri.

## Cara memasang

```bash
composer create-project laravel/laravel uts-framework      # proyek Laravel baru (atau pakai proyek yang sudah ada)
# salin isi paket ini (app/, public/, resources/, routes/) ke dalam folder uts-framework/
#   -> routes/web.php akan TERTIMPA (route bawaan 'welcome' diganti route tugas ini)
cd uts-framework
php artisan serve
```

## URL

| Template | URL | Route name | Controller@method | View |
|---|---|---|---|---|
| Landing | `/` | `landing.home` | `Landing\HomeController@index` | `landing/home` |
| Landing | `/about` | `landing.about` | `Landing\AboutController@index` | `landing/about` |
| Landing | `/service` | `landing.service` | `Landing\ServiceController@index` | `landing/service` |
| Landing | `/menu` | `landing.menu` | `Landing\MenuController@index` | `landing/menu` |
| Landing | `/booking` | `landing.booking` | `Landing\BookingController@index` | `landing/booking` |
| Landing | `/team` | `landing.team` | `Landing\TeamController@index` | `landing/team` |
| Admin | `/admin` | `admin.dashboard` | `Admin\DashboardController@index` | `admin/dashboard` |
| Admin | `/admin/calendar` | `admin.calendar` | `Admin\CalendarController@index` | `admin/calendar` |
| Admin | `/admin/form-elements` | `admin.form-elements` | `Admin\FormElementController@index` | `admin/form-elements` |
| Admin | `/admin/tables-datatable` | `admin.tables-datatable` | `Admin\DataTableController@index` | `admin/tables-datatable` |
| Admin | `/admin/sweet-alert` | `admin.sweet-alert` | `Admin\SweetAlertController@index` | `admin/sweet-alert` |
| Admin | `/admin/login` | `admin.login` | `Admin\LoginController@index` | `admin/login` |

## Struktur

```
app/Http/Controllers/
  Admin/    DashboardController, CalendarController, FormElementController,
            DataTableController, SweetAlertController, LoginController
  Landing/  HomeController, AboutController, ServiceController,
            MenuController, BookingController, TeamController
routes/web.php

resources/views/
  layouts/admin.blade.php            <- LAYOUT UTAMA ADMIN
  layouts/landing.blade.php          <- LAYOUT UTAMA LANDING
  admin/partials/    head, header, sidebar, page-title, footer, right-sidebar, scripts
  admin/             dashboard, calendar, form-elements, tables-datatable, sweet-alert, login
  landing/partials/  head, navbar, page-header, footer, scripts
  landing/           home, about, service, menu, booking, team

public/assets/admin/     <- folder assets/ template Upcube (apa adanya, kecuali patch app.js)
public/assets/landing/   <- css, js, img, lib template Restoran
```

## Isi layout utama

| Komponen | Layout Admin | Layout Landing |
|---|---|---|
| Head | `@include('admin.partials.head')` | `@include('landing.partials.head')` |
| Header / Menubar | `@include('admin.partials.header')` + `@include('admin.partials.sidebar')` | `@include('landing.partials.navbar')` |
| Main Content | `@yield('content')` | `@yield('content')` (+ `@yield('hero')`) |
| Footer | `@include('admin.partials.footer')` | `@include('landing.partials.footer')` |
| Scripts | `@include('admin.partials.scripts')` | `@include('landing.partials.scripts')` |

Hook untuk view anak: `@section('title')`, `@section('breadcrumb_parent')` (admin), `@section('hero')` (landing),
`@section('content')`, `@push('styles')`, `@push('scripts')`.
CSS/JS khusus tiap halaman (DataTables, FullCalendar, SweetAlert, ApexCharts, dst.) dimuat lewat `@push`
pada posisi yang sama dengan template aslinya, sehingga urutan CSS/JS tidak berubah.

## Penyesuaian dari template asli (disengaja)

1. **Lokasi aset `public/assets/admin` & `public/assets/landing`** (bukan `public/admin`): folder `public/admin`
   akan membuat URL `/admin` dilayani sebagai direktori statis oleh web server, bukan oleh Laravel.
2. **`public/assets/admin/js/app.js` dipatch** (4 tempat): path `assets/css/...-rtl.min.css` dan sejenisnya yang
   ditulis relatif kini memakai `window.UPCUBE_ASSET_URL` (diisi di `admin/partials/scripts.blade.php`).
   Tanpa patch ini, tombol tema RTL/Dark di panel Settings merusak CSS di URL Laravel.
3. **Halaman login memakai layout admin yang sama** dalam mode auth: `@section('auth', 'true')` menyembunyikan
   topbar, sidebar, dan footer. Form login masih statis (tombol Log In menuju dashboard), belum ada autentikasi.
4. **Link menu ke halaman template yang tidak disertakan** (di luar 6 file) diubah menjadi placeholder:
   `javascript: void(0);` pada Admin, `#` pada Landing (Testimonial, Contact).
5. Landing: menu aktif ditentukan dari route (`request()->routeIs`), judul tab per halaman, tombol
   "Book A Table" mengarah ke `/booking`, favicon memakai `public/favicon.ico` bawaan Laravel
   (template asli merujuk `img/favicon.ico` yang tidak ada di paket).
6. `<meta name="csrf-token">` ditambahkan di kedua head.
7. Path ganjil `datatables.net-select-bs4/css//select...` (dua slash) dinormalkan menjadi satu slash.
8. Halaman Admin/Landing masih bergantung pada CDN (Google Fonts, jQuery, Bootstrap 5 di Landing) seperti aslinya,
   jadi butuh koneksi internet.
