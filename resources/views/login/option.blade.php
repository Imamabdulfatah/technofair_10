@extends('layouts.main')

@section('container')

<section class="bg-white sm:mt-20">
    <div class="container">
        <div class="mb-12 mt-24 text-center">
            <h1 class="text-3xl font-bold">Pilih Opsi Category Event</h1>
        </div>
        <hr class="h-px my-8 bg-gray-500 border-0">
        <div class="row place-content-center">
                <div class="col-md-4">
                    <a href="/registration/seminar">
                        <div class="card bg-dark text-white">
                            <img src="/img/event/seminar.jpg" class="card-img" alt="">
                            {{-- ditambah d-flex agar ketengah --}}
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                {{-- flex-fill gar penuh --}}
                                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">Seminar dan Workshop</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/registration/competition">
                        <div class="card bg-dark text-white">
                            <img src="/img/event/competition.jpg" class="card-img" alt="">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">Competition </h5>
                            </div>
                        </div>
                    </a>
                </div>
        </div>
        <hr class="h-px my-8 bg-gray-500 border-0">
    </div>
</section>
@endSection