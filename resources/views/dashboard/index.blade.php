@extends('layouts.main_dashboard')

@section('container')
                
    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
           <!-- Jumbotron -->
            <div 
                class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover rounded-lg"
                style="
                    /* background-image: assets('/img/asset/bg.png'); */
                    height: 800px;
                "
            >
            <div class="absolute bg-white top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed">
                <div class="flex justify-center items-center h-full">
                    <div class="text-white">     
                    <img class="w-72 ml-32 sm:ml-36" src="/img/logo/logo.png" alt="logo">
                    <h1 class="font-semibold text-slate-800 text-5xl mb-4">Welcome to TechnoFair 10.0</h1>
                    <h1 class="font-semibold text-slate-800 text-5xl mb-4">Dashboard</h1>
                    <h4 class="font-semibold text-slate-800 text-xl mb-6">*Silahkan lengkapi data pada tab Tim Saya, Pembayaran & Berkas</h4>
                    <a
                        class="inline-block px-7 py-3 mb-1 border-2 bg-blue-600 border-blue-700 text-white font-medium text-sm leading-snug uppercase rounded-full hover:bg-blue-900 hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                        href="/dashboard/template/"
                        role="button"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                        >Template Berkas</a
                    >
                    </div>
                </div>
            </div>
        </div>
            <!-- Jumbotron -->
@endsection
