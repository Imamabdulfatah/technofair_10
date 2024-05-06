<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\Register;
use App\Models\Seminar;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard/admin/index', [
            "title" => "Admin",
            "active" => "dashboard",
            "sidebar" => "sidebar_admin", 
            "sports" =>  Competition::all(),
            "arts" => Seminar::all(),
            "openclose" => Register::all(),
        ]);
    }

    public function update($id ,Request $request, Register $register)
    {
        // return $request;
        $validateData = $request->validate([
            'status' => 'required',
        ]);

        $register->updateOrCreate($validateData);
        $data = Register::findOrFail($id);
        $data->delete();
        // $valorant->destroy($validateData);

        return redirect('/admin')->with('success', 'Status Pendaftaran berhasil diupdate');
    }


    public function captureFlag()
    {    
        return view('dashboard/admin/competition', [
            "title" => "Data Peserta Capture The Flag",
            "active" => "competition",
            "sidebar" => "sidebar_admin",
            "post" => Competition::all(),
            "categori" => 1
        ]);
    }

   

    public function competitiveProgramming()
    {    
        return view('dashboard/admin/competition', [
            "title" => "Data Peserta Competitive Programming",
            "active" => "competition",
            "sidebar" => "sidebar_admin",
            "post" =>  Competition::all(),
            "categori" => 2
        ]);
    }

    public function dataScience()
    {
        return view('dashboard/admin/seminarWorkshop', [
            "title" => "Data Peserta Data Science",
            "active" => "seminar",
            "sidebar" => "sidebar_admin",
            "post" => Seminar::all(),
            "categori" => 3
        ]);
    }

    public function uiux()
    {
        return view('dashboard/admin/seminarWorkshop', [
            "title" => "Data Peserta UI UX",
            "active" => "seminar",
            "sidebar" => "sidebar_admin",
            "post" => Seminar::all(),
            "categori" => 4
        ]);
    }

    public function sofwareEginnering()
    {
        return view('dashboard/admin/seminarWorkshop', [
            "title" => "Data Peserta Sofware Enginnering",
            "active" => "workshop",
            "sidebar" => "sidebar_admin",
            "post" => Seminar::all(),
            "categori" => 5
        ]);
    }

    public function productDesign()
    {
        return view('dashboard/admin/seminarWorkshop', [
            "title" => "Data Peserta Product Design",
            "active" => "workshop",
            "sidebar" => "sidebar_admin",
            "post" => Seminar::all(),
            "categori" => 6
        ]);
    }
}
