<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="/asset/logo_t.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/navbar.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TechnoFair | {{ $title }}</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    <style>
      /* Custom styles for fixed navbar */
      @media (min-width: 640px) {
        .fixed-navbar {
          position: fixed;
          top: 0;
          left: 0;
          right: 0;
          z-index: 999;
        }
        .fixed-navbar + .content {
          padding-top: 64px; /* Adjust this value to match the navbar height */
        }
      }

      .loading-container {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
      }

      .loading-spinner {
        border-top-color: #1a202c;
        border-right-color: transparent;
        border-bottom-color: transparent;
        border-left-color: transparent;
        animation: spin 1s infinite linear;
      }

      @keyframes spin {
        to {
          transform: rotate(360deg);
        }
      }
    </style>
    
  </head>
  <body>
    <div class="loading-container">
      <div class="w-16 h-16 border-4 border-gray-300 rounded-full loading-spinner"></div>
    </div>
    @if ($navbar === "index" || $navbar === "event")
      @include('partials.navbar')
    @else
        
    @endif

    @yield('container')

    @if ($active === "login" || $active === "register" || $active === "option")
        
    @else
      @include('partials.footer')
    @endif

    <script>
      window.addEventListener("DOMContentLoaded", () => {
        const loadingContainer = document.querySelector(".loading-container");

        setTimeout(() => {
          loadingContainer.style.display = "none";
        }, 1000); // Ganti nilai 2000 (ms) menjadi durasi loading yang diinginkan
      });
      // JavaScript code to handle menu toggle
      const menuToggle = document.getElementById('menu-toggle');
      const mobileMenu = document.getElementById('mobile-menu');
  
      menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });
    </script>
   
    <script src="/js/connectSheet.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
  </body>
</html>
