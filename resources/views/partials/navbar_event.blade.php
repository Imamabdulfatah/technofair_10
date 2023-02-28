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
                <a href="/" class="group-hover:text- mx-8 flex py-2 text-2xl text-primary">Home</a>
              </li>
              
                <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-primary bg-transparent hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-transparent font-medium rounded-lg text-2xl px-4 py-2.5 text-center inline-flex items-center dark:bg-transparent dark:hover:bg-transparent dark:focus:transparent" type="button">Webinar<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                    <li>
                        <a href="/big-data/" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Big Data</a>
                    </li>
                    <li>
                        <a href="/smart-city/" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Smart City</a>
                    </li>
                  
                    </ul>
                </div>
                
                <button id="dropdownHoverButton1" data-dropdown-toggle="dropdownHover1" data-dropdown-trigger="hover" class="text-primary bg-transparent hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-transparent font-medium rounded-lg text-2xl px-4 py-2.5 text-center inline-flex items-center dark:bg-transparent dark:hover:bg-transparent dark:focus:transparent" type="button">Competition<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownHover1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton1">
                    <li>
                        <a href="/infografic" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Infografic</a>
                    </li>
                    <li>
                        <a href="/smart-fikti/" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Smart FIKTI</a>
                    </li>
                    <li>
                        <a href="/capture-flag/" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Capture The Flag</a>
                    </li>
                    <li>
                        <a href="/uxdesign" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">UX Design</a>
                    </li>
                    </ul>
                </div>

                <button id="dropdownHoverButton2" data-dropdown-toggle="dropdownHover2" data-dropdown-trigger="hover" class="text-primary bg-transparent hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-transparent font-medium rounded-lg text-2xl px-4 py-2.5 text-center inline-flex items-center dark:bg-transparent dark:hover:bg-transparent dark:focus:transparent" type="button">Workshop<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownHover2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton2">
                    <li>
                        <a href="/digital-marketing/" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Digital Marketing</a>
                    </li>
                    <li>
                        <a href="/uidesign/" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">UI Design</a>
                    </li>
                    
                    </ul>
                </div>


            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header> 