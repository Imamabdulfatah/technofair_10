@extends('layouts.main_dashboard_admin')

@section('container')
    <div class="mx-6 mt-8 mb-20">
        <h1 class="text-3xl mb-4 text-bold">{{ $title }}</h1>
        {{-- <div class="flex my-4">
            <button type="button" class="text-blue-700  hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-4 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Pending</button>
            <button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">All Accounts</button>
        </div> --}}
        
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                            Nama 
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Asal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Instansi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Handphone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alasan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                       
                    </tr>
                </thead>
                {{-- table 1 --}}
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Universitas Gunadarma
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            imam_keren
                        </td>
                        <td class="px-6 py-4">
                            0898728278
                        </td>
                        <td class="px-6 py-4">
                            0898907897897
                        </td>
                        <td class="px-6 py-4">
                           biar pinter
                        </td>
                        <td class="px-6 py-4">
                            imamabdul8875@gmail.com
                        </td>
                       
                    </tr>
                  
                </tbody>

           
            </table>
        </div>

    </div>
@endSection