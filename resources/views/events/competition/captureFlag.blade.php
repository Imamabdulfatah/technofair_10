@extends('layouts.main_event')

@section('container')

<main>
    {{-- sectian about dan goals --}}
    <section class="pb-20 bg-gray-300 -mt-28 sm:-mt-40 dark:bg-slate-800">
        {{-- about dan 3 box --}}
        <div class="container mx-auto px-4">
            <div class=" pt-32">
                
            </div>
            <div id="about"  class="flex flex-wrap items-center mt-32">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                <div
                class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100"
                >
                <i class="fas fa-user-friends text-xl"></i>
            </div>
                    <h3 class="text-3xl mb-2 font-semibold leading-normal">
                    {{ $title }}
                    </h3>
                    <p
                    class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700"
                    >
                    Kompetisi Infographic adalah kompetisi yang terdiri dari maksimal tiga orang dalam satu tim yang akan menciptakan sebuah poster yang mengandung pesan atau informasi sesuai dengan tema yang telah ditentukan, yaitu “Impact Cause by Implementing Technological Developments in the Disruptive Era, Strategy to Implement Technological Developments in the Disruptive Era, dan Challenge of Implementing Technological Developments in the Disruptive Era”.
                    </p>
            
                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/img/kado.jpg" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl  tracking-tight text-gray-900 dark:text-white">TOTAL HADIAH</h5>
                            <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">" JUTAAN RUPIAH "</h4>
                            <h5 class="mb-2 text-2xl  tracking-tight text-gray-900 dark:text-white">E-Certificate +
                                Paragon E-Voucher Discount</h5>
                         
                        </div>
                    </a>
            </div>
            <div class="w-full md:w-4/12 px-4 mt-8 mr-auto ml-auto">
                <div
                class="relative flex flex-col min-w-0 break-words bg-gray w-full mb-6 shadow-lg rounded-lg bg-pink-600"
                >
                <img
                    alt="Capture The Flag"
                    src="/img/asset/competition/cyber-scurity2.jpg"
                    class="w-full align-middle rounded-t-lg"
                />
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
                    <h4 class="text-xl font-bold text-white">
                    Contact Person :
                    </h4>
                    <p class="text-md font-light mt-2 text-white">
                    <i class="flex fab fa-whatsapp"><span class="mx-2">083876540744 | Imam via WhatsApp  </span></i>
                    </p>
                    <p class="text-md font-light mt-2 text-white">
                        <i class="flex fab fa-line"><span class="mx-2">imamabdul | Imam via Line</span>  </i> 
                    </p>
                    <h4 class="text-xl font-bold text-white mt-3">
                        Contact Person 2 :
                        </h4>
                        <p class="text-md font-light mt-2 text-white">
                        <i class="flex fab fa-whatsapp"><span class="mx-2">083876540744 | Imam via WhatsApp  </span></i>
                        </p>
                        <p class="text-md font-light mt-2 text-white">
                            <i class="flex fab fa-line"><span class="mx-2">imamabdul | Imam via Line</span>  </i> 
                        </p>
                </blockquote>
                <div class="container flex   content-around">
                    <button type="button" class="text-white w-40 h-16  bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-xl px-5 py-2.5 text-center mb-4">Daftar</button>
                    <button type="button" class="flex text-white w-40 h-16  bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-xl px-3 py-3 text-center ml-4 mb-4"><img src="https://img.icons8.com/ios/25/null/downloads.png"/><a class="text-white" href="/pdf/RULEBOOK-CAPTURE-THE-FLAG-TF.pdf" download="RULE BOOK CAPTURE THE FLAG TF">Rule Book</a> </button>
                </div> 
                </div>
            </div>
            </div>
        </div>

        </section>
        <section class="relative py-20">
            <div
                class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;"
            >
                <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
                >
                <polygon
                    class="text-white fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
                </svg>
            </div>

            {{-- waktu tempat --}}
            <div class="flex w-full flex-wrap justify-evenly px-2 xl:mx-auto mb-10 xl:w-10/12">  
                <div class="w-80 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img src="https://img.icons8.com/ios-filled/50/null/timer.png"/>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Waktu dan Tanggal</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go 09.00 - 12.00  |  29 Mei 2022</p>
                </div>
    
                <div class="w-80 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img src="https://img.icons8.com/ios-filled/50/null/marker.png"/>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Tempat</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go Zoom Clouds Meetings & Live Streaming Youtube</p>
                </div>   
                <div class="w-80 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img src="https://img.icons8.com/ios-filled/50/null/ticket.png"/>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Harga Tiket</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go Free</p>
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
            <!-- Dot Follwing the Left Vertical Line -->
            <div class="w-5 h-5 bg-blue-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
  
            <!-- Line that connecting the box with the vertical line -->
            <div class="w-10 h-1 bg-blue-300 absolute -left-10 z-0"></div>
  
            <!-- Content that showing in the box -->
            <div class="flex-auto">
              <h1 class="text-lg">25 April - 26 Mei 2022</h1>
              <h1 class="text-xl font-bold">Pendaftaran & Batas Submit Karya dan Berkas</h1>
            </div>
          </div>
  
          <!-- Card 2 -->
          <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-pink-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
            <!-- Dot Follwing the Left Vertical Line -->
            <div class="w-5 h-5 bg-pink-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
  
            <!-- Line that connecting the box with the vertical line -->
            <div class="w-10 h-1 bg-pink-300 absolute -left-10 z-0"></div>
  
            <!-- Content that showing in the box -->
            <div class="flex-auto">
              <h1 class="text-lg">14 - 27 Mei 2022</h1>
              <h1 class="text-xl font-bold">Babak Penyisihan</h1>
            </div>
          </div>
  
          <!-- Card 3 -->
          <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-green-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
            <!-- Dot Follwing the Left Vertical Line -->
            <div class="w-5 h-5 bg-green-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
  
            <!-- Line that connecting the box with the vertical line -->
            <div class="w-10 h-1 bg-green-300 absolute -left-10 z-0"></div>
  
            <!-- Content that showing in the box -->
            <div class="flex-auto">
              <h1 class="text-lg">27 Mei 2022 - 3 Juni 2022</h1>
              <h1 class="text-xl font-bold">Babak E-voting</h1>
            </div>
           
          </div>
  
          <!-- Card 4 -->
          <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-purple-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
            <!-- Dot Follwing the Left Vertical Line -->
            <div class="w-5 h-5 bg-purple-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>
  
            <!-- Line that connecting the box with the vertical line -->
            <div class="w-10 h-1 bg-purple-300 absolute -left-10 z-0"></div>
  
            <!-- Content that showing in the box -->
            <div class="flex-auto">
              <h1 class="text-lg">
                04 Juni 2022</h1>
              <h1 class="text-xl font-bold">Pengumuman Pemenang</h1>
            </div>
          </div>
        </div>
      </div>
      {{-- endSection Timeline --}}

       {{-- Section Faq --}}
    <section id="faq"class="p-25 mb-20 relative block bg-blue-900 dark:bg-slate-800">
        <div
            class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;"
        >
            <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
            >
            <polygon
                class="text-blue-900 fill-current"
                points="2560 0 2560 100 0 100"
            ></polygon>
            </svg>
        </div>

        {{-- accordation --}}
        <div class="container p-12">
        </div>
        

        {{-- FAQ --}}
        <div class="container mx-auto -mt-24 sm:-mt-12 -mb-20 px-4 lg:pt-24 lg:pb-64 pb-32">
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
                        <span class="text-2xl">Bagaimana cara mendaftarkan diri dalam kompetisi Capture the Flag (CTF) TechnoFair 10.0?</span>
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
                        <span class="text-2xl">Bagaimana sistem kompetisi Capture the Flag ?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-200 dark:text-gray-400">Pada kompetisi ini terdapat 3 babak, babak pemanasan, babak penyisihan, dan babak final yang diselenggarakan pada platform CTF.</p>
                        
                        </ul>
                    </div>
                </div>

                 <h2 id="accordion-color-heading-5">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-5" aria-expanded="false" aria-controls="accordion-color-body-5">
                        <span class="text-2xl">Bolehkah mendaftar jika kelompok hanya terdiri dari 2 orang peserta ?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-5">
                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-200 dark:text-gray-400">Boleh, dalam 1 tim diperbolehkan kurang dari 3 peserta dengan maksimal 3 peserta. Akan tetapi, tidak diperbolehkan lebih dari 3 orang peserta.</p>
                       
                    </div>
                </div>

                <h2 id="accordion-color-heading-6">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-6" aria-expanded="false" aria-controls="accordion-color-body-6">
                        <span class="text-2xl">Bagaimana mekanisme kompetisi ?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-6" class="hidden" aria-labelledby="accordion-color-heading-6">
                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-200 dark:text-gray-400">Panitia akan mengirim link, username, dan password kepada ketua tim untuk mengikuti babak pemanasan, penyisihan, dan final.</p>
                    </div>
                </div>

                <h2 id="accordion-color-heading-7">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-7" aria-expanded="false" aria-controls="accordion-color-body-7">
                        <span class="text-2xl">Apakah peserta diperbolehkan untuk tidak mengikuti sesi warm up/pemanasan ?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-7" class="hidden" aria-labelledby="accordion-color-heading-9">
                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-200 dark:text-gray-400">Boleh, warm up/pemanasan tidak termasuk dalam penilaian kompetisi. Tapi, peserta disarankan untuk mengikuti warm up/pemanasan.</p>
                       
                    </div>
                </div>

                <h2 id="accordion-color-heading-8">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-8" aria-expanded="false" aria-controls="accordion-color-body-8">
                        <span class="text-2xl">Bolehkah seorang peserta terdaftar lebih dari 1 kali pada tim yang berbeda kompetisi lainnya dalam TechnoFair 10.0 ?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-8" class="hidden" aria-labelledby="accordion-color-heading-10">
                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-200 dark:text-gray-400">Boleh, akan tetapi setiap peserta hanya dapat menjadi ketua tim pada maksimal 1 cabang kompetisi. Apabila seseorang terdaftar pada 2 tim atau lebih masuk ke babak final, kemudian jadwal kompetisi kedua tim bersamaan, maka panitia tidak bertanggung jawab untuk mengubah jadwal kompetisi.</p>
                       
                    </div>
                </div>

                <h2 id="accordion-color-heading-9">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-9" aria-expanded="false" aria-controls="accordion-color-body-9">
                        <span class="text-2xl">Siapa saja yang bisa daftar dalam kompetisi ini ?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-9" class="hidden" aria-labelledby="accordion-color-heading-7">
                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-200 dark:text-gray-400">Siswa SMA/SMK dan mahasiswa. Namun, tidak ada perbedaan kategori SMA/SMK dan mahasiswa.</p>
                       
                    </div>
                </div>

                <h2 id="accordion-color-heading-10">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-10" aria-expanded="false" aria-controls="accordion-color-body-10">
                        <span class="text-2xl">Dimana saya mengumpulkan write up ?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-10" class="hidden" aria-labelledby="accordion-color-heading-8">
                    <div class="p-5 font-light border  border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-200 dark:text-gray-400">Write up dapat dikumpulkan pada alamat email technofair.kompetisi@gmail.com maksimal 1 hari setelah kompetisi selesai.</p>
                       
                    </div>
                </div>

                <h2 id="accordion-color-heading-11">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-11" aria-expanded="false" aria-controls="accordion-color-body-11">
                        <span class="text-2xl">Bolehkah tim saya mendaftar jika berasal dari jenjang pendidikan berbeda (seperti D3 dan S1 dalam 1 tim) maupun dari jurusan yang berbeda ?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-11" class="hidden" aria-labelledby="accordion-color-heading-8">
                    <div class="p-5 font-light border  border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-200 dark:text-gray-400">Boleh asalkan peserta tidak berbeda Universitas/Perguruan Tinggi/Sekolah.</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- endSection faq --}}
    
    </main>
 @endsection