@extends('layouts.main_dashboard')

@section('container')

  <div class="w-full px-6 py-6 mx-auto">
    <!-- content 1 -->

    <div class="flex flex-wrap -mx-3">
      <div class="max-w-full px-3 lg:w-2/4 lg:flex-none">
        <div class="flex flex-wrap -mx-3">
          <div class="max-w-full px-3 mb-4 lg:mb-0 lg:w-full lg:flex-none">
            <div class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <div class="flex flex-wrap -mx-3">
                  <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                    <h6 class="mb-0 mx-2">Status Pembayaran</h6>
                  </div>
                  
                </div>
              </div>
              <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                  <h1 class="mx-4 text-3xl text-bold">Bukti pembayaran telah di upload</h1>
                 
                </div>
              </div>
              <h6 class="my-3 mx-5 ">Silahkan tunggu konfirmasi melalui email terdaftar</h6>
                 
            </div>
          </div>
        </div>
      </div>
      
      <div class="w-full max-w-full px-3 lg:w-2/4 lg:flex-none">
        <div class="max-w-full px-3 mb-4 lg:mb-0 w-full lg:flex-none">
          <div class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
              <div class="flex flex-wrap -mx-3">
                <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                  <h6 class="my-1 mx-2 text-3xl text-bold">Upload Bukti Pembayaran</h6>
                </div>
              </div>
            </div>
            <div class="flex-auto p-4">
              <div class="flex flex-wrap -mx-3">
                <div class="max-w-full px-3 mb-6 md:mb-0 w-full md:flex-none">
                  <div class="relative flex flex-row items-center flex-auto min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl border-slate-100 bg-clip-border">
                  
                  <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                      <li class="flex  items-center">
                          <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                          Biaya pendaftaran sebesar Rp. 80.000,-/Tim
                        
                      </li>
                      <li class="flex items-center">
                          <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                          Untuk pembayaran bisa dilakukan melalui BCA : 1082413418 a.n Miselia Filiani
                      </li>
                      <li class="flex items-center">
                        <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Format file berupa JPG/JPEG/PNG
                      </li>
                     
                      <li class="flex items-center">
                        <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Format nama file [NamaTim_PilihanKompetisi]
                      </li>
                      <li class="flex items-center">
                        <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Contoh : EVOS_UXDesign
                      </li>
                      <div class="p-2"></div>
                                            
                      <label class="block my-3 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Belum ada file yang di upload</label>
                      <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                      <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>

                      <div class="mr-2">
                        <button type="button" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-3 text-center mr-2 my-4">Submit</button>
                      </div>
                     

                  </ul> 
                  </div>
                </div>
             
              </div>
            </div>
          </div>
        </div>
        {{-- upload foto --}}
        

      </div>
    </div>



@endSection