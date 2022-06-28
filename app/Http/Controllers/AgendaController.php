<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Agenda::with('teacher')->paginate();
        return view('agenda',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = Teacher::all();
        return view('tambahagenda', compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            return redirect('/agenda')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Agenda::with('teacher')->find($id);
        return view('showagenda', compact('data', 'teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Agenda::find($id);
        $data->update($request->all());
 
        return redirect()->route('agenda')->with('success','data berhasil UPDATE ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Agenda::find($id);
        $data->delete();
        
        return redirect()->route('agenda')->with('success','data di hapusx ');
    }
}
