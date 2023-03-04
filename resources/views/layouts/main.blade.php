<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="/img/asset/logo.png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.min.js.css') }}" />
    <title>TechnoFair | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    
    

    <style>
      /* Sembunyikan box 2 dan 3 */
      /* #containcp, #containwk {
        display: none;
      } */
    </style>

    @vite('resources/css/app.css')
   
  </head>
  <body>
      
    @include('partials.navbar')
  
    @yield('container')

    @include('partials.footer')
     
    
    {{-- <link rel="stylesheet" href="{{ asset('resources/js/bootstrap.bundle.min.js') }}" /> --}}
    <script src="/js/script.js"></script>
    
    {{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

    <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbzF3QvjqxLvrATXWSDLR9cIa5WUd5c37CkoE9jL5MB1KOFi8j-T78QTDZurMp5FiXj8/exec'
      const form = document.forms['evaluation-web-form']
      const btnKirim = document.querySelector('.btn-kirim')
      const btnLoading = document.querySelector('.btn-loading')
      const myAlert = document.querySelector('.my-alert') 
    
      form.addEventListener('submit', e => {
        e.preventDefault()
        // ketika tombol submit di klik
        // tampilkan tombol loading, hilangkan tombol kirim

        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');

        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
          .then(response => {
            // ketika tombol submit di klik
            // hilangkan tombol loading, tampilkankan tombol kirim
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');
            myAlert.classList.toggle('d-none');

            // reset formnya
            form.reset();

            console.log('Success!', response);
          })
          .catch(error => console.error('Error!', error.message))
      })
    </script>

  </body>
</html>

{{-- pake packegae tailwind --}}
{{-- https://flowbite.com/docs/components/dropdowns/#content --}}


{{-- merubah localhost --}}
{{-- php -S localhost:9000 -t public/ --}}