    {{-- sidebar baru --}}
    
    <aside id="sidebar-multi-level-sidebar" class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2">
            <li>
                <a class="block px-3 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
                    <img
                        src="/img/logo/logo.png"
                        class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8"
                        alt="main_logo"
                    />
                    <span
                        class="ml-1 font-semibold transition-all duration-200 ease-nav-brand"
                        >Technofair Dashboard</span
                    >
                </a>
            </li>
            <li>
                <a href="/dashboard/" class="my-3 flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700">
                    <img src="https://img.icons8.com/fluency/32/null/dashboard-layout.png"/>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/tables/" class="my-3 flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700">
                    
                      <img src="https://img.icons8.com/external-itim2101-blue-itim2101/28/null/external-competition-esport-itim2101-blue-itim2101-1.png"/>
                      
                      
                      
                    <span class="ml-4">Tim Saya</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/billing/" class="my-3 flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700">
                    <img src="https://img.icons8.com/fluency/32/null/receipt-dollar.png"/>
                    <span class="ml-3">Pembayaran</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/document/" class="my-3 flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700">
                    <img src="https://img.icons8.com/color/30/null/new-document.png"/>
                    <span class="ml-4">Berkas</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/virtual-reality/" class="my-3 flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700">
                    <img src="https://img.icons8.com/fluency/30/null/commercial.png"/>
                    <span class="ml-4">Pengumunan Finalis</span>
                </a>
            </li>
          
           
            
            
        </ul>
        </div>
        </aside>
        
        <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        <nav
        class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start bg-white drop-shadow-xl"
        navbar-main
        navbar-scroll="true"
        >
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        
            <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 mx-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
                </button>
            <!-- Section dashboard nav -->
            <nav>
                
                <!-- breadcrumb -->
                <ol
                    class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16"
                >
                    <li class="leading-normal text-sm">
                        <a
                            class="opacity-50 text-slate-700"
                            href="javascript:;"
                            >Pages</a
                        >
                    </li>
                    <li
                        class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                        aria-current="page"
                    >
                        {{ $title }}
                    </li>
                </ol>
                <!-- dasboard navbar -->
                <h6 class="mb-0 font-bold capitalize">{{ $title }}</h6>
            </nav>
            <!-- endSection dasboard nav -->
        
            <div
                class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto"
            >
                <!-- Input Search nav -->
                <div class="flex items-center md:ml-auto md:pr-4">
                    
                </div>
                <!-- endInput Search nav -->
        
                <ul
                    class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full"
                >
                    <!-- signNav -->
                    <li class="flex items-center">
                        <a
                            href="/"
                            class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500"
                        >
                            
                            <i class="fa fa-right-from-bracket sm:mr-1"></i> 
                            <span class="hidden sm:inline"
                                >Log Out</span
                            >
                        </a>
                    </li>
                    
        
                    <li class="relative flex items-center pr-2">
                        
                    </nav>