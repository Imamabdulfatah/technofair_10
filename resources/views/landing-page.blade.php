@extends('layouts.main')

@section('container')

<main>
{{-- Background gambar --}}
<div id="home" class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
    <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("/img/asset/smartcity2.png");'>
        <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
    </div>

    {{-- isi kata kata --}}
    <div class="container relative mx-auto dark:bg-slate-600">
        <div class="items-center flex flex-wrap">
        <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
            <div class="pr-12">
            <h1 class="text-white font-semibold text-6xl">
                {{ $tema }}
            </h1>
            <p class="mt-4 text-2xl text-gray-300">
                "Getting new ideas then creating something big with your experience and knowledge through the startup world"
            </p>
            </div>
        </div>
    </div>
    </div>
            <div
                class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                style="height: 70px;"
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
                    class="text-gray-300 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
                </svg>
            </div>
</div>

{{-- sectian about dan goals --}}
<section class="pb-20 bg-gray-300 -mt-24 dark:bg-slate-800">
    {{-- about dan 3 box --}}
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
        <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
            <div
            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
            <div class="px-2 py-3 flex-auto">
                <div
                class="text-white p-3 text-center inline-flex items-center justify-center w-24 h-24 mb-3 shadow-lg rounded-full bg-red-400"
                >
                <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/null/external-seminar-event-management-flaticons-lineal-color-flat-icons-3.png"/>
                </div>
                <h6 class="text-xl font-semibold">{{ $Sm }}</h6>
                    
                </p>
            </div>
            </div>
        </div>
        <div class="w-full md:w-4/12 px-4 text-center">
            <div
            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
            <div class="px-2 py-3 flex-auto">
                <div
                class="text-white p-3 text-center inline-flex items-center justify-center w-24 h-24 mb-3 shadow-lg rounded-full bg-blue-400"
                >
                <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/null/external-seminar-activism-flaticons-lineal-color-flat-icons-3.png"/>
                </div>
                <h6 class="text-xl font-semibold">{{ $Ws }}</h6>
                
            </div>
            </div>
        </div>
        <div class="pt-6 w-full md:w-4/12 px-4 text-center">
            <div
            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
            <div class="px-2 py-3 flex-auto">
                <div
                class="text-white p-3 text-center inline-flex items-center justify-center w-24 h-24 mb-3 shadow-lg rounded-full bg-green-400"
                >
                <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/null/external-competition-tennis-flaticons-lineal-color-flat-icons-5.png"/>
                </div>
                <h6 class="text-xl font-semibold">{{ $Ct }}</h6>
                
                </p>
            </div>
            </div>
        </div>
        </div>
        <div id="about"  class="flex flex-wrap items-center mt-32">
        <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
            <div
            class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100"
            >
            <i class="fas fa-user-friends text-xl"></i>
            </div>
            <h3 class="text-3xl mb-2 font-semibold leading-normal">
            About
            </h3>
            <p
            class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700"
            >
            TechnoFair adalah kegiatan yang diselenggarakan oleh BEM FIKTI UG Periode 2023/2024 yang terdiri dari tiga rangkaian kegiatan, yaitu webinar, kompetisi dan workshop yang mengangkat tema “getting new ideas then creating something big with your experience and knowledge through the startup world”. 
            </p>
            <p
            class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700"
            >
            Tema ini membahas mengenai suatu tindakan nyata dalam rangka persiapan melakukan pengimplementasian untuk menghadapi perkembangan teknologi di era perubahan ini. TechnoFair 10.0 mengajak generasi muda untuk melakukan tindakan dalam mengembangkan teknologi di era disruptif, serta berperan produktif untuk memajukan teknologinya dan mengembangkan inovasi di bidang lainnya
            </p>
            <a
            href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation"
            class="font-bold text-gray-800 mt-8"
            >Ayo Gabung !!</a
            >
        </div>
        <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
            <div
            class="relative flex flex-col min-w-0 break-words bg-gray w-full mb-6 shadow-lg rounded-lg bg-pink-600"
            >
            <img
                alt="..."
                src="/img/asset/about.png"
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
                Ayo mulai langkah Anda
                </h4>
                <p class="text-md font-light mt-2 text-white">
                Belajar bersama, bersaing sehat, menambah relasi dan mengembangkan skill dan kemampuan
                </p>
            </blockquote>
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

        {{-- Goals --}}
        <div  class="container mx-auto px-4">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-6/12 ml-auto mr-auto px-5">
                    <img alt="Tujuan" class="max-w-full rounded-lg shadow-lg"src="/img/asset/tujuan.png"/>
                </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-2">
                <div class="md:pr-12">
                <div class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                    <i class="fas fa-rocket text-xl"></i>
                </div>
                <h3 class="text-4xl font-semibold">Goals</h3>
                    <ul class="list-none mt-6">
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                <span
                                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                                    ><i class="fas fa-fingerprint"></i
                                ></span>
                                </div>
                                <div>
                                <h4 class="text-gray-600">
                                    Menumbuhkan ide kreatif mahasiswa Universitas Gunadarma dan masyarakat umum dalam menghadapi pesatnya perkembangan teknologi digital saat ini.
                                </h4>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                        <div class="flex items-center">
                            <div>
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                                ><i class="fab fa-html5"></i
                            ></span>
                            </div>
                            <div>
                            <h4 class="text-gray-600">Mempertegas identitas Universitas Gunadarma di masyarakat umum sebagai kampus yang berbasis di bidang IT.</h4>
                            </div>
                        </div>
                        </li>
                        <li class="py-2">
                        <div class="flex items-center">
                            <div>
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                                ><i class="far fa-paper-plane"></i
                            ></span>
                            </div>
                            <div>
                            <h4 class="text-gray-600">Memperkenalkan kepada mahasiswa Universitas Gunadarma dan masyarakat umum tentang pesatnya perkembangan teknologi digital saat ini melalui acara webinar, workshop, dan kompetisi.</h4>
                            </div>
                        </div>
                        </li>
                        <li class="py-2">
                        <div class="flex items-center">
                            <div>
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                                ><i class="far fa-paper-plane"></i
                            ></span>
                            </div>
                            <div>
                            <h4 class="text-gray-600">Sebagai sarana media pembelajaran dan pembekalan ilmu mahasiswa Universitas Gunadarma dan masyarakat umum di bidang IT dalam menghadapi pesatnya
                            perkembangan teknologi digital saat ini.</h4>
                            </div>
                        </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- endSection about dan goals --}}

{{--  section Webinar Workshop competition --}}
<section id="portfolio" class="bg-slate-200 pt-36 pb-16 dark:bg-slate-800">
        {{-- webinar  --}}
        <div class="container">
        <div class="w-full px-4">
        <div class="mx-auto mb-16 max-w-xl text-center">
            <h4 class="text-dark mb-4 text-3xl font-bold dark:text-white">{{ $Sm }}</h4>
            <blockquote class="text-xl italic font-semibold text-gray-700 dark:text-white">
            <p>"Future Technology"</p>
        </blockquote>
        </div>
        </div>
        <div class="flex  flex-wrap justify-evenly xl:mx-auto xl:w-9/12 sm:w-full">
            <div class="mb-12 p-4 md:w-1/2 bg-white rounded-md">
                <div class="overflow-hidden rounded-md shadow-md">
                    <img src="/img/asset/webinar/big-data2.jpg" alt="Architecture kapal pinisi" width="w-full" />
                </div>
                <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Data Science</h3>
                <p>Sebinar ini mengangkat topik Data Science</p>
                <a href="/big-data/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
    
            <div class="mb-12 p-4 md:w-1/2 bg-white rounded-md">
                <div class="overflow-hidden rounded-md shadow-md">
                    <img src="/img/asset/webinar/Smart-City3.jpg" alt="Architecture kapal pinisi" width="w-full" />
                </div>
                <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">UI | UX</h3>
                <p>Webinar ini mengangkat topik UI | UX</p>
                <a href="/smart-city/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>            
    </div>

    {{-- workshop --}}
    <div class="container">
        <div class="w-full px-4 ">
            <div class="mx-auto mb-16 max-w-xl text-center">
            <h2 class="text-dark mb-4 text-3xl font-bold dark:text-white">{{ $Ws }}</h2>
            <blockquote class="text-xl italic font-semibold text-gray-600 dark:text-white">
                <p>"Learn New Things"</p>
            </blockquote>
            </div>
        </div>

        <div class="flex  flex-wrap justify-between xl:mx-auto xl:w-9/12 sm:w-full">
            <div class="mb-12 p-4 md:w-1/2 bg-white rounded-md">
            <div class="overflow-hidden rounded-md shadow-md">
                <img src="/img/asset/workshop/Digital-marketing.jpg" alt="Architecture kapal pinisi" width="w-full" />
            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Product Design</h3>
            <p>Workshop ini membahas materi bagaimana produc design bisa membuat produk bisa diterima oleh pengguna, melainkan juga bagaimana produk bisa memberi ruang keuntungan bagi perusahaan</p>
            <a href="/digital-marketing/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            </div>

            <div class="mb-12 p-4 md:w-1/2 bg-white rounded-md">
            <div class="overflow-hidden rounded-md shadow-md">
                <img src="/img/asset/workshop/ui-design2.png" alt="Architecture pola" width="w-full" />
            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Software Engineering</h3>
            <p>Workshop ini memberikan pelatihan untuk belajar menerapkan prinsip-prinsip rekayasa perangkat lunak untuk desain, pengembangan, pemeliharaan, pengujian, dan evaluasi dari perangkat lunak.</p>
            <a href="/uidesign/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            </div>
        </div>
    </div>

    {{-- Competition --}}
    <div class="w-full px-4">
        <div class="mx-auto mb-16 max-w-xl text-center">
            <h4 class="text-dark mb-4 text-3xl font-bold dark:text-white">{{ $Ct }}</h4>
            <blockquote class="text-xl italic font-semibold text-gray-600 dark:text-white">
                <p>"Victory Is Not The Main Things"</p>
            </blockquote>
        </div>
    </div>

    <div class="flex w-full flex-wrap justify-evenly px-2 xl:mx-auto xl:w-10/12">
        <div class="max-w-lg my-12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="/capture-flag/">
                <img class="rounded-t-lg" src="/img/asset/competition/cyber-scurity2.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="/capture-flag/">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Capture The Flag</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kompetisi keamanan jaringan dan informasi seperti mencari script yang telah disembunyikan.Atau suatu kompetisi hacking yang dimana mengharuskan seorang ataupun tim untuk mengambil sebuah file/string yang sudah disembunyikan sistem yang biasa</p>
                <a href="/capture-flag/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
        <div class="max-w-lg my-12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="/competitive-programing">
                <img class="rounded-t-lg" src="/img/asset/competition/ux-design2.png" alt="Competitive Programing" />
            </a>
            <div class="p-5">
                <a href="/uxdesign/">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Competitive Programing</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kompetisi olah pikiran yang diadakan menggunakan internet atau jaringan lokal, di mana para peserta mencoba untuk memprogram sesuai dengan spesifikasi yang diminta, dalam waktu yang terbatas. </p>
                <a href="/uxdesign/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
    </div>
    
    </section>

{{-- endSection webinar workshop competition--}}

{{-- Section Schedule --}}
<section id="schedule" class=" pb-64  relative block bg-green-400  dark:bg-slate-600">
    <section class="py-12 ">
        <div
            class="bottom-auto top-0  left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
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
                class="text-green-400 fill-current"
                points="2560 0 2560 100 0 100"
            ></polygon>
            </svg>
        </div>
    </section>

    <div class="container">
        <div class="w-full px-4">
            <div class="mx-auto mb-16 max-w-xl text-center">
            <h4 class="text-white mb-4 text-3xl font-bold dark:text-white">Schedule</h4>
            <blockquote class="text-xl italic font-semibold text-gray-900 dark:text-white">
                <p>"Jadwal Rangkaian Acara TechnoFair 10.0"</p>
            </blockquote>
            </div>
        </div>
        <div class="flex w-full flex-wrap justify-evenly px-2 xl:mx-auto xl:w-10/12">
        
            <button id="wbschedule" class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-full text-2xl px-12 py-3 text-center inline-flex items-center dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 mr-2 mb-2">Webinar</button>

            
            <button id="cpschedule" class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-full text-2xl px-12 py-3 text-center inline-flex items-center dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 mr-2 mb-2">{{ $Ct }}</button>      
            
            
            <button id="wkschedule" class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-full text-2xl px-12 py-3 text-center inline-flex items-center dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 mr-2 mb-2">Workshop</button>
        </div> 
        <div class="p-4">
            <div id="containwb" class="w-full px-4 mt-12">
                <ol class="items-center sm:flex  place-content-center">
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h2 class="text-2xl font-bold text-slate-200 dark:text-white">Data Science | Seminar</h2>
                            <time class="block mb-2 text-lg font-normal leading-none text-gray-100 dark:text-gray-500">28 Juni 2022 | 13.00 - 16.00</time>
                            <p class="text-base font-normal text-gray-100 dark:text-gray-400">"Data is new Oil"</p>
                            <hr class="h-px my-2 bg-white border-0 dark:bg-gray-700">
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h2 class="text-2xl font-bold text-slate-200 dark:text-white">UI / UX | Seminar</h2>
                            <time class="block mb-2 text-lg font-normal leading-none text-gray-100 dark:text-gray-500">30 Juni 2022 | 14.00 - 17.00</time>
                            <p class="text-base font-normal text-gray-100 dark:text-gray-400">"Design Is important"</p>
                            <hr class="h-px my-2 bg-white border-0 dark:bg-gray-700">
                        </div>
                    </li>
                    
                </ol>
            </div>
            <div id="containcp" class="w-full px-4 mt-12">
                <ol class="items-center sm:flex  place-content-center">
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h2 class="text-2xl mb-2 font-bold text-slate-200 dark:text-white">Capture The Flage | {{ $Ct }}</h2>
                            <time class="block mb-2 text-lg font-normal leading-none text-gray-100 dark:text-gray-500">28 Juni 2022 | 13.00 - 16.00</time>
                            <p class="text-base font-normal text-gray-100 dark:text-gray-400">"Data is new Oil"</p>
                            <hr class="h-px my-2 bg-white border-0 dark:bg-gray-700">
                        </div>
                       
                    </li>
                   
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h2 class="text-2xl mb-2 font-bold text-slate-200 dark:text-white">Competitive Programing | {{ $Ct }}</h2>
                            <time class="block mb-2 text-lg font-normal leading-none text-gray-100 dark:text-gray-500">30 Juni 2022 | 14.00 - 17.00</time>
                            <p class="text-base font-normal text-gray-100 dark:text-gray-400">"Design Is important"</p>
                            <hr class="h-px my-2 bg-white border-0 dark:bg-gray-700">
                        </div>
                    </li>
                    
                </ol>
            </div>
            <div id="containwk" class="w-full px-4 mt-12">
                <ol class="items-center sm:flex  place-content-center">
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h2 class="text-2xl font-bold text-slate-200 dark:text-white">Product Design | Workshop</h2>
                            <time class="block mb-2 text-lg font-normal leading-none text-gray-100 dark:text-gray-500">28 Juni 2022 | 13.00 - 16.00</time>
                            <p class="text-base font-normal text-gray-100 dark:text-gray-400">"Data is new Oil"</p>
                            <hr class="h-px my-2 bg-white border-0 dark:bg-gray-700">
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h2 class="text-2xl font-bold text-slate-200 dark:text-white">Sofware Engineering | Workshop</h2>
                            <time class="block mb-2 text-lg font-normal leading-none text-gray-100 dark:text-gray-500">30 Juni 2022 | 14.00 - 17.00</time>
                            <p class="text-base font-normal text-gray-100 dark:text-gray-400">"Design Is important"</p>
                            <hr class="h-px my-2 bg-white border-0 dark:bg-gray-700">
                        </div>
                    </li>
                    
                </ol>
            </div> 
        </div>
        
    </div>
    
</section>
{{-- endSection Schedule --}}

{{-- Section Doc --}}
<section id="doc" class="pb-60 -pt-20 relative block bg-green-400  dark:bg-slate-600">  
    <div class="container">
        <div class="w-full px-4">
            <div class="mx-auto mb-16 max-w-xl text-center">
                <h4 class="text-white mb-4 text-3xl font-bold dark:text-white">Documentation</h4>

            </div>
            </div>
        <div id="indicators-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-96 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="/img/docs/cyber-scurity2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/docs/infografic2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/docs/ux-design2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/docs/Digital-marketing.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
</section>
{{-- endSsection Doc --}}

    <!-- section client start-->
    <section id="clients" class="bg-slate-800 pt-36 pb-32 dark:bg-slate-300">
    {{-- partner --}}
    <div class="container mb-32">
        <div class="w-full px-4">
        <div class="mx-auto mb-16 max-w-2xl text-center">
            {{-- <h4 class="mb-2 text-2xl font-bold text-primary">PARTNER & SPONSOR</h4> --}}
            <h2 class="mb-4 text-3xl font-bold text-white dark:text-dark sm:text-4xl lg:text-5xl">OFFICIAL EXCLUSIVE CLOUD HOSTING PARTNER</h2>
            {{-- <p class="text-md font-medium text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, earum. Commodi assumenda sapiente, ipsa ipsam huhuh jwdwyfuygf</p> --}}
        </div>
        </div>
        <!-- gunakan logo common svg -->
        <!-- caranya ketik ke google = logo google tranparent svg lalu biasanya ada di comon wikipediea -->
        <div class="w-full px-4">
        <div class="flex flex-wrap items-center justify-center">
            <a href="#" class="mx-4 max-w-[180px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
            <img src="/img/sponsor/google.png" alt="Google" />
            </a>
            <a href="#" class="mx-4 max-w-[180px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
            <img src="/img/sponsor/gojek.png" alt="Gojek" />
            </a>
            <a href="#" class="mx-4 max-w-[180px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
            <img src="/img/sponsor/softbank.png" alt="softbank" />
            </a>
            <a href="#" class="mx-4 max-w-[180px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
            <img src="/img/sponsor/tesla.png" alt="Tesla" width="60px" />
            </a>
        </div>
        </div>
    </div>
    {{-- sponsor --}}
    <div class="container mb-32">
        <div class="w-full px-4">
            <div class="mx-auto mb-16 max-w-2xl text-center">
            {{-- <h4 class="mb-2 text-2xl font-bold text-primary">SPONSORSHIP BY</h4> --}}
            <h2 class="mb-4 text-3xl font-bold text-white dark:text-dark sm:text-4xl lg:text-5xl">SPONSORED BY</h2>
            </div>
        </div>
        
        <div class="w-full px-4">
            <div class="flex flex-wrap items-center justify-center">
            <a href="#" class="mx-4 max-w-[180px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                <img src="/img/sponsor/google.png" alt="Google" />
            </a>
            <a href="#" class="mx-4 max-w-[180px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                <img src="/img/sponsor/gojek.png" alt="Gojek" />
            </a>
            <a href="#" class="mx-4 max-w-[180px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                <img src="/img/sponsor/softbank.png" alt="softbank" />
            </a>
            <a href="#" class="mx-4 max-w-[180px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                <img src="/img/sponsor/tesla.png" alt="Tesla" width="60px" />
            </a>
            </div>
        </div>
        </div>

        {{-- media parther --}}
        <div class="container mb-24">
        <div class="w-full px-4">
            <div class="mx-auto mb-16 max-w-2xl text-center">
            <h2 class="mb-4 text-3xl font-bold text-white dark:text-dark sm:text-4xl lg:text-5xl">MEDIA PARTNER</h2>
            </div>
        </div>
        <div class="w-full px-4">
            <div class="flex flex-wrap items-center justify-center">
            <a href="#" class="mx-4 max-w-[180px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                <img src="/img/sponsor/google.png" alt="Google" />
            </a>
            <a href="#" class="mx-4 max-w-[180px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                <img src="/img/sponsor/gojek.png" alt="Gojek" />
            </a>
            <a href="#" class="mx-4 max-w-[180px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                <img src="/img/sponsor/softbank.png" alt="softbank" />
            </a>
            <a href="#" class="mx-4 max-w-[180px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                <img src="/img/sponsor/tesla.png" alt="Tesla" width="60px" />
            </a>
            </div>
        </div>
        </div>
</section>
<!-- section client end -->


{{-- Section Faq --}}
<section id="faq"class="p-25  mb-20 relative block bg-blue-900 dark:bg-slate-800">
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
    <div class="container mx-auto -mt-12 -mb-20 px-4 lg:pt-24 pb-40">
        <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
                <h2 class="text-4xl font-semibold text-white">FAQ</h2>
                <p class="text-2xl leading-relaxed mt-4 mb-4 text-gray-500">
                    Pertanyaan Seputar TechnoFair 10.0
                </p>
            </div>
        </div>

        <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
            <h2 id="accordion-color-heading-1">
                <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-600 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                    <span class="text-2xl">Apa itu technofair ?</span>
                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2 text-gray-200 dark:text-gray-400">TechnoFair adalah event IT terbesar yang diselenggarakan oleh BEM FIKTI UG.</p>
                </div>
            </div>
            <h2 id="accordion-color-heading-2">
            <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                <span class="text-2xl">Kapan dan Dimana Technofair dilaksanakan ?</span>
                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            </h2>
            <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
            <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-200 dark:text-gray-400">TechnoFair diselenggarakan mulai 9 Mei sampai 4 Juni secara online.</p>
                
            </div>
            </div>
            <h2 id="accordion-color-heading-3">
                <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                    <span class="text-2xl">Apakah ada Biaya di technofair 10.0 ?</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-200 dark:text-gray-400">Workshop dan kompetisi TechnoFair 9.0 ada yang memiliki biaya pendaftaran sedangkan webinar gratis/FREE.</p>
                    
                    {{-- <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                    <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                    </ul> --}}
                </div>
            </div>

            
            <h2 id="accordion-color-heading-4">
                <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-4" aria-expanded="false" aria-controls="accordion-color-body-4">
                    <span class="text-2xl">Bagaimana saya mengetahui pemenang dalam kompetisi ?</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-3">
                <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-200 dark:text-gray-400">The main difference is that the core Pemenang kompetisi akan diumumkan melalui email dan sosial media TechnoFair 9.0.</p>
                    
                    </ul>
                </div>
            </div>
                <h2 id="accordion-color-heading-5">
                <button type="button" class="flex items-center justify-between w-full p-5 font-bold text-left text-gray-900 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-5" aria-expanded="false" aria-controls="accordion-color-body-5">
                    <span class="text-2xl">Apa saja yang akan didapat pemenang dalam kompetisi ?</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-3">
                <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-200 dark:text-gray-400">Pemenang kompetisi akan mendapatkan uang tunai, sertifikat dan hadiah menarik lainnya.</p>
                    
                </div>
            </div>
        </div>
        
    </div>
</section>
{{-- endSection faq --}}

{{-- section Contact --}}
<section id="contact"  class="relative block pb-28 pt-24 bg-gray-900">
    <div class="flex flex-wrap text-center p-20 justify-center">
        <div class="w-full lg:w-6/12 px-4">
            <h2 class="text-4xl font-semibold text-white">Penilaian</h2>
            <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                Form Penilaian digunakan untuk menilai website silahkan kasih saran dan komentar dan nilai dengan Mengeser Slider range nilai 1 sampai 10 . 
            </p>
        </div>
    </div>
    <div class="container mx-auto px-4 ">
        <div class="flex flex-wrap justify-center lg:-mt-5 -mt-2">
        <div class="w-full lg:w-6/12 px-4">
            <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300"
            >
            <div class="flex-auto p-5 lg:p-10">

                <div id="alert" class="my-alert d-none flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium">
                      Terimaksih Saran Atau Komentar Anda sudah diterima ✔
                    </div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert" aria-label="Close">
                      <span class="sr-only">Close</span>
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                  </div>

                <form name='evaluation-web-form'>
                    <h4 class="text-2xl font-semibold">Silahkan Beri Penilaian ?</h4>
                    <div class="relative w-full mb-3 mt-8">
                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="full-name">Full Name</label>
                        <input type="text" name="nama" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Full Name" style="transition: all 0.15s ease 0s;"/>
                    </div>
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">Email</label>
                        <input type="email" name="email" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Email" style="transition: all 0.15s ease 0s;"/>
                    </div>
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="message">Saran Atau Komentar</label>
                        <textarea name="pesan" rows="4" cols="80" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Type a message..."></textarea>
                    </div>
                    <div>
                        <label for="slider" class="my-2 text-xl text-bold">Silahkan Beri penilaian [Dengan Mengeser slider] :</label>
                        <input name="penilaian" id="large-range" type="range" min="1" max="10" value="1" class="w-full h-3 bg-gray-200 rounded-lg appearance-none cursor-pointer range-lg dark:bg-gray-700">
            
                        <p class=" text-xl text-bold ml-42">Nilai : <span id="value">1</span></p>

                        <button
                            class="btn-kirim bg-white text-black active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded-lg shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 mt-4"
                            type="submit"
                            style="transition: all 0.15s ease 0s;"
                        >
                            Send Message
                        </button>
                        <button disabled type="button" class="btn-loading d-none py-2.5 px-5 mr-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 inline-flex items-center">
                            <svg aria-hidden="true" role="status" class="inline w-4 h-4 mr-3 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>
                            </svg>
                            Loading...
                        </button>
                    </div>
                </form>
                
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
{{-- endSection contact --}}



 @endsection

{{-- komponen tailwindcss --}}
 {{-- https://merakiui.com/components/teams --}}