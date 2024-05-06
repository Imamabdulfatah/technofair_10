<?php

// use App\Models\InputData;

use App\Models\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\DashboardCrudController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardTambahController;
use App\Http\Controllers\VerifikasiEmailController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Landing Page
Route::get('/', function () {
    return view('index', [
        "title" => "Landing Page",
        "navbar" => "index",
        "tema" => "TECHNO FAIR 10.0",
        "Sm" => "Seminar",
        "Ct" => "Competition",
        "Ws" => "Workshop",
        "active" => "mainpage"
    ]);
});


// secondary page
Route::get('/internet-of-things',[EventController::class, 'satu']);

Route::get('/ui-ux', [EventController::class, 'dua']);

Route::get('/product-design', [EventController::class, 'tiga']);

Route::get('/sofware-enginnering',[EventController::class, 'empat']);

Route::get('/competitive-programing', [EventController::class, 'lima']);

Route::get('/capture-flag',[EventController::class, 'enam']);

// Login Registration
Route::get('/option',[RegisterController::class, 'option']);
Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout'])->middleware('auth');

Route::get('/registration/workshop',[RegisterController::class, 'workshop'])->middleware('guest');
Route::get('/registration/seminar',[RegisterController::class, 'seminar'])->middleware('guest');
Route::get('/registration/competition',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/registration',[RegisterController::class, 'store'])->name('registration');


// Dashboard User
Route::get('/dashboard', function(){
    return view('dashboard/user/index', [
        "title" => "Dashboard",
        "active" => "dashboard",
        "sidebar" => "sidebar",
        "img" => "img/internet/welcome.jpg",
        "openclose" => Register::all(),
    ]);
})->middleware('auth');

Route::get('/dashboard/detail', [DashboardCrudController::class, 'detail'])->middleware('auth');
Route::get('/dashboard/data-peserta', [DashboardTambahController::class, 'index'])->middleware('auth');
Route::get('/dashboard/data-peserta/tambah-data', [DashboardTambahController::class, 'create'])->middleware('auth');
Route::post('/dashboard/data-peserta/tambah-data/sukses', [DashboardTambahController::class, 'store'])->middleware('auth');

// Route::resource('/dashboard/data-peserta/', DashboardPostController::class)->middleware('auth');

Route::delete('/dashboard/data-peserta/hapus/{id}', [DashboardCrudController::class, 'delete'])->middleware('auth')->name('crud.delete');
Route::get('/dashboard/data-peserta/edit/bxiuedhux37dx7x73/{id}', [DashboardCrudController::class, 'edit'])->name('crud.update')->middleware('auth');
Route::patch('/dashboard/data-peserta/edit/bxiuedhux37dx7x73/{id}', [DashboardCrudController::class, 'update'])->middleware('auth');

Route::get('/dashboard/berkas-peserta/',[KonfirmasiController::class, 'berkas'])->middleware('auth');
Route::post('/dashboard/berkas-peserta/',[KonfirmasiController::class, 'uploadBerkas'])->name('upload.berkas')->middleware('auth');

// Dashboard Admin

Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::put('/admin/{id}', [AdminController::class, 'update'])->name('status.update')->middleware('admin');
Route::get('/admin/data-capture-flag', [AdminController::class, 'captureFlag'])->middleware('admin');
Route::get('/admin/data-competitive-programing', [AdminController::class, 'competitiveProgramming'])->middleware('admin');
Route::get('/admin/data-peserta-data-science', [AdminController::class, 'dataScience'])->middleware('admin');
Route::get('/admin/data-ui-ux', [AdminController::class, 'uiux'])->middleware('admin');
Route::get('/admin/data-sofware-engineering', [AdminController::class, 'sofwareEginnering'])->middleware('admin');
Route::get('/admin/data-product-design', [AdminController::class, 'productDesign'])->middleware('admin');


// verifikasi berkas pembayaran
Route::put('/admin/competition/7686f5frtctrd65fr/{id}', [VerifikasiEmailController::class, 'successCompetition'])->name('successVerifikasi')->middleware('admin');

Route::get('/admin/competition/7686f5frtctrd65fr/{id}', [VerifikasiEmailController::class, 'failedCompetition'])->name('failed.verifikasi')->middleware('admin');

