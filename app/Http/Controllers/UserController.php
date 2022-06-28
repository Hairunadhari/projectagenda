<?php

namespace App\Http\Controllers;

use App\Models\Agenda;

use App\Models\Teacher;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $tcr = Teacher::all();
        $data = Agenda::with('teacher')->paginate();
        return view('dashboards.users.index', compact('data','tcr'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'teacher_id' =>  'required',
            'matapelajaran' =>  'required',
            'materipelajaran' =>  'required',
            'jenispembelajaran' =>  'required',
            'linkpembelajaran' =>  'required',
            'absensi' =>  'required',
            'foto' =>  'required',  
            'kelas' =>  'required',
            'keterangan' =>  'required',
            'mulai' =>  'required',
            'selesai' =>  'required',
        ]);
    
        $data = Agenda::create($request->all());
            if($request->hasFile('foto')){
                $request->file('foto')->move('dokumentasi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            // }
            // if($request->has('user')){
            //     return back();
            }
            return redirect('/guru')->with('success', 'data berhasil ditambahkan');
    }
}
