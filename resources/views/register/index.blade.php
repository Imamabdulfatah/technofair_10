@extends('layouts.mainRelog')

@section('container')

<section class="bg-white sm:mt-20 dark:bg-gray-900">
   
    <div class="container">
        <div class="mb-12 mt-40 text-center">
            <h1 class="text-3xl font-bold">Pilih Opsi Registrasi</h1>
            
        </div>
        
        <hr class="h-px my-8 bg-gray-500 border-0 dark:bg-gray-700">

        <div class="row">
                <div class="col-md-4">
                    <a href="/register/seminar">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500?webinar" class="card-img" alt="">
                            {{-- ditambah d-flex agar ketengah --}}
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                {{-- flex-fill gar penuh --}}
                                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">Seminar</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/register/competiton">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500?competition" class="card-img" alt="">
                            {{-- ditambah d-flex agar ketengah --}}
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                {{-- flex-fill gar penuh --}}
                                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">Competition </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/register/workshop">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500?workshop" class="card-img" alt="">
                            {{-- ditambah d-flex agar ketengah --}}
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                {{-- flex-fill gar penuh --}}
                                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">Workshop</h5>
                            </div>
                        </div>
                    </a>
                </div>
        </div>
        <hr class="h-px my-8 bg-gray-500 border-0 dark:bg-gray-700">
    </div>

</section>
@endSection