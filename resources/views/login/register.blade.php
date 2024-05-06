@extends('layouts.main')

@section('container')

<section class="bg-white">
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/5" style="background-image: url('/img/register.jpg')">
        </div>
        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full mt-24">
                <h1 class="text-2xl  font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                    Silahkan Registrasi
                </h1>

                <p class="mt-4 text-gray-500 dark:text-gray-400">
                   Pastikan Data yang dimasukan sesuai dengan ketentuan
                </p>

                <form action="{{ route('registration') }}" method="post" class="grid grid-cols-1 gap-5 mt-8 md:grid-cols-2">
                    @csrf
                    <div>
                        <label class="flex w-44 mb-2 text-sm text-gray-600 dark:text-gray-200">Name</label>
                        <input type="text" placeholder="John Lucky" class="block w-auto px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" name="name" id="name" />
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                        @enderror
                    </div>
                    <div>
                        <label class="flex w-44 mb-2 text-sm text-gray-600 dark:text-gray-200">Username</label>
                        <input type="text" placeholder="John" class="block w-auto px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" name="username" id="username" />
                        @error('username')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                        @enderror
                    </div>      

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email address</label>
                        <input type="email" placeholder="johnsnow@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" name="email" id="email" />
                        @error('email')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                    @enderror
                    </div>
                    <div>
                        <div>
                             {{-- label --}}
                            <label class="flex mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                            <input type="password" placeholder="Enter your password" class="flex w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" name="password" id="password"/>
                            @error('password')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                            @enderror
                           
                        </div>               
                    </div>
                    <div>
                        <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Option (otomatis di isi)</label>
                        <select id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option  value="{{ $category1  }}">{{ $lomba1 }} </option>
                        {{-- <option value="">{{ $lomba1 }}</option> --}}
                        </select>
                    </div>
                    
                    <div class="block mt-4">
                        <button
                        type="submit"
                        class="flex items-center justify-between w-lg px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        <span>Sign Up</span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    </div>
                    
                </form>

                <div class="mt-8 md:flex md:items-center">
                    <a href="/login" class="inline-block mt-4 text-center text-blue-500 md:mt-0 md:mx-6 hover:underline">
                         Sudah memiliki akun ? silahkan Login
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endSection