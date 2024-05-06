@extends('layouts.main_dashboard')

@section('container')
   
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>{{ $active }}</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
    </div>
    <section class="section">
        <div class="row mb-2">
            <div class="col-12 col-md-6">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column ">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h2 class='card-title'>Competition</h2>
                                <div class="card-right d-flex align-items-center">
                                    <p> < 3 > </p>
                                </div>
                            </div>
                            <div class="card-right d-flex align-items-center mx-auto">
                                <h6 class=" text-white">Jumlah data peserta yang mengikuti</h6>
                            </div>
                            <div class="chart-wrapper mx-auto">
                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Selengkapnya
                                    </button>
                                    <ul class="dropdown-menu mx-auto">
                                      <h4 class="mb-3 mx-4">Capture The Flag</h4>
                                      <li class="mb-3 mx-4">
                                        > @foreach ($sports as $sport) 
                                            @if ($sport->category_id === 1)
                                                <td>{{ $loop->last  }}</td>
                                            @endif @endforeach Peserta
                                            
                                      </li>
                                      <h4 class="mb-3 mx-4">Competitive Programming</h4>
                                      <li class="mb-3 mx-4">
                                        > @foreach ($sports as $sport)
                                            @if ($sport->category_id === 2)
                                                <td>{{ $loop->last }}</td>
                                            @endif
                                        @endforeach Peserta
                                      </li>
                                    </ul>
                                  </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Seminar Workshop</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p> < 3 >  </p>
                                </div>
                            </div>
                            <div class="card-right d-flex align-items-center mx-auto">
                                <h6 class=" text-white">Jumlah data peserta yang mengikuti</h6>
                            </div>
                            <div class="chart-wrapper mx-auto">
                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Selengkapnya
                                    </button>
                                    <ul class="dropdown-menu mx-auto">
                                      <h4 class="mb-3 mx-4">Internet Of things</h4>
                                      <li class="mb-3 mx-4">
                                        > @foreach ($arts as $art) 
                                            @if ($art->category_id === 4)
                                                <td>{{ $loop->last }}</td>
                                            @endif @endforeach Peserta 
                                      </li>
                                      <h4 class="mb-3 mx-4">UI UX</h4>
                                      <li class="mb-3 mx-4">
                                        > @foreach ($arts as $art) 
                                        @if ($art->category_id === 5)
                                            <td>{{ $loop->last }}</td>
                                        @endif @endforeach Peserta
                                      </li>
                                      <h4 class="mb-3 mx-4">Saofware Engineering</h4>
                                      <li class="mb-3 mx-4">
                                        > @foreach ($arts as $art) 
                                        @if ($art->category_id === 6)
                                            <td>{{ $loop->last}}</td>
                                        @endif @endforeach Peserta
                                      </li>
                                      <h4 class="mb-3 mx-4">Product Design</h4>
                                      <li class="mb-3 mx-4">
                                        > @foreach ($arts as $art) 
                                        @if ($art->category_id === 6)
                                            <td>{{ $loop->last}}</td>
                                        @endif @endforeach Peserta
                                    </li>
                                    </ul>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mb-4">
            <div class="col-12 col-md-6">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show col-12 col-md-6" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class='card-heading p-1 pl-3'>STATUS PENDAFTARAN</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="pl-3">   
                                    <p class='text-xs'><span class="text-green"><i data-feather="bar-chart" width="15"></i>Keterangan </span></p>
                                    <div class="legends">
                                        <div class="legend d-flex flex-row align-items-center">
                                            <div class='w-3 h-3 rounded-full bg-success me-2'></div><span class='text-xs'>Open Registrasi</span>
                                        </div>
                                        <div class="legend d-flex flex-row align-items-center">
                                            <div class='w-3 h-3 rounded-full bg-danger me-2'></div><span class='text-xs'>Close Registrasi</span>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="chart-wrapper mx-auto">
                                    <div class="card text-center">
                                        <div class="input-box p-4">
                                            <div class="form-group">
                                                @foreach ($openclose as $s)
                                                <form action="{{ route('status.update', $s->id) }}" method="post">
                                                    @method('put')
                                                    @csrf
                                                    <span class="details" style="display: inline;">Keterangan</span>
                                                    <select class="form-control col-lg-12 col-md-12 col-sm-12"  name="status" id="status" required>
                                                        <option disabled selected value>{{ $s->status }}</option>
                                                        <option value="open" class=" {{ ($s->status === "open") ? 'd-none' : '' }}">Open Registrasi</option>
                                                        <option value="close" class="{{ ($s->status === "close") ? 'd-none' : '' }}">Close Registrasi</option>                        
                                                    </select>
                                                    <button class="badge bg-dark border-0 mt-4" onclick="return confirm('Apakah data yakin mengubah sistem registrasi ?')">Ubah Status</button>
                                                </form>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 ">
                <div class="card widget-todo mx-auto">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title d-flex">
                            <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Kumpulan Data Berkas danPembayaran 
                        </h4>
                    </div>
                    <div class="card-body px-4 py-1 absolute">
                        <div >
                            <div class="my-4  absolute ml-2">
                                <a href="https://docs.google.com/spreadsheets/d/1Q1ET_qwcaZ-BSifZaSbsAbXCbSzpjzhS3AoN2ATHBWw/edit?usp=share_link" class="btn btn-outline-success btn-lg " target="_blank" rel="noopener noreferrer">Pembayaran Berkas - Sport - Google Drive</a>
                            </div>
                        </div> 
                    </div>
                    <div class="card-body px-4 py-1 absolute">
                        <div >
                            <div class="my-4  absolute ml-2">
                                <a href="https://docs.google.com/spreadsheets/d/1Xlb9v2Wyeuk_JxsTapOAICH8VNbkdevDzvpyB_i26HU/edit?usp=share_link" class="btn btn-outline-success btn-lg " target="_blank" rel="noopener noreferrer">Pembayaran Berkas - Art - Google Drive</a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
           
        </div>
        
    </section>
    
@endSection

           