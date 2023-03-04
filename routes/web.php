<?php

use App\Http\Controllers\InputAgtController;
use App\Models\InputAgt;
use Illuminate\Support\Facades\Route;


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
    return view('landing-page', [
        "title" => "Landing Page",
        "tema" => "TECHNO FAIR 10.0",
        "Sm" => "Seminar",
        "Ct" => "Competition",
        "Ws" => "Workshop"
    ]);
});



// secondary page
Route::get('/data-science', function () {
    return view('events/webinar/dataScience', [
        "title" => "Data Science",
        "active" => "bigdata",
    ]);
});

Route::get('/ui-ux', function () {
    return view('events/webinar/uiux', [
        "title" => "UI UX",
        "active" => "smartcity",
    ]);
});

Route::get('/product-design', function () {
    return view('events/workshop/productDesign', [
        "title" => "Product Design",
        "active" => "digital-marketing",
    ]);
});

Route::get('/sofware-enginnering', function () {
    return view('events/workshop/sofwareEnginner', [
        "title" => "Sofware Enginnering",
        "active" => "ui-design",
    ]);
});

Route::get('/competitive-programing', function () {
    return view('events/competition/competitivePrograming', [
        "title" => "Competitive Programing",
        "active" => "infografic",
    ]);
});

Route::get('/capture-flag', function () {
    return view('events/competition/captureFlag', [
        "title" => "Capture The Flag",
        "active" => "bigdata",
    ]);
});


// login register

Route::get('/login', function () {
    return view('login', [
        "title" => "Login",
        "active" => "login",
    ]);
});

Route::get('/register', function () {
    return view('register/index', [
        "title" => "register",
        "active" => "register",
    ]);
});

Route::get('/register/seminar', function () {
    return view('register/regisSeminar', [
        "title" => "Registrasion Seminar",
        "active" => "register",
    ]);
});

Route::get('/register/competiton', function () {
    return view('register/regisCompetition', [
        "title" => "Registration Competiton",
        "active" => "register",
    ]);
});

Route::get('/register/workshop', function () {
    return view('register/regisWorkshop', [
        "title" => "registration Workshop",
        "active" => "register",
    ]);
});

Route::get('/reset-password', function () {
    return view('resetPassword', [
        "title" => " Reset Password",
        "active" => "reset password",
    ]);
});


// Dashboard 
Route::get('/dashboard', function () {
    return view('dashboard/index', [
        "title" => "Dashboard",
        "active" => "dashboard",
    ]);
});

Route::get('/dashboard/template', function () {
    return view('dashboard/template', [
        "title" => "Dashboard",
        "active" => "dashboard",
    ]);
});

Route::get('/dashboard-main', function () {
    return view('dashboard/dashboard', [
        "title" => "Dashboard main",
        "active" => "dashboard",
    ]);
});

Route::get('/dashboard/tables', function () {
    return view('dashboard/tim', [
        "title" => "Tables",
        "active" => "dashboard",
    ]);
});

Route::get('/dashboard/billing', function () {
    return view('dashboard/pembayaran', [
        "title" => "Billing",
        "active" => "dashboard",
    ]);
});

Route::get('/dashboard/document', function () {
    return view('dashboard/berkas', [
        "title" => "Berkas",
        "active" => "dashboard",
    ]);
});

Route::get('/dashboard/profile', function () {
    return view('dashboard/profile', [
        "title" => "Profile",
        "active" => "dashboard",
    ]);
});

Route::get('/dashboard/virtual-reality', function () {
    return view('dashboard/virtual-reality', [
        "title" => "Pengumumman Finalis",
        "active" => "dashboard",
    ]);
});


// dashboard Admin
Route::get('/admin', function () {
    return view('dashboard/dashboard_admin/index', [
        "title" => "Admin",
        "active" => "admin",
    ]);
});

Route::get('/admin/competition/', function () {
    return view('dashboard/dashboard_admin/competition/capture_flag', [
        "title" => "Capture The Flag",
        "active" => "admin",
        "posts" => InputAgt::semua(),
    ]);
});

Route::get('/admin/competitive-programing/', [InputAgtController::class, 'index']);


Route::get('/admin/detail-cp/{slug}', [InputAgtController::class, 'show']);

Route::get('/admin/detail-ctf/{slug}', [InputAgtController::class, 'showCp']);

// Webinar Admin
Route::get('/admin/data-science/', function () {
    return view('dashboard/dashboard_admin/webinar/data-secience', [
        "title" => "Data Sscience",
        "active" => "admin",
    ]);
});

Route::get('/admin/uiux/', function () {
    return view('dashboard/dashboard_admin/webinar/ui-ux', [
        "title" => "UI UX",
        "active" => "admin",
    ]);
});

// Workshop Admin
Route::get('/admin/product-design/', function () {
    return view('dashboard/dashboard_admin/workshop/product-design', [
        "title" => "Product Design",
        "active" => "admin",
    ]);
});

Route::get('/admin/sofware-enginer/', function () {
    return view('dashboard/dashboard_admin/workshop/sofware-engineer', [
        "title" => "Sofware Enginer",
        "active" => "admin",
    ]);
});
