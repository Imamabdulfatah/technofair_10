@extends('layouts.main_dashboard')

@section('container')
      

    
<div class="main-content container-fluid">
    <div class="jumbotron bg-white mx-auto text-center bg-image rounded-3">
        <h1 class="display-4 mx-4">Welcome To TECHNOFAIR 10.0</h1>
        <img src="/asset/header_new.png" class="img-fluid"  width="1000" height="300" alt="competition">
        <p class="lead mt-4">Isi datadiri atau tim dibagian data peserta </p>
        <p class="lead">Masukan berkas dan bukti pembayaran yang ditentukan dibagian berkas dan pembayaran</p>
        <p class="lead">Tunggu Konfirmasi dari admin lewat Email</p>
        <hr class="my-4">
        <a class="btn btn-outline-primary btn-lg mb-4" href="/dashboard/detail" role="button">Detail Informasi</a>
    </div>
</div>
@endSection

           