<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Do_;

class Dosencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $datadosen=Dosen::all();
        return view('admin.dosens' , ['dosens' =>$datadosen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formtambahdosen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            'nama'=>'required' ,
            'nidn'=>'required' ,
            'prodi_bim'=>'required' ,
            'bidang_kom'=>'required' ,
            'jabatan'=>'required' ,
            'kuota_bim'=>'required']);

            Dosen::create($data);
            return redirect('/dosens');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        return view('admin.formeditdosen' , compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen)
    {
        $data = $request->all([
            'nama'  ,
            'nidn' ,
            'prodi_bim' ,
            'bidang_kom' ,
            'jabatan' ,
            'kuota_bim']); 
        $dosen->update($data);
        return redirect('/dosens');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {

        Dosen::destroy('id', $dosen->id);

        return redirect('/dosens');
    }
}
