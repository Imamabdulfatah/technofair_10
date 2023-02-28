<header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
  <div class="container">
    <div class="relative flex items-center justify-between">
      <div class="px-3">
        <a href="#home" class="block py-2 text-4xl font-bold text-primary">Techno Fair</a>
        <!-- item centetr secara verikal justify-center =horizontal -->
      </div>
      <div class="flex items-center px-3">
        <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
          <span class="hamburger-line bg-primary origin-top-left transition duration-300 ease-in-out"></span>
          <span class="hamburger-line bg-primary transition duration-300 ease-in-out"></span>
          <span class="hamburger-line bg-primary origin-bottom-left transition duration-300 ease-in-out"></span>
        </button>
        <!-- navigasi keren dah -->
        <nav
          id="nav-menu"
          class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg lg:bg-transparent sm:bg-white py-4 shadow-lg dark:bg-dark dark:shadow-slate-500 lg:static lg:block lg:max-w-full lg:rounded-none lg:shadow-none lg:dark:bg-transparent"
        >
          <ul class="block lg:flex">
            <li class="group">
              <a href="#home" class="group-hover:text- mx-8 flex py-2 text-2xl text-primary">Home</a>
            </li>

            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-primary bg-transparent hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-transparent font-medium rounded-lg text-2xl px-4 py-2.5 text-center inline-flex items-center dark:bg-transparent dark:hover:bg-transparent dark:focus:transparent" type="button">Event<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
              <!-- Dropdown menu -->
              <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                  <li>
                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Webinar<svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
                      <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
                          <li>
                            <a href="/big-data" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Big Data</a>
                          </li>
                          <li>
                            <a href="/smart-city" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Smart City</a>
                          </li>
                        </ul>
                    </div>
                  </li>
                  <li>
                    <button id="doubleDropdownButton2" data-dropdown-toggle="doubleDropdown2" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Competition<svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
                      <div id="doubleDropdown2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton2">
                          <li>
                            <a href="/smart-fikti" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Smart FIKTI</a>
                          </li>
                          <li>
                            <a href="/infografic" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Infographic</a>
                          </li>
                          <li>
                            <a href="/capture-flag" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Capture The Flag</a>
                          </li>
                          <li>
                            <a href="/uxdesign" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">UX Design</a>
                          </li>
                        </ul>
                    </div>
                  </li>
                  <li>
                    <button id="doubleDropdownButton3" data-dropdown-toggle="doubleDropdown3" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Workshop<svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></button>
                      <div id="doubleDropdown3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton3">
                          <li>
                            <a href="/digital-marketing" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Digital Marketing</a>
                          </li>
                          <li>
                            <a href="/uidesign" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">UI Design</a>
                          </li>
                          
                        </ul>
                    </div>
                  </li>
                </ul>
            </div>
            
            <li class="group">
              <a href="#about" class="group-hover:text- mx-8 flex py-2 text-2xl text-primary">About</a>
            </li>
            <li class="group">
              <a href="#schedule" class="group-hover:text- mx-8 flex py-2 text-2xl text-primary">Schedule</a>
            </li>
           
            <li class="group">
              <a href="#contact" class="group-hover:text mx-8 flex py-2 text-2xl text-primary">Penilaian</a>
            </li>
            <li class="group mx-10">
              <a href="/login"  type="button" class="w-full rounded-full bg-primary flex py-2.5 px-6 text-xl font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg">Login</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header> 