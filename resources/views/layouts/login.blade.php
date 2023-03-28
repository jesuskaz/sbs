<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href={{ asset("assets/assets/css/app.min.css")}}>
    <link rel="stylesheet" href={{ asset("assets/assets/bundles/summernote/summernote-bs4.css")}}>
    <link rel="stylesheet" href={{ asset("assets/assets/bundles/codemirror/lib/codemirror.css")}}>
    <link rel="stylesheet" href={{ asset("assets/assets/bundles/codemirror/theme/duotone-dark.css")}}>
    <link rel="stylesheet" href={{ asset("assets/assets/bundles/bootstrap-social/bootstrap-social.css")}}>
    <!-- Template CSS -->
    <link rel="stylesheet" href={{ asset("assets/assets/css/style.css")}}>
    <link rel="stylesheet" href={{ asset("assets/assets/css/components.css")}}>
    <!-- Custom style CSS -->
    <link rel="stylesheet" href={{ asset("assets/assets/css/custom.css")}}>
    <link rel='shortcut icon' type='image/x-icon' href={{ asset('assets/assets/img/favicon.ico')}} />
</head>

<body>
 <div class="loader"></div>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src={{ asset("assets/assets/js/app.min.js")}}></script>
<!-- JS Libraies -->
<script src={{ asset("assets/assets/bundles/summernote/summernote-bs4.js")}}></script>
<script src={{ asset("assets/assets/bundles/codemirror/lib/codemirror.js")}}></script>
<script src={{ asset("assets/assets/bundles/codemirror/mode/javascript/javascript.js")}}></script>
<script src={{ asset("assets/assets/bundles/ckeditor/ckeditor.js")}}></script>
<!-- Page Specific JS File -->
<script src={{ asset("assets/assets/js/page/ckeditor.js")}}></script>
<!-- Template JS File -->
<script src={{ asset("assets/assets/js/scripts.js")}}></script>
<!-- Custom JS File -->
<script src={{ asset("assets/assets/js/custom.js")}}></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>

