@extends('layouts.main')
@section('container')

<main>
    {{-- sectian about dan goals --}}
    <section class="pb-20 bg-gray-300 dark:bg-slate-800">
        {{-- about dan 3 box --}}
        <div class="container mx-auto px-4">
            <div class="mb-8 pt-32">
            </div>
            <div id="about"  class="flex flex-wrap items-center">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                <div class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                <i class="fas fa-user-friends text-xl"></i>
            </div>
                    <h3 class="text-3xl mb-2 font-semibold leading-normal">
                    {{ $title }}
                    </h3>
                    <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                      {{ $deskripsi }}
                    </p>
                    
                    <h3 class="text-3xl mb-2 font-semibold leading-normal">
                        Benefits
                        </h3>
                    <ul class="max-w-md space-y-1 text-gray-500 list-inside">
                        <li class="flex items-center text-2xl">
                            <svg class="mr-1.5 text-green-500 flex-shrink-0" width="20" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/200/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            E-Certificate
                        </li>
                        <li class="flex items-center text-2xl">
                            <svg class="mr-1.5 text-green-500 flex-shrink-0" width="20" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Ilmu Bermanfaat
                        </li>
                        <li class="flex items-center text-2xl">
                            <svg class="mr-1.5 text-green-500 flex-shrink-0" width="20" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Doorprize
                        </li>
                    </ul>
            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                <div
                class="relative flex flex-col min-w-0 break-words bg-gray w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                <img alt="big data" src="{{ $image }}" class="w-full align-middle rounded-t-lg"/>
                <blockquote class="relative p-8 mb-4">
                    <svg
                    preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 583 95"
                    class="absolute left-0 w-full block"
                    style="height: 95px; top: -94px;"
                    >
                    <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current"></polygon>
                    </svg>
                    <h4 class="text-xl font-bold text-white">Contact Person :</h4>
                    <p class="text-md font-light mt-2 text-white">
                        <i class="flex fab fa-whatsapp"><span class="mx-2">{{ $contact1 }} </span></i>
                    </p>
                  

                   
                </blockquote>
                <div class="mb-4 mx-auto">
                  @foreach ($openclose as $oc)
                    @if ($oc->status === "open")
                        @auth
                         <a href="/dashboard" class="text-white mb-24 w-full  bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center mr-2">My Dashboard</a>
                          
                        @else  
                          <a href="/registration/seminar" class="text-white mb-24 w-full  bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center mr-2">Register Now !</a>
                        @endauth
                    @else
                      <a class="text-white mb-24 w-full  bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center mr-2">Pendaftaran Tutup</a>
                    @endif
                @endforeach
                 
                </div>
                </div>
               
                
            </div>
            </div>
        </div>
        </section>
        <section class="relative py-20">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden"  xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"  version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>

            {{-- waktu tempat --}}
            <div class="flex w-full flex-wrap justify-evenly px-2 xl:mx-auto mb-10 xl:w-10/12">  
                <div class="w-80 p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <img src="https://img.icons8.com/ios-filled/50/null/timer.png"/>
                    <a>
                        <h5 class="mb-12 text-2xl font-semibold tracking-tight text-gray-900">Waktu dan Tanggal</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500">{{ $tanggal }}</p>
                </div>
                <div class="w-80 p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <img src="https://img.icons8.com/ios-filled/50/null/marker.png"/>
                    <a href="{{ $lokasi1 }}">
                        <h5 class="mb-12 text-2xl font-semibold tracking-tight text-gray-900">Tempat</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500">{{ $tempat }}</p>
                    <a href="{{ $lokasi1 }}" class="{{ $lokasi2 }} text-white  w-100 sm:mt-5  bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center mr-2 mb-2">Lokasi</a>
                </div>   
                <div class="w-80 p-6 bg-white border border-gray-200 rounded-lg shadow">
                  <img src="https://img.icons8.com/ios-filled/50/null/ticket.png"/>
                  <a>
                      <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Harga Tiket</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-500">{{ $tiket1 }}</p>
                  <p class="mb-3 font-normal text-gray-500">{{ $tiket2 }}</p>
                  <p class="mb-3 font-normal text-gray-500">{{ $tiket3 }}</p>
              </div>
            </div>
        </div>
    </section>
    {{-- endSection about dan goals --}}

    {{-- Section pembicara --}}
    <section class="pt-15 pb-48">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center text-center mb-24">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold">SPEAKERS</h2>
            </div>
          </div>
          <div class="flex flex-wrap place-content-center">
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-12">
                <img alt="Pembicara 1" src="{{ $pembicara1 }}" class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 240px;"/>
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">{{ $nama_pembicara1 }}</h5>
                  <p class="mt-1 text-xl text-gray-500 uppercase font-semibold">
                    {{ $ket_pembicara1 }}
                  </p>
                  <div class="mt-6">
                    <button class="bg-black text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"type="button">
                    </button>
                    <button class="bg-black text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button"> 
                    </button>
                    <button class="bg-black text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="{{ $img2 }} w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img alt="Pembicara 2"  src="{{ $pembicara2 }}" class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 240px;"/>
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">{{ $nama_pembicara2 }}</h5>
                  <p class="mt-1 text-xl text-gray-500 uppercase font-semibold">
                   {{ $ket_pembicara2 }}
                  </p>
                  <div class="mt-6">
                    <button class="bg-black text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"type="button">
                    </button>
                    <button class="bg-black text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                    </button>
                    <button class="bg-black text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    {{-- endSection pembicara --}}
</main>
 @endsection