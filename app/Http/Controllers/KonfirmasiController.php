<?php

namespace App\Http\Controllers;


use App\Models\Competition;
use App\Models\Seminar;
use Illuminate\Http\Request;
use App\Models\Register;

class KonfirmasiController extends Controller
{
    public function berkas()
    {
        if (auth()->user()->category_id === 1) {
            return view('dashboard.user.berkas',
                [
                    "title" => "Berkas",
                    "active" => "berkas",
                    "sidebar" => "sidebar",
                    "mobileLegends" => "fee perlombaan : Rp. 50.000/tim",
                    "futsal" => "fee perlombaan : Rp. 100.000/tim",
                    "basket" => "fee perlombaan : Rp. 100.000/tim", 
                    "badmminton" => "fee perlombaan : Rp. 30.000/tim",
                    "data" =>  Competition::all(),
                    "openclose" => Register::all(),        
                ]
            );
        } else {
            return view('dashboard.user.berkas',
                [
                    "title" => "Berkas",
                    "active" => "berkas",
                    "sidebar" => "sidebar",  
                    "solovocal" => "fee perlombaan : Rp. 30.000/orang",
                    "poster" => "fee perlombaan : Rp. 30.000/orang", 
                    "data" =>  Seminar::all(),
                    "openclose" => Register::all(),              
                ]
            );
        }   
    }

    public function payment()
    {
        if (auth()->user()->category_id === 1) {
            return view('dashboard.user.pembayaran',
                [
                    "title" => "Pembayaran",
                    "active" => "pembayaran",
                    "sidebar" => "sidebar",  
                    "data" =>  Competition::all(),
                    "openclose" => Register::all(),               
                ]
            );
        } else {
            
            return view('dashboard.user.pembayaran',
                [
                    "title" => "Pembayaran",
                    "active" => "pembayaran",
                    "sidebar" => "sidebar",  
                    "data" =>  Seminar::all(),
                    "openclose" => Register::all(),                 
                ]
            );
        }
    }
}
