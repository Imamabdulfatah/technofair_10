<?php

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

Route::get('/', function () {
    return view('landing-page', [
        "title" => "Landing Page",
    ]);
});

Route::get('/coba', function () {
    return view('layout/template');
});

Route::get('/big-data', function () {
    return view('events/webinar/bigData', [
        "title" => "Big Data",
        "active" => "bigdata",
    ]);
});

Route::get('/smart-city', function () {
    return view('events/webinar/smartCity', [
        "title" => "Smart City",
        "active" => "smartcity",
    ]);
});

Route::get('/digital-marketing', function () {
    return view('events/workshop/digitalMarketing', [
        "title" => "Digital Marketing",
        "active" => "digital-marketing",
    ]);
});

Route::get('/uidesign', function () {
    return view('events/workshop/uiDesign', [
        "title" => "UI Design",
        "active" => "ui-design",
    ]);
});

Route::get('/infografic', function () {
    return view('events/competition/infoGraphic', [
        "title" => "Infografic",
        "active" => "infografic",
    ]);
});

Route::get('/smart-fikti', function () {
    return view('events/competition/smartFikti', [
        "title" => "Smart City",
        "active" => "smartcity",
    ]);
});

Route::get('/capture-flag', function () {
    return view('events/competition/captureFlag', [
        "title" => "Capture The Flag",
        "active" => "bigdata",
    ]);
});

Route::get('/uxdesign', function () {
    return view('events/competition/uxDesign', [
        "title" => "UX Design",
        "active" => "ux-design",
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
    return view('register', [
        "title" => "register",
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
        "title" => "Virtual reality",
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
    ]);
});

Route::get('/admin/competitive-programing/', function () {
    return view('dashboard/dashboard_admin/competition/competitive-programing', [
        "title" => "Competitive Programing",
        "active" => "admin",
    ]);
});

Route::get('/admin/competitive-programing/detail', function () {
    return view('dashboard/dashboard_admin/detail/detail_competition', [
        "title" => "Detail Competitive Programing",
        "active" => "admin",
    ]);
});

Route::get('/admin/competitive-programing/detail-cp', function () {
    return view('dashboard/dashboard_admin/detail/detail_competitivePrograming', [
        "title" => "Detail Competitive Programing",
        "active" => "admin",
    ]);
});

Route::get('/admin/competition/detail-ctf', function () {
    return view('dashboard/dashboard_admin/detail/detail_ctf', [
        "title" => "Detail Competitive Programing",
        "active" => "admin",
    ]);
});


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

Route::get('/admin/product-design/', function () {
    return view('dashboard/dashboard_admin/workshop/product-design', [
        "title" => "Product Design",
        "active" => "admin",
    ]);
});

Route::get('/admin/sofware-enginer/', function () {
    return view('dashboard/dashboard_admin/workshop/sofware-engineer', [
        "title" => "Competitive Programing",
        "active" => "admin",
    ]);
});
