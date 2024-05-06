<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <h2><span>TECHNOFAIR 10.0</span></h2>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class='sidebar-title'>Main Menu</li>
                    <li class="sidebar-item {{ ($active === "dashboard") ? 'active' : '' }}">
                        <a href="/dashboard" class='sidebar-link'>
                            <i data-feather="inbox" width="20"></i> 
                            <span>Dashboard</span>
                        </a> 
                    </li>            
                    <li class='sidebar-title'>Forms &amp; Tables</li>
                    
                    @foreach ($openclose as $oc)
                            @if ($oc->status === "open")
                            <li class="sidebar-item  {{ ($active === "datapeserta") ? 'active' : '' }}">
                                <a href="/dashboard/data-peserta/tambah-data"  class='sidebar-link'>
                                    <i data-feather="layout" width="20"></i> 
                                    <span>Data Peserta</span>
                                </a>    
                            </li>
                            @else
                            <li class="sidebar-item ">
                               
                                <a class="sidebar-link" aria-disabled="true">
                                    <i data-feather="layout" width="20"></i>
                                    <span> Pendaftaran Tutup</span>
                                </a>
                            </li>
                            @endif
                        
                    @endforeach
                    <li class="sidebar-item  {{ ($active === "berkas") ? 'active' : '' }}">
                        <a href="/dashboard/berkas-peserta/" class='sidebar-link'>
                            <i data-feather="file-plus" width="20"></i> 
                            <span>Berkas Dan Pembayaran</span>
                        </a>     
                    </li>
                    <li class='sidebar-title'>Pages</li>
                    
                    <li class="sidebar-item ">
                        <a href="/" class='sidebar-link'>
                            <i data-feather="home" width="20"></i> 
                            <span>Home</span>
                        </a>                    
                    </li>
                    <li class="sidebar-item  ">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" href="/" class='sidebar-link' style="background: white; border:none">
                                <i data-feather="log-out" width="20" class="ml-4"></i> 
                                <span>Logout</span> 
                            </button> 
                        </form>
                                            
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
    <div id="main">
        <nav class="navbar navbar-header navbar-expand navbar-light">
            <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
            <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                    <li class="dropdown nav-icon">
                        <a href="#" data-bs-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-lg-inline-block">
                                <i data-feather="bell"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                            <h6 class='py-2 px-4'>Notifications</h6>
                            <ul class="list-group rounded-none">
                                <li class="list-group-item border-0 align-items-start">
                                    <div class="avatar bg-success me-3">
                                        <span class="avatar-content"><i data-feather="home"></i></span>
                                    </div>
                                    <div>
                                        <h6 class='text-bold'>Selamat Datang 👋 </h6>
                                        <p class='text-xs'>
                                            Silahkan lengkapi semua data yang diperlukan untuk mengikuti perlombaan
                                        </p>
                                        <p class='text-xs'>
                                           Terimakasih sudah mau berpartisipasi sampai ketemu di Perlombaan 🙏
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown nav-icon me-2">
                        <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-lg-inline-block">
                                <i data-feather="mail"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" >
                            <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                            <div class="dropdown-divider"></div>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" href="/" class='sidebar-link' style="background: white; border:none">
                                    <i data-feather="log-out" width="20" class="ml-4"></i> 
                                    <span>Logout</span> 
                                </button> 
                            </form>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-none d-md-block d-lg-inline-block">Welcome, {{ auth()->user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="/"><i data-feather="home"></i> Home</a>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" href="/" class='sidebar-link' style="background: white; border:none">
                                    <i data-feather="log-out" width="20" class="mx-3"></i> 
                                    <span>Logout</span> 
                                </button> 
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

