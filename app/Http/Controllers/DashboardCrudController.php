<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Competition;
use App\Models\Seminar;
use App\Models\Register;

class DashboardCrudController extends Controller
{
    public function detail()
    {
        return view('dashboard/admin/detail/index', [
            "title" => "Detail Informasi",
            "active" => "dashboard",
            "sidebar" => "sidebar", 
            "openclose" => Register::all(),
        ]);
    }

    public function edit($id, Request $request)
    {
        // return $request;
        $sports = Competition::find($id);
        $arts = Seminar::find($id);

        if (auth()->user()->category_id === 1) {
            return view('dashboard.user.data.edit_competition',
                [
                    "title" => "Form Ubah Data",
                    "active" => "datapeserta",
                    "sidebar" => "sidebar",   
                    "data_sport" => $sports,
                    "openclose" => Register::all(),  
                ]
            );
        } else {
            return view('dashboard.user.data.edit_seminarWorkshop', 
                [
                    "title" => "Form Ubah Data",
                    "active" => "datapeserta",
                    "sidebar" => "sidebar",
                    "data_art" => $arts,
                    "openclose" => Register::all(),  
                ]
            );
        }
    }

    public function update($id, Request $request, Competition $competition, Seminar $seminar) 
    {
        if (auth()->user()->category_id === 1) {
            $validateData = $request->validate([
                'username' => 'required|min:2|max:255',
                'ketua' => 'required|min:2|max:255',
                'email' => ['required','email:dns'],
                'phone' => 'required',
                'anggota' => 'required|min:2|max:1024',
                'category_id' => 'required',
            ]);
    
            $validateData['user_id'] = auth()->user()->id;
  
            $competition->updateOrCreate($validateData);
            $data = Competition::findOrFail($id);
            $data->delete();
            // $valorant->destroy($validateData);

            return redirect('/dashboard/data-peserta/')->with('success', 'Data berhasil diupdate');
        } else {
            $validateData = $request->validate([
                'username' => 'required|min:2|max:255',
                'instansi' => 'required|min:2|max:255',
                'email' => ['required','email:dns'],
                'phone' => 'required',
                'category_id' => 'required',
            ]);
    
            $validateData['user_id'] = auth()->user()->id;
    
            $seminar->updateOrCreate($validateData);
            $data = Seminar::findOrFail($id);
            $data->delete();
                            
            return redirect('/dashboard/data-peserta/')->with('success', 'Data berhasil diupdate');
        }
    }
    public function delete($id)
    {
        if (auth()->user()->category_id === 1) {
            $sport = Competition::findOrFail($id);
            $sport->delete();
    
            return redirect()->back()->with('danger', 'Data berhasil dihapus');
        } else {
            $sport = Seminar::findOrFail($id);
            $sport->delete();

            return redirect()->back()->with('danger', 'Data berhasil dihapus');
        }  
    }
}
