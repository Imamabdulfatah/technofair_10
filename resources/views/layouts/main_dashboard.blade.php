<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    
    <link rel="shortcut icon" href="/asset/logo_t.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/bootstrap.css" />
    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/assets/css/app.css" />
    <link rel="stylesheet" href="/assets/vendors/chartjs/Chart.min.css" />
    <link rel="stylesheet" href="/assets/vendors/quill/quill.snow.css" />
    <link rel="stylesheet" href="/assets/vendors/quill/quill.bubble.css" />

    <style>
        .hidden {
            display: none;
        }
    </style>
    
</head>
<body>
    @if ($sidebar === "sidebar")
        @include('partials.sidebar')
    @else
        @include('partials.sidebar_admin')
    @endif
  

    @yield('container')

    @include('partials.footer_dashboard')

    <script src="/assets/js/feather-icons/feather.min.js"></script>
    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/js/pages/dashboard.js"></script>
    <script src="/assets/js/main.js"></script>

    <script src="/assets/vendors/quill/quill.min.js"></script>
    <script src="/assets/js/pages/form-editor.js"></script>
    <script src="/js/script.js"></script>
    <script src="js/script_dashboard.js"></script>
    <script src="js/label.js"></script>
    
</body>
</html>
