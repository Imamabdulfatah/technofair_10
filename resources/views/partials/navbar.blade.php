
<nav class="bg-gray-800 py-2 md:py-4 fixed-navbar">
  <div class="container mx-auto px-4">
    <div class="flex items-center justify-between">
      <div class="flex items-center px-12">
        <a href="/" class="text-white text-lg font-semibold">
          <img src="/asset/logo_z.png" class="h-24 mr-3" alt="Logo" />
        </a>
      </div>
      <div class="hidden md:flex">
        <div class="flex mt-4">
          <div>
            <a href="/" class="{{ ($active === "mainpage") ? 'active' : '' }} mx-4 block text-2xl py-2 pl-3 pr-4 text-white hover:text-blue-200 rounded hover:bg-gray-600 md:hover:bg-transparent  md:p-0">Home</a>
          </div>
          <div>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class=" {{ ($active === "mainpage") ? 'active' : '' }} mb-4 flex mx-4 text-2xl items-center justify-between w-full py-2 pl-3 pr-4  text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500">Event<svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  @auth
                    @if (auth()->user()->category_id === 1)
                      {{-- competition --}}
                      <li aria-labelledby="dropdownNavbarLink">
                        <button id="doubleDropdownButton3" data-dropdown-toggle="doubleDropdown3" data-dropdown-placement="right-start" type="button" class="flex text-xl   items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Competition<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
                        <div id="doubleDropdown3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton3">
                              <li>
                                <a href="/capture-flag" class="block text-xl  px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Capture The Flag</a>
                              </li>
                              <li>
                                <a href="/competitive-programing" class="block text-xl  px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Competitive Programming</a>
                              </li>
                            </ul>
                        </div>
                      </li>
                    @else
                     {{-- seminar --}}
                    <li aria-labelledby="dropdownNavbarLink">
                      <button id="doubleDropdownButton2" data-dropdown-toggle="doubleDropdown2" data-dropdown-placement="right-start" type="button" class="flex text-xl  items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Seminar<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
                      <div id="doubleDropdown2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton2">
                            <li>
                              <a href="/internet-of-things" class="block text-xl  px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Internet Of Things</a>
                            </li>
                            <li>
                              <a href="/ui-ux" class="block text-xl  px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">UI UX</a>
                            </li>
                          </ul>
                      </div>
                    </li>
                    {{-- workshop --}}
                    <li aria-labelledby="dropdownNavbarLink">
                      <button id="doubleDropdownButton4" data-dropdown-toggle="doubleDropdown4" data-dropdown-placement="right-start" type="button" class="flex text-xl  items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Workshop<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
                      <div id="doubleDropdown4" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                          <ul class="py-2 text-sm text-gray-700" aria-labelledby="doubleDropdownButton4">
                            <li>
                              <a href="/sofware-enginnering" class="block text-xl  px-4 py-2 hover:bg-gray-100">Sofware Engineering</a>
                            </li>
                            <li>
                              <a href="/product-design" class="block text-xl  px-4 py-2 hover:bg-gray-100">Product Design</a>
                            </li>
                          </ul>
                      </div>
                    </li>
                    @endif
                  @else
                  {{-- seminar --}}
                  <li aria-labelledby="dropdownNavbarLink">
                    <button id="doubleDropdownButton2" data-dropdown-toggle="doubleDropdown2" data-dropdown-placement="right-start" type="button" class="flex text-xl  items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Seminar<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
                    <div id="doubleDropdown2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton2">
                          <li>
                            <a href="/internet-of-things" class="block text-xl  px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Internet Of Things</a>
                          </li>
                          <li>
                            <a href="/ui-ux" class="block text-xl  px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">UI UX</a>
                          </li>
                        </ul>
                    </div>
                  </li>
                  {{-- competition --}}
                  <li aria-labelledby="dropdownNavbarLink">
                    <button id="doubleDropdownButton3" data-dropdown-toggle="doubleDropdown3" data-dropdown-placement="right-start" type="button" class="flex text-xl   items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Competition<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
                    <div id="doubleDropdown3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton3">
                          <li>
                            <a href="/capture-flag" class="block text-xl  px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Capture The Flag</a>
                          </li>
                          <li>
                            <a href="/competitive-programing" class="block text-xl  px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Competitive Programming</a>
                          </li>
                        </ul>
                    </div>
                  </li>
                  {{-- workshop --}}
                  <li aria-labelledby="dropdownNavbarLink">
                    <button id="doubleDropdownButton4" data-dropdown-toggle="doubleDropdown4" data-dropdown-placement="right-start" type="button" class="flex text-xl  items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Workshop<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
                    <div id="doubleDropdown4" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="doubleDropdownButton4">
                          <li>
                            <a href="/sofware-enginnering" class="block text-xl  px-4 py-2 hover:bg-gray-100">Sofware Engineering</a>
                          </li>
                          <li>
                            <a href="/product-design" class="block text-xl  px-4 py-2 hover:bg-gray-100">Product Design</a>
                          </li>
                        </ul>
                    </div>
                  </li>
                  @endauth
                </ul>
            </div>
          </div>
          <div>
            <a href="#about" class="{{ ($active === "mainpage") ? 'active' : 'd-none' }} mx-4 block text-2xl  py-2 pl-3 pr-4 text-white rounded hover:text-blue-200 hover:bg-gray-100 md:hover:bg-transparent  md:p-0">About</a>
          </div>
          <div>
            <a href="#schedule" class="{{ ($active === "mainpage") ? 'active' : 'd-none' }} mx-4 block text-2xl  py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Schedule</a>
          </div>
          <div>
            <a href="#faq" class="{{ ($active === "mainpage") ? 'active' : 'd-none' }} mx-4 block text-2xl  py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">FAQ</a>
          </div>
        </div>
      </div>
      <div class="flex items-center"> 
        @auth
        <li class="nav-item dropdown">
          
          <a id="dropdownButton" data-dropdown-toggle="dropdown2" class="flex -mt-5 text-white text-bold text-xl" type="button">Welcome back, {{ auth()->user()->name }} <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></a>
        
          <div id="dropdown2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownButton">
                @if ( auth()->user()->name === "Bem FIKTI")
                  <li><a class="dropdown-item" href="/admin"><i class="bi bi-columns-gap mx-2"></i>Dashboard Admin</a></li>
                @else
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-columns-gap mx-2"></i>My Dashboard</a></li>
                @endif
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left mx-2"></i>Logout</button>
                  </form>
                </li>
              </ul>
          </div>
          <ul class="dropdown-menu">
          </ul>
        </li>     
        @else  
          <li class="group {{ ($active === "mainpage") ? 'active' : '' }}">
            <a href="/login" class="text-black  bg-white hover:bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl px-4 py-1.5 text-center mr-3 md:mr-0 ">Login</a>
          </li>
        @endauth
      </div>
      <div class="md:hidden">
        <button type="button" id="menu-toggle"
          class="text-white hover:text-gray-300 focus:outline-none width:24 focus:text-gray-300" aria-label="Toggle menu">
          <svg viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6">
            <path fill-rule="evenodd"
              d="M2 5a1 1 0 011-1h14a1 1 0 110 2H3a1 1 0 01-1-1zm0 6a1 1 0 011-1h14a1 1 0 110 2H3a1 1 0 01-1-1zm0 6a1 1 0 011-1h14a1 1 0 110 2H3a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
    <div class="md:hidden" id="mobile-menu">
      <div class="mt-2 text-center">
        <div class="pb-12">
         <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 text-blue-600">
          <h2 id="accordion-color-heading-1">
            <a href="/" class="{{ ($active === "mainpage") ? 'active' : '' }} flex items-center rounded-t-lg justify-between w-full p-2 font-bold text-center text-white border border-gray-200 focus:ring-4 focus:ring-blue-200 focus:text-dark hover:bg-blue-200 hover:text-dark"><span class="text-md">HOME</span></a>
          </h2>
          @auth
            @if (auth()->user()->category_id === 1)
               {{-- COMPETITION --}}
              <h2 id="accordion-color-heading-7">
                <button type="button" class="{{ ($active === "mainpage") ? 'active' : '' }} flex items-center justify-between w-full p-2 font-bold text-center text-white border border-gray-200 focus:ring-4 focus:ring-blue-200 hover:bg-blue-200 " data-accordion-target="#accordion-color-body-7" aria-expanded="false" aria-controls="accordion-color-body-7">
                    <span class="text-md">COMPETITION</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
              </h2>
              <div id="accordion-color-body-7" class="hidden" aria-labelledby="accordion-color-heading-7">
                  <div class="p-2 font-light border border-t-0 border-gray-200">
                      <p class="mb-2 text-gray-200 text-md"><a href="/capture-flag">CAPTURE THE FLAG</a></p>
                      <p class="mb-2 text-gray-200 text-md"><a href="/competitive-programing">COMPETITIVE PROGRAMMING</a></p>
                  </div>
              </div>
            @else
             {{-- SEMINAR --}}
              <h2 id="accordion-color-heading-5">
                <button type="button" class="{{ ($active === "mainpage") ? 'active' : '' }} flex items-center justify-between w-full p-2 font-bold text-center text-white border border-gray-200 focus:ring-4 focus:ring-blue-200 hover:bg-blue-200 " data-accordion-target="#accordion-color-body-5" aria-expanded="false" aria-controls="accordion-color-body-5">
                    <span class="text-md">SEMINAR</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
              </h2>
              <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-3">
                  <div class="p-2 font-light border border-t-0 border-gray-200">
                    <p class="mb-2 text-gray-200 text-md"><a href="/internet-of-things">INTERNET OF THINGS</a></p>
                    <p class="mb-2 text-gray-200 text-md"><a href="/ui-ux">UI UX</a></p>
                  </div>
              </div>
              {{-- WORKSHOP --}}
              <h2 id="accordion-color-heading-8">
                  <button type="button" class="{{ ($active === "mainpage") ? 'active' : '' }} flex items-center justify-between w-full p-2 font-bold text-center text-white border border-gray-200 focus:ring-4 focus:ring-blue-200 hover:bg-blue-200 " data-accordion-target="#accordion-color-body-8" aria-expanded="false" aria-controls="accordion-color-body-8">
                      <span class="text-md">WORKSHOP</span>
                      <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </button>
              </h2>
              <div id="accordion-color-body-8" class="hidden" aria-labelledby="accordion-color-heading-8">
                  <div class="p-2 font-light border border-t-0 border-gray-200">
                      <p class="mb-2 text-gray-200 text-md"><a href="/sofware-enginnering"> SOFTWARE ENGINEERING</a></p>
                      <p class="mb-2 text-gray-200 text-md"><a href="/product-design">PRODUCT DESIGN</a></p>
                      
                  </div>
              </div>
            @endif
          @else
          {{-- SEMINAR --}}
          <h2 id="accordion-color-heading-5">
            <button type="button" class="{{ ($active === "mainpage") ? 'active' : '' }} flex items-center justify-between w-full p-2 font-bold text-center text-white border border-gray-200 focus:ring-4 focus:ring-blue-200 hover:bg-blue-200 " data-accordion-target="#accordion-color-body-5" aria-expanded="false" aria-controls="accordion-color-body-5">
                <span class="text-md">SEMINAR</span>
                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
          </h2>
          <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-3">
              <div class="p-2 font-light border border-t-0 border-gray-200">
                <p class="mb-2 text-gray-200 text-md"><a href="/internet-of-things">INTERNET OF THINGS</a></p>
                <p class="mb-2 text-gray-200 text-md"><a href="/ui-ux">UI UX</a></p>
              </div>
          </div>
          {{-- COMPETITION --}}
          <h2 id="accordion-color-heading-7">
              <button type="button" class="{{ ($active === "mainpage") ? 'active' : '' }} flex items-center justify-between w-full p-2 font-bold text-center text-white border border-gray-200 focus:ring-4 focus:ring-blue-200 hover:bg-blue-200 " data-accordion-target="#accordion-color-body-7" aria-expanded="false" aria-controls="accordion-color-body-7">
                  <span class="text-md">COMPETITION</span>
                  <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
          </h2>
          <div id="accordion-color-body-7" class="hidden" aria-labelledby="accordion-color-heading-7">
              <div class="p-2 font-light border border-t-0 border-gray-200">
                  <p class="mb-2 text-gray-200 text-md"><a href="/capture-flag">CAPTURE THE FLAG</a></p>
                  <p class="mb-2 text-gray-200 text-md"><a href="/competitive-programing">COMPETITIVE PROGRAMMING</a></p>
              </div>
          </div>
          {{-- WORKSHOP --}}
          <h2 id="accordion-color-heading-8">
              <button type="button" class="{{ ($active === "mainpage") ? 'active' : '' }} flex items-center justify-between w-full p-2 font-bold text-center text-white border border-gray-200 focus:ring-4 focus:ring-blue-200 hover:bg-blue-200 " data-accordion-target="#accordion-color-body-8" aria-expanded="false" aria-controls="accordion-color-body-8">
                  <span class="text-md">WORKSHOP</span>
                  <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
          </h2>
          <div id="accordion-color-body-8" class="hidden" aria-labelledby="accordion-color-heading-8">
              <div class="p-2 font-light border border-t-0 border-gray-200">
                  <p class="mb-2 text-gray-200 text-md"><a href="/sofware-enginnering"> SOFTWARE ENGINEERING</a></p>
                  <p class="mb-2 text-gray-200 text-md"><a href="/product-design">PRODUCT DESIGN</a></p>
                  
              </div>
          </div>
          @endauth

          <h2 id="accordion-color-heading-2">
            <a href="#about" class="{{ ($active === "mainpage") ? 'active' : 'd-none' }} flex items-center justify-between w-full p-2 font-bold text-center text-white border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 hover:bg-blue-200"><span class="text-md">ABOUT</span>
            </a>
          </h2>
          <h2 id="accordion-color-heading-14">
              <a href="#schedule" class="{{ ($active === "mainpage") ? 'active' : 'd-none' }} flex items-center justify-between w-full p-2 font-bold text-center text-white border border-gray-200 focus:ring-4 focus:ring-blue-200  hover:bg-blue-200"><span class="text-md">SCHEDULE</span></a>
          </h2>
          <h2 id="accordion-color-heading-4">
            <a href="#faq" class="{{ ($active === "mainpage") ? 'active' : 'd-none' }} flex items-center justify-between rounded-b-lg w-full p-2 font-bold text-center text-white border border-gray-200 focus:ring-4 focus:ring-blue-200 hover:bg-blue-200"><span class="text-md">FAQ</span></a>
          </h2>
        </div>
      </div
      </div>
    </div>
  </div>
</nav>