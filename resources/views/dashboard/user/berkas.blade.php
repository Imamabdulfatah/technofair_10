@extends('layouts.main_dashboard')

@section('container')    

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ $title }}</h3>
                <p class="text-subtitle text-muted">Upload berkas sesuai ketentuan </p>
                <h6 class="text-subtitle text-muted text-warning">Note : Setelah upload Berkas dan Pembayaran Tinggal tunggu konfirmasi panitia </h6>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-12 col-md-6" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (auth()->user()->category_id  === 1)
        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                        <h1 class="card-title mb-4">{{ $title }} Anda  
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInputDisabled" placeholder="Invalid" disabled>
                                <label for="floatingInputDisabled">
                                    @foreach ($data as $d)
                                    @if (auth()->user()->id === $d->user_id)
                                    | {{ $d->konfirmasi_berkas }} |
                                    @else
                                        
                                    @endif
                                @endforeach
                                </label>
                            </div>
                        </h1>
                        <h5>Jika sudah mengupload file dan belum ada konfirmasi disilahkan hubungi contact di ketentuan berkas</h5>
                        </div>
                        <div class="card-content">
                            
                        </div>
                        <div class="col-md-2 col-12 mx-4 my-2">
                            <div class="pl-3">
                            
                                <p class='text-xs'><span class="text-green"><i data-feather="bar-chart" width="15"></i>Keterangan </span></p>
                                <div class="legends">
                                    <div class="legend d-flex flex-row align-items-center">
                                        <div class='w-3 h-3 rounded-full bg-success me-2'></div><span class='text-xs'>Valid = Sesuai</span>
                                    </div>
                                    <div class="legend d-flex flex-row align-items-center">
                                        <div class='w-3 h-3 rounded-full bg-danger me-2'></div><span class='text-xs'>Invalid = Tidak sesuai</span>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <form method="post" action="{{ route('upload.berkas') }}" enctype="multipart/form-data" class="form form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h2 class="mb-4" class="card-title">Ketentuan Berkas</h2>
                                <ul>
                                    <p>1. Data Kartu tanda mahasiswa  untuk Capture the flag dan Competitive Programming disatukan ke dalam format file PDF/ ZIP.</p>
                                    <p>2. Format File (Ketua_Kompetisi_NoHP)
                                        contoh: Budi_capture the flag_021345678.pdf/zip</p>
                                    <p>3. Informasi lebih lanjut dapat menghubungi (081380857060 - Restu).</p>
                                </ul>
                                <h2 class="mb-4" class="card-title">Ketentuan Pembayaran</h2>
                                <ul>
                                    <p>1. HTM Pendaftaran</p>
                                    <li>Capture The Flag = Rp 80.000/ Tim</li>
                                    <li>Competitive Programming = Rp 80.000/ Tim</li>
                                    <p>2. Jika mengikuti 2 atau lebih kompetisi, mohon untuk disesuaikan. </p>
                                    <p>3. Lampirkan bukti pembayaran dengan format file (Ketua_RekeningPembayaran_bank)
                                        Contoh: AnnisaAmalia_AnnisaAmaliaFitri_BankDKI.pdf/jpg/png</p>
                                    <p>4. Pembayaran dapat melalui: </p>
                                    <li>BCA 7275393461 a/n Anggy Wulandari</li>
                                    <li>Dana/Spay 089601263564 a/n Anggy Wulandari</li>
                                </ul>
                                </div>
                            <div class="card-content -mt-4">
                                <div class="card-body">
                                    <div class="form-body">
                                        <a class="btn btn-outline-primary btn-lg" href="https://script.google.com/macros/s/AKfycbwDDg7e-r0sCsfqtpjH9XTlhoVxh1c7ENzvL2Z8iCHhmw2JpPMWaDU2stqkW3NaacQs2Q/exec"  target="_blank" rel="noopener noreferrer">UPLOAD BERKAS DISINI</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @else
        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                        <h1 class="card-title mb-4">{{ $title }} Anda  
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInputDisabled" placeholder="Invalid" disabled>
                                <label for="floatingInputDisabled">
                                    @foreach ($data as $d)
                                        @if (auth()->user()->id === $d->user_id)
                                        | {{ $d->konfirmasi_berkas }} |
                                        @else
                                            
                                        @endif
                                    @endforeach
                                </label>
                            </div>
                        </h1>
                        <h5>Jika sudah mengupload file dan belum ada konfirmasi disilahkan hubungi contact di ketentuan berkas</h5>
                        </div>
                        <div class="card-content">
                            
                        </div>
                        <div class="col-md-2 col-12 mx-4 my-2">
                            <div class="pl-3">
                            
                                <p class='text-xs'><span class="text-green"><i data-feather="bar-chart" width="15"></i>Keterangan </span></p>
                                <div class="legends">
                                    <div class="legend d-flex flex-row align-items-center">
                                        <div class='w-3 h-3 rounded-full bg-success me-2'></div><span class='text-xs'>Valid = Sesuai</span>
                                    </div>
                                    <div class="legend d-flex flex-row align-items-center">
                                        <div class='w-3 h-3 rounded-full bg-danger me-2'></div><span class='text-xs'>Invalid = Tidak sesuai</span>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                
                </div>
                <div class="col-md-6 col-12">
                    <form method="post" action="{{ route('upload.berkas') }}" enctype="multipart/form-data" class="form form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                            <h2 class="mb-4" class="card-title">Ketentuan Berkas</h2>
                            <ul>
                                <p>1. Data Kartu tanda mahasiswa  untuk Capture the flag dan Competitive Programming disatukan ke dalam format file PDF/ ZIP.</p>
                                <p>2. Format File (Ketua_Kompetisi_NoHP)
                                        contoh: Budi_capture the flag_021345678.pdf/zip</p>
                                <p>3. Informasi lebih lanjut dapat menghubungi (081380857060 - Restu).</p>
                            </ul>
                            <h2 class="mb-4" class="card-title">Ketentuan Pembayaran</h2>
                            <ul>
                                <p>1. Seminar</p>
                                <li>Rp 10.000 / Tiket</li>
                                <li>Rp 15.000 / 2Tiket</li>
                                <p class="mt-4">2. Workshop</p>
                                <li>Software Engineering = Rp 25.000/ Orang</li>
                                <li>Product Design = Rp 25.000/ Orang</li>
                                <p class="mt-4">3. Jika mengikuti 2 atau lebih kompetisi, mohon untuk disesuaikan. </p>
                                <p>4. Lampirkan bukti pembayaran dengan format file (Ketua_RekeningPembayaran_bank)
                                    Contoh: AnnisaAmalia_AnnisaAmaliaFitri_BankDKI.pdf/jpg/png</p>
                                <p>5. Pembayaran dapat melalui:</p>
                                <li>BCA 7275393461 a/n Anggy Wulandari</li>
                                <li>Dana/Spay 089601263564 a/n Anggy Wulandari</li>
                            </ul>
                            </div>
                            <div class="card-content -mt-4">
                                <div class="card-body">
                                        <div class="form-body">
                                            <a class="btn btn-outline-primary btn-lg" href="https://script.google.com/macros/s/AKfycbwDDg7e-r0sCsfqtpjH9XTlhoVxh1c7ENzvL2Z8iCHhmw2JpPMWaDU2stqkW3NaacQs2Q/exec"  target="_blank" rel="noopener noreferrer">UPLOAD BERKAS DISINI</a>
                                        
                                        </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @endif
   

@endSection


           