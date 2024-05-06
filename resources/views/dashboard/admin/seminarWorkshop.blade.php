@extends('layouts.main_dashboard')

@section('container')  
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ $title }}</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div id="table1" class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Silahkan Di isi sesuai Keterangan</h4>
            <div class="d-flex ">
                <i data-feather="download"></i>
            </div>
        </div>
        <div class="card-body px-0 pb-0">
            <div class="table-responsive">
                <table class='table mb-0' id="table1">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Instansi</th>
                            <th>No WhatsApp</th>
                            <th>Email</th>
                            <th>Berkas</th>
                            <th>Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($post as $s)
                        @if ($s->category_id === $categori)
                        <tr>
                          <td>{{ $s->username }}</td>
                          <td>{{ $s->instansi }}</td>
                          <td>{{ $s->phone }}</td>
                          <td>{{ $s->email }}</td>  
                          <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#berkas-{{ $s->id }}" data-bs-whatever="@getbootstrap">Approve</button>

                            <div class="modal fade" id="berkas-{{ $s->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Berkas {{ $s->username }}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <form action="{{ route('successVerifikasi', $s->id) }}" method="post">
                                    @method('put')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                          <span class="details" style="display: inline;">Isi (valid = sesuai | invalid = tidak sesuai)</span>
                                          <select class="form-control col-lg-12 col-md-12 col-sm-12 " name="konfirmasi_berkas" required>
                                              <option disabled selected value>Invalid</option>
                                              <option value="Valid">Valid</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                            <span class="badge bg-dark mt-2">{{ $s->konfirmasi_berkas }}</span>
                        </td>
                        <td>
                          <form action="{{ route('failed.verifikasi', $s->id) }}" method="get">
                            @csrf
                            <button type="submit" class="btn btn-danger">Disapprove</button>
                          </form>
                        </td>        
                        </tr>
                        @endif
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endSection