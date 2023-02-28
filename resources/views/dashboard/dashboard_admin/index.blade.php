@extends('layouts.main_dashboard_admin')

@section('container')
    <div class="flex mt-8 items-center place-content-stretch ">
        <div class="w-1/4  lg:ml-28 lg:mr-14 sm:ml-16 sm:mr-2 p-6 bg-green-500 border border-gray-200 rounded-3xl shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h1 class="mb-2 text-2xl sm:text-xl font-bold tracking-tight text-white dark:text-gray-900">Competition</h1>
            </a>
            <p class="mb-3 text-3xl font-normal text-white dark:text-gray-400">2</p>
            <hr class="h-px my-8 bg-gray-900 border-0 dark:bg-gray-700">
           
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="sm: w-full text-gray-900 bg-gray-100 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Selengkapnya<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <h6 class="block px-4 py-2 text-xl text-bold hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Capture The Flag</h6>
                    <p class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">1 Tim</p>
                    
                </li>
                <li>
                    <h6 class="block px-4 py-2 text-xl text-bold hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Competitive Programming</h6>
                    <p class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">1 Tim</p>
                    
                </li>
                </ul>
            </div>

        </div>
        <div class="w-1/4 lg:mx-14 sm:mx-2 p-6 bg-yellow-500 border border-gray-200 rounded-3xl shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h1 class="mb-2 text-2xl sm:text-xl font-bold tracking-tight text-white dark:text-gray-900">Webinar</h1>
            </a>
            <p class="mb-3 text-3xl font-normal text-white dark:text-gray-400">0</p>
            <hr class="h-px my-8 bg-gray-900 border-0 dark:bg-gray-700">

            <button id="dropdownDefaultButton1" data-dropdown-toggle="dropdown1" class="sm:w-full text-gray-900 bg-gray-100 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Selengkapnya<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton1">
                    <li>
                        <h6 class="block px-4 py-2 text-xl text-bold hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Data Science</h6>
                        <p class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">1 Tim</p>
                    </li>
                    <li>
                        <h6 class="block px-4 py-2 text-xl text-bold hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">UI UX</h6>
                        <p class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">1 Tim</p>
                    </li>
                    </ul>
            </div>
        </div>
    
        <div class="w-1/4 lg:mx-14 sm:mx-2 p-6 bg-blue-800 border border-gray-200 rounded-3xl shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h1 class="mb-2 text-2xl sm:text-xl font-bold tracking-tight text-white dark:text-gray-900">Workshop</h1>
            </a>
            <p class="mb-3 text-3xl font-normal text-white dark:text-gray-400">1</p>
            <hr class="h-px my-8 bg-gray-900 border-0 dark:bg-gray-700">
            <button id="dropdownDefaultButton2" data-dropdown-toggle="dropdown2" class="sm:w-full text-gray-900 bg-gray-100 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring--300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Selengkapnya<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton2">
                    <li>
                        <h6 class="block px-4 py-2 text-xl text-bold hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Product Design </h6>
                        <p class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">1 Peserta</p>
                        
                    </li>
                    <li>
                        <h6 class="block px-4 py-2 text-xl text-bold hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sofware Engineer</h6>
                        <p class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">1 Peserta</p>
                    </li>
                    
                    </ul>
            </div>
        </div>
    </div>
   
     
    <div class="flex mt-8 items-center place-content-stretch ">
        <div class="w-1/2  mx-14 p-6 bg-green-500 border border-gray-200 rounded-3xl shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h1 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-gray-900">Status Pendaftaran</h1>
            </a>
            <button type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-2xl sm:text-xl px-6 py-3 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Open Registrasi</button>
            <hr class="h-px my-4 bg-gray-900 border-0 dark:bg-gray-700">
            <button id="dropdownDefaultButton3" data-dropdown-toggle="dropdown3" class="text-gray-900 bg-gray-100 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Pilih Status Pendaftaran<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton3">
                <li>
                    <p class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Open Registrasi</p>
                </li>
                <li>
                    <p class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Close Registrasi</p>
                </li>
                <li>
                    <p class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pengumumman Finalis</p>
                </li>
               
                </ul>
            </div>
        </div>
        <div class="w-2/5 mx-6 p-6 bg-yellow-500 border border-gray-200 rounded-3xl shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h1 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-gray-900">Eksport Excel</h1>
            </a>
            <hr class="h-px my-8 bg-gray-900 border-0 dark:bg-gray-700">

            <div class="lg:flex sm:block place-content-evenly">
                <button type="button" class="w-1/2 sm:w-full text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">Competiton</button>
                <button type="button" class="w-1/2 sm:w-full text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">Webinar</button>
                <button type="button" class="w-1/2 sm:w-full text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">Workshop</button>
            </div>
        </div>
    
     
    </div>
    <button type="button" class="w-1/5 md:w-1/6 md:h-1/4  text-red-700 mx-14 mt-12 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg sm:text-xl text-3xl px-5 py-2.5 text-center mr-2 mb-56 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Lupa Password</button>
   
            
     

    </div>
         
@endsection
