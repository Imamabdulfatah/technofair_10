@extends('layouts.main')

@section('container')

<main>
    {{-- sectian about dan goals --}}
    <section class="pb-20 bg-gray-300 dark:bg-slate-800">
        <div class="container  mx-auto px-4">
            <div class="mb-32 pt-32">      
            </div>
            <div id="about"  class="flex flex-wrap items-center -mt-20">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                <div class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                <i class="fas fa-user-friends text-xl"></i>
            </div>
                <h3 class="text-3xl mb-2 font-semibold leading-normal">{{ $title }}</h3>
                <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">{{ $deskripsi }} </p>
                <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/img/hadiah.png" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl  tracking-tight text-gray-900">TOTAL HADIAH</h5>
                        <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">" JUTAAN RUPIAH "</h4>
                        <h5 class="mb-2 text-2xl  tracking-tight text-gray-900">E-Certificate +
                            DewaCloud Credits</h5>
                    </div>
                </a>
            </div>
            <div class="w-full md:w-4/12 px-4 mt-8 mr-auto ml-auto">
                <div class="relative flex flex-col min-w-0 break-words bg-gray w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                <img  alt="kado" src="{{ $image }}" class="w-full align-middle rounded-t-lg"/>
                <blockquote class="relative p-8 mb-4">
                    <svg
                    preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 583 95"
                    class="absolute left-0 w-full block"
                    style="height: 95px; top: -94px;"
                    >
                    <polygon
                        points="-30,95 583,95 583,65"
                        class="text-pink-600 fill-current"
                    ></polygon>
                    </svg>
                    <h4 class="text-xl font-bold text-white">Contact Person :</h4>
                    <p class="text-md font-light mt-2 text-white">
                        <i class="flex fab fa-whatsapp"><span class="mx-2">087789086181  |  Annisa
                        </span></i>
                    </p>
                    <p class="text-md font-light mt-2 text-white">
                        <i class="flex fab fa-whatsapp"><span class="mx-2">081383775460  |  Farhan</span></i>
                    </p>
                    </blockquote>
                    <div class="container flex  mx-auto">
                       
                        @foreach ($openclose as $oc)
                        <div class="mx-auto">
                            @if ($oc->status === "open")
                                @auth
                                <a class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-xl px-5 py-3 text-center mb-4" href="/dashboard">My Dashboard</a>
                                
                                @else  
                                <a type="button" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-xl px-5 py-3 text-center mb-4" href="/registration/competition">Daftar</a>
                                @endauth
                            @else
                            <a class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-bold rounded-lg text-md px-4 py-4 text-center">Pendaftaran Tutup</a>
                            @endif
                        </div>
                        <div class="mx-auto {{ ($oc->status === "open") ? '' : 'd-none' }}">
                             <a href="/pdf/RULEBOOK-INFOGRAPHIC-TF.pdf" download="RULE BOOK INFOGRAFIC TF" class="flex text-white  bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-xl px-4 py-3 text-center mb-4"><img src="https://img.icons8.com/ios/25/null/downloads.png" width="30" height="20"/>Rule Book</a>
                        </div>
                        @endforeach
                        
                    </div> 
                </div>
            </div>
            </div>
        </div>
    </section>
    <section class="relative py-20">
        {{-- waktu tempat --}}
        <div class="flex w-full flex-wrap justify-evenly px-2 xl:mx-auto mb-10 xl:w-10/12">  
            <div class="w-80 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img src="https://img.icons8.com/ios-filled/50/null/timer.png"/>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Waktu dan Tanggal</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500">09.00 - Selesai  |  29 Mei 2022</p>
            </div>
            <div class="w-80 p-6 bg-white border border-gray-200 rounded-lg shadow">
                <img src="https://img.icons8.com/ios-filled/50/null/marker.png"/>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Tempat</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500">Zoom Clouds Meetings & Discord</p>
            </div>   
            <div class="w-80 p-6 bg-white border border-gray-200 rounded-lg shadow">
                <img src="https://img.icons8.com/ios-filled/50/null/ticket.png"/>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Harga Tiket</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500">Rp. 50.000/Tim</p>
            </div>
        </div>
        </div>
    </section>
    {{-- endSection about dan goals --}}

    {{-- section Timeline --}}
    <div class="w-10/12 md:w-7/12 lg:6/12 mx-auto relative py-20">
        <h1 class="text-3xl text-center font-bold text-slate-600">Competition Timeline</h1>
        <div class="border-l-2 mt-10">
          <!-- Card 1 -->
          <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-yellow-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
            <div class="w-5 h-5 bg-blue-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
            <div class="w-10 h-1 bg-blue-300 absolute -left-10 z-0"></div>
            <div class="flex-auto">
              <h1 class="text-lg">19 Juni - 6 Juli 2023</h1>
              <h1 class="text-xl font-bold">Pendaftaran</h1>
            </div>
          </div>
  
          <!-- Card 2 -->
          <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-pink-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
            <div class="w-5 h-5 bg-pink-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
            <div class="w-10 h-1 bg-pink-300 absolute -left-10 z-0"></div>
            <div class="flex-auto">
              <h1 class="text-lg">7 Juli 2023</h1>
              <h1 class="text-xl font-bold">Warm Up</h1>
            </div>
          </div>
  
          <!-- Card 3 -->
          <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-green-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
            <div class="w-5 h-5 bg-green-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
            <div class="w-10 h-1 bg-green-300 absolute -left-10 z-0"></div>
            <div class="flex-auto">
              <h1 class="text-lg">8 Juli 2023</h1>
              <h1 class="text-xl font-bold">Penyisihan</h1>
            </div>
          </div>
  
          <!-- Card 4 -->
          <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-purple-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
            <div class="w-5 h-5 bg-purple-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
            <div class="w-10 h-1 bg-purple-300 absolute -left-10 z-0"></div>
            <div class="flex-auto">
              <h1 class="text-lg">
                9 Juli 2023</h1>
              <h1 class="text-xl font-bold">Pengumuman Finalis </h1>
            </div>
          </div>

           <!-- Card 5 -->
           <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-blue-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
            <div class="w-5 h-5 bg-purple-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
            <div class="w-10 h-1 bg-purple-300 absolute -left-10 z-0"></div>
            <div class="flex-auto">
              <h1 class="text-lg">
                14 Juli 2023</h1>
              <h1 class="text-xl font-bold"> Final </h1>
            </div>
          </div>

           <!-- Card 6 -->
           <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-rose-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
            <div class="w-5 h-5 bg-purple-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
            <div class="w-10 h-1 bg-purple-300 absolute -left-10 z-0"></div>
            <div class="flex-auto">
              <h1 class="text-lg">
                19 Juli 2023</h1>
              <h1 class="text-xl font-bold">Pengumuman 3 Pemenang teratas </h1>
            </div>
          </div>

           <!-- Card 7 -->
           <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-teal-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
            <div class="w-5 h-5 bg-purple-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
            <div class="w-10 h-1 bg-purple-300 absolute -left-10 z-0"></div>
            <div class="flex-auto">
              <h1 class="text-lg">
                22 Juli 2023</h1>
              <h1 class="text-xl font-bold">Pengumuman Pemenang & Pembagian Hadiah </h1>
            </div>
          </div>
        </div>
    </div>
    {{-- endSection Timeline --}}

    {{-- Section Faq --}}
    <section id="faq"class="p-25 mb-20 relative block bg-blue-900 dark:bg-slate-800">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-blue-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container p-12">      
        </div>
        {{-- FAQ --}}
        <div class="container mx-auto -mt-24 sm:-mt-12 -mb-20 px-4 lg:pt-24 lg:pb-64 md:pb-54 sm:pb-32">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold text-white">FAQ</h2>
                    <p class="text-2xl leading-relaxed mt-4 mb-4 text-gray-500">
                        Pertanyaan Seputar {{ $title }}
                    </p>
                </div>
            </div>
            <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
                <h2 id="accordion-color-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-600 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                        <span class="text-2xl">Bagaimana cara mendaftarkan diri dalam kompetisi Infographic TechnoFair 10.0 ?</span>
                        <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-200 dark:text-gray-400">Peserta telah mengikuti prosedur pendaftaran pada website resmi TechnoFair 10.0 (www.technofair.id) dan melengkapi data pendaftaran dengan benar. Peserta yang tidak memenuhi persyaratan pendaftaran sampai waktu yang ditentukan akan dinyatakan gugur.</p>
                    </div>
                </div>
                <h2 id="accordion-color-heading-2">
                <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                    <span class="text-2xl">Apakah setiap peserta harus melengkapi data pribadi secara terpisah?</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                </h2>
                <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-200 dark:text-gray-400">Pengunggahan data diwakilkan oleh ketua tim dengan melampirkan foto/scan Kartu Tanda Mahasiswa/Kartu Tanda Pelajar yang masih aktif yang diunggah pada dashboard tim pada website TechnoFair 10.0 (www.technofair.id).</p> 
                </div>
                </div>
                <h2 id="accordion-color-heading-3">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                        <span class="text-2xl">Bagaimana apabila pendaftar tidak memiliki KTM (Kartu Tanda Mahasiswa) atau Kartu Pelajar?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-200 dark:text-gray-400">Dapat digantikan dengan Kartu Rencana Studi (untuk mahasiswa) atau Surat Keterangan resmi dari Perguruan Tinggi/Instansi/Sekolah terkait.</p>
                        </ul>
                    </div>
                </div>
                <h2 id="accordion-color-heading-4">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-4" aria-expanded="false" aria-controls="accordion-color-body-4">
                        <span class="text-2xl">Bagaimana sistem kompetisi Infographic ?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-200 dark:text-gray-400">Pada kompetisi ini terdapat 2 babak, babak penyisihan berupa penilaian oleh para juri melalui beberapa aspek/poin penilaian yang sudah ditentukan dan babak e-voting berupa penilaian audiens | like, view, share | dari poster yang akan diunggah di Instagram TechnoFair 10.0 | @technofair. |</p>       
                        </ul>
                    </div>
                </div>
                 <h2 id="accordion-color-heading-14">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-14" aria-expanded="false" aria-controls="accordion-color-body-14">
                        <span class="text-2xl">Apakah karya yang pernah diikutsertakan dalam kompetisi lain dapat diikutsertakan kembali ?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-14" class="hidden" aria-labelledby="accordion-color-heading-14">
                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-200 dark:text-gray-400">Tidak, karya yang pernah diikuti dalam kompetisi lain tidak boleh diikut sertakan. Jika ketahuan maka peserta akan didiskualifikasi.</p>
                       
                    </div>
                </div>
                <h2 id="accordion-color-heading-6">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-6" aria-expanded="false" aria-controls="accordion-color-body-6">
                        <span class="text-2xl">Bolehkah seorang peserta terdaftar lebih dari 1 kali pada kompetisi lainnya dalam TechnoFair 10.0?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-6" class="hidden" aria-labelledby="accordion-color-heading-6">
                    <div class="p-5 font-light border border-t-0 border-gray-200">
                        <p class="mb-2 text-gray-200">Boleh, akan tetapi setiap peserta hanya dapat menjadi ketua tim pada maksimal 1 cabang kompetisi. Apabila seseorang terdaftar pada 2 tim atau lebih masuk ke babak final, kemudian jadwal kompetisi kedua tim bersamaan, maka panitia tidak bertanggung jawab untuk mengubah jadwal kompetisi.</p>
                    </div>
                </div>
                <h2 id="accordion-color-heading-15">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 hover:bg-blue-100" data-accordion-target="#accordion-color-body-15" aria-expanded="false" aria-controls="accordion-color-body-15">
                        <span class="text-2xl">Bolehkah mendaftar jika kelompok saya hanya terdiri dari 2 orang peserta?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-15" class="hidden" aria-labelledby="accordion-color-heading-15">
                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-200 dark:text-gray-400">Boleh, dalam 1 tim diperbolehkan kurang dari 3 peserta dengan maksimal 3 peserta. Akan tetapi, tidak diperbolehkan lebih dari 3 orang peserta.</p>
                       
                    </div>
                </div>
                <h2 id="accordion-color-heading-16">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200  hover:bg-blue-100" data-accordion-target="#accordion-color-body-16" aria-expanded="false" aria-controls="accordion-color-body-16">
                        <span class="text-2xl">Bagaimana saya bisa mendapatkan template narasi singkat, lembar orisinalitas, dan logo?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-16" class="hidden" aria-labelledby="accordion-color-heading-16">
                    <div class="p-5 font-light border border-t-0 border-gray-200">
                        <p class="mb-2 text-gray-200">Template narasi singkat, lembar orisinalitas, dan logo dapat diunduh pada website TechnoFair 9.0 (www.technofair.id).</p>
                    </div>
                </div>
                <h2 id="accordion-color-heading-9">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 hover:bg-blue-100" data-accordion-target="#accordion-color-body-9" aria-expanded="false" aria-controls="accordion-color-body-9">
                        <span class="text-2xl">Siapa saja yang bisa daftar dalam kompetisi ini?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-9" class="hidden" aria-labelledby="accordion-color-heading-7">
                    <div class="p-5 font-light border border-t-0 border-gray-200">
                        <p class="mb-2 text-gray-200">Kompetisi ini dikhususkan untuk Siswa SMA/Sederajat dan mahasiswa yang masih aktif. Namun, tidak ada perbedaan kategori SMA/SMK dan mahasiswa.</p>                 
                    </div>
                </div>
                <h2 id="accordion-color-heading-10">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 hover:bg-blue-100" data-accordion-target="#accordion-color-body-10" aria-expanded="false" aria-controls="accordion-color-body-10">
                        <span class="text-2xl">Bolehkah tim saya mendaftar jika berasal dari jenjang pendidikan berbeda (seperti D4 dan S1 dalam 1 tim atau kelas 10 dan kelas 12 dalam 1 tim) maupun dari jurusan yang berbeda ?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-10" class="hidden" aria-labelledby="accordion-color-heading-8">
                    <div class="p-5 font-light border  border-t-0 border-gray-200">
                        <p class="mb-2 text-gray-200">Boleh, dengan ketentuan peserta berasal dari universitas/instansi terkait yang sama.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- endSection faq --}}
    </main>
 @endsection