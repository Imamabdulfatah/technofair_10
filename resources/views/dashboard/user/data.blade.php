@extends('layouts.main_dashboard')

@section('container')  
<div class="main-content container-fluid">
    <div class="page-title mb-4">
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
    
    <section class="my-5">
      <h3>Isi Datadiri atau Tim anda untuk mengikuti Lomba</h3>
      <p class="text-subtitle text-muted">Jika sudah mengisi form Silahkan upload berkas di Berkas Pembayaran</p>
      <h6 class="text-warning">Note : Kalian bisa daftar lebih dari satu lomba dalam kategori yang sama dan pembayaran nanti silahkan disesuaikan</h6>
      <a href="/dashboard/data-peserta/tambah-data" class="btn btn-primary">Formulir Pendaftaran</a>  
      {{-- <a href="/dashboard/data-peserta/edit" class="btn btn-warning"><span data-feather="edit"></span></a> --}}
    </section>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-12 col-md-6" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session()->has('danger'))
        <div class="alert alert-danger alert-dismissible fade show col-12 col-md-6" role="alert">
            {{ session('danger') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (auth()->user()->category_id  === 1 )
        <div class="table-responsive">
            <table class="table table-hover table-light">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tim</th>
                    <th scope="col">Ketua</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Anggota</th>
                    <th>   </th>
                    <th scope="col">Lomba</th>
                    <th scope="col" class="mr-4">action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($post_sport as $s)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $s->username }}</td>
                    <td>{{ $s->ketua }}</td>
                    <td>{{ $s->phone }}</td>
                    <td>{{ $s->email }}</td>
                    <td colspan="2">{{ $s->anggota }}</td>
                
                    @if ($s->category_id === 1)
                        <td>Capture The Flag </td>
                    @else
                        <td>Competitive Programming</td>  
                    @endif
                    
            
                    <td>
                        <div>
                            <a href="{{ route('crud.update', $s->id) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                        </div>
                        <div class="my-2">
                            <form action="{{ route('crud.delete', $s->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah data yakin untuk dihapus?')"><span data-feather="x-circle"></span></i></button>
                            </form>
                        </div>
                     
                    </td>
                </tr>
                @endforeach
                
                </tbody>
            </table>
            </div>
    @else
        <div class="table-responsive">
            <table class="table table-hover table-light">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Instansi</th>
                <th scope="col">No HP</th>
                <th scope="col">Email</th>
                <th scope="col">Categori</th>
                <th scope="col" class="mr-4">action</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post_art as $s)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->username }}</td>
                <td>{{ $s->instansi }}</td>
                <td>{{ $s->phone }}</td>
                <td>{{ $s->email }}</td>
                
                @if ($s->category_id === 3)
                    <td>Data Science</td>
                @elseif ($s->category_id === 4)
                    <td>UI UX</td>
                @elseif ($s->category_id === 5)
                    <td>Sofware Engineering</td>
                @else 
                    <td>Product Design</td>
                @endif
                <td>
                    <a href="/dashboard/data-peserta/edit/bxiuedhux37dx7x73/{{ $s->id }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                    {{-- <a href="/dashboard/data-peserta/{{ $s->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a> --}}
                </td>
                <td>
                    <form action="{{ route('crud.delete', $s->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Apakah data yakin untuk dihapus?')"><span data-feather="x-circle"></span></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
                
            </tbody>
            </table>
        </div>
      
    @endif
   
@endSection