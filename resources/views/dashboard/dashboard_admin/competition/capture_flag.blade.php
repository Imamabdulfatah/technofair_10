@extends('layouts.main_dashboard_admin')

@section('container')
<div class="mx-6 mt-8 mb-20">
    <h1 class="text-3xl text-bold">{{ $title }}</h1>
    <div class="flex my-4">
        <button id="pending" type="button" class="text-blue-700  hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-4 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Pending</button>
        <button id="all" type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">All Accounts</button>
    </div>
    
    <div id="table1" class="relative overflow-x-auto shadow-md sm:rounded-lg" >
        <div class="pb-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Instansi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Tim
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ketua
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ID Line
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No Hp
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pembayaran
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Berkas
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi Payment
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi Berkas
                    </th>
                </tr>
            </thead>
            {{-- table 1 --}}
            <tbody>
                @foreach($posts as $ketua)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $ketua["instansi"] }}
                    </th>
                    <td class="px-6 py-4">
                        <a class="text-blue-600 text-bold" href="/admin/detail-ctf/{{ $ketua["slug"] }}">{{ $ketua["nama_tim"] }}</a> 
                    </td>
                    <td class="px-6 py-4">
                        {{ $ketua["ketua"] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $ketua["id_line"] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $ketua["no_hp"] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $ketua["email"] }}
                    </td>
                    <td class="px-6 py-4">
                        <img src="" alt="Pembayaran">
                    </td>
                    <td class="px-6 py-4">
                        <img src="" alt="Pembayaran">
                    </td>
                    <td class="px-6 py-4">
                        
                        <button id="dropdownLeftButton" data-dropdown-toggle="dropdownLeft" data-dropdown-placement="left" class="mb-3 md:mb-0 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"><svg class="w-4 h-4 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Payment</button>

                        <!-- Dropdown menu -->
                        <div id="dropdownLeft" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLeftButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Approve</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reject</a>
                            </li>
                            
                            </ul>
                        </div>

                    </td>
                    <td class="px-6 py-4">
                        
                        <button id="dropdownLeftButton1" data-dropdown-toggle="dropdownLeft1" data-dropdown-placement="left" class="mb-3 md:mb-0 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"><svg class="w-4 h-4 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Berkas</button>

                        <!-- Dropdown menu -->
                        <div id="dropdownLeft1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLeftButton1">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Approve</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reject</a>
                            </li>
                            </ul>
                        </div>    
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>

    {{-- table 2 --}}
    <div id="table2" class="relative overflow-x-auto shadow-md sm:rounded-lg" >
        <div class="pb-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Tim
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Instansi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">
                        {{ $post["no"] }}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $post["instansi"] }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $post["nama_tim"] }}
                    </td>
                    <td class="px-6 py-4">
                        {{-- <img src="" alt="Pembayaran"> --}}
                        {{ $post["status"] }}
                    </td>
                    {{-- <td class="px-6 py-4">
                        <img src="" alt="Berkas">
                    </td> --}}
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>


@endSection