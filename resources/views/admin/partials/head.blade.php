{{-- HEAD: meta, favicon, CSS inti, dan CSS tambahan per halaman (@push('styles')) --}}
<meta charset="utf-8" />
<title>@yield('title') | Upcube - Admin & Dashboard Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesdesign" name="author" />

<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.ico') }}">

{{-- CSS khusus halaman (diletakkan sebelum CSS inti, sama seperti urutan di template asli) --}}
@stack('styles')

<!-- Bootstrap Css -->
<link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ asset('assets/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ asset('assets/admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
