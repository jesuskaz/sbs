<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/bundles/prism/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/bundles/chocolat/dist/css/chocolat.css')}}">
    <link rel="stylesheet" href={{ asset("assets/assets/bundles/datatables/datatables.min.css")}}>
    <link rel="stylesheet" href={{ asset("assets/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css")}}>
    <link rel="stylesheet" href="{{ asset('assets/assets/bundles/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/bundles/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/bundles/codemirror/theme/duotone-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/bundles/jquery-selectric/selectric.css') }}">
    <link rel="stylesheet" href={{ asset("assets/assets/bundles/izitoast/css/iziToast.min.css")}}>
    <link rel="stylesheet" href="{{ asset('assets/assets/bundles/chocolat/dist/css/chocolat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/bundles/dropzonejs/dropzone.css') }}">
    <link href="{{ asset('assets/assets/bundles/lightgallery/dist/css/lightgallery.css') }}" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/custom.css') }}">
    {{-- <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('assets/assets/img/favicon.ico') }}' />
</head>

<body>
 <div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">

        <main>
            {{ $slot }}
        </main>

        @include('layouts.navigation')

        @include('layouts.sidebar')

    </div>
</div>

<!-- General JS Scripts -->
<script src="{{ asset('assets/assets/js/app.min.js') }}"></script>
<!-- JS Libraies -->
<script src="{{ asset('assets/assets/bundles/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}">
</script>
<script src="{{ asset('assets/bundles/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
<script src="{{ asset('assets/assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/assets/bundles/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('assets/assets/bundles/codemirror/lib/codemirror.js') }}"></script>
<script src="{{ asset('assets/assets/bundles/codemirror/mode/javascript/javascript.js') }}"></script>
<script src="{{ asset('assets/assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('assets/assets/bundles/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/assets/bundles/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
<script src="{{ asset('assets/assets/bundles/prism/prism.js') }}"></script>
<script src="{{ asset('assets/assets/bundles/izitoast/js/iziToast.min.js') }}"></script>
<script src="{{ asset('assets/assets/bundles/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/assets/bundles/dropzonejs/min/dropzone.min.js') }}"></script>
<script src="{{ asset('assets/assets/bundles/lightgallery/dist/js/lightgallery-all.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('assets/assets/js/page/sweetalert.js') }}"></script>
<script src="{{ asset('assets/assets/js/page/toastr.js') }}"></script>
<script src="{{ asset('assets/assets/js/page/portfolio.js') }}"></script>
<script src="{{ asset('assets/assets/js/page/datatables.js') }}"></script>
<script src="{{ asset('assets/assets/js/page/ckeditor.js') }}"></script>
<script src="{{ asset('assets/assets/js/page/multiple-upload.js') }}"></script>
<script src="{{ asset('assets/assets/js/page/light-gallery.js') }}"></script>
<!-- Template JS File -->
<script src="{{ asset('assets/assets/js/scripts.js') }}"></script>
<!-- Custom JS File -->
<script src="{{ asset('assets/assets/js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>


<!-- blog.html  21 Nov 2019 03:50:52 GMT -->

</html>
