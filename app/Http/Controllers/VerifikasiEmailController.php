<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;
use App\Models\Seminar;

use App\Mail\FailedVerifikasi;
use App\Mail\SuccessVerifikasi;
use Illuminate\Support\Facades\Mail;

class VerifikasiEmailController extends Controller
{
    public function successCompetition($id, Request $request, Competition $competition)
    {
        $data = Competition::findOrFail($id);

        $validateData = $request->validate([
            'konfirmasi_berkas' => 'required',
        ]);
        // return $id;

        $validateData['user_id'] = $data->user_id;
        $validateData['category_id'] = $data->category_id;
        $validateData['username'] = $data->username;
        $validateData['ketua'] = $data->ketua;
        $validateData['email'] = $data->email;
        $validateData['phone'] = $data->phone;
        $validateData['anggota'] = $data->anggota;

        // return $validateData;

        $competition->updateOrCreate($validateData);

        $data = Competition::findOrFail($id);
        $data->delete();
        

        $mail = $data->email;
        
        Mail::to($mail)->send(new SuccessVerifikasi());

        return redirect('/admin/data-mobile-legends')->with('success', 'Success, Email Konfirmasi telah dikirim ');
    }

    public function failedCompetition($id)
    {
        $data = Competition::findOrFail($id);
        $mail = $data->email;
        
        Mail::to($mail)->send(new FailedVerifikasi());

        return redirect('/admin/data-mobile-legends')->with('success', 'Pesan tidak sesuai');
    }
}
