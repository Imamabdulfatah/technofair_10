<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="/img/logo/logo.png"
    />
    <link rel="icon" type="image/png" href="/img/logo/logo.png" />
    <title>Technofair | {{ $title }}</title>
    <!--     Fonts and icons     -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
        rel="stylesheet"
    />
    <!-- Font Awesome Icons -->
    <script
        src="https://kit.fontawesome.com/42d5adcbca.js"
        crossorigin="anonymous"
    ></script>
    <!-- Nucleo Icons -->
    <link href="/css_dashboard/nucleo-icons.css" rel="stylesheet" />
    <link href="/css_dashboard/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link
        href="/css_dashboard/soft-ui-dashboard-tailwind.css?v=1.0.4"
        rel="stylesheet"
    />

    @vite('resources/css/app.css')
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
   @include('partials/sidebar')
        @yield('container')
    @include('partials/footer_dashboard')
</body>

<script src="/js/script_db.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
{{-- icon awesome --}}
<script src="https://kit.fontawesome.com/46b612ab28.js" crossorigin="anonymous"></script>
<!-- plugin for charts  -->
<script src="/js_dashboard/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="/js_dashboard/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script
    src="/js_dashboard/soft-ui-dashboard-tailwind.js?v=1.0.4"
    async
></script>
</html>
