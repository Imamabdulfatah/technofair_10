<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InputAgt;

class InputAgtController extends Controller
{
    public function index()
    {
        return view('dashboard/dashboard_admin/competition/competitive-programing', [
            "title" => "Competitive Programing",
            "active" => "admin",
            "postcp" => InputAgt::cp(),
        ]);
    }

    // detail anggota tim

    public function show($slug)
    {
        return view('dashboard/dashboard_admin/detail/detail_competitivePrograming', [
            "title" => "Detail Anggota CP",
            "active" => "admin",
            "detail" => InputAgt::find($slug)
        ]);
    }
}
