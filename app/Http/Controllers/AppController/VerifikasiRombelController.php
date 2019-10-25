<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jurusan;
use App\Siswa;

class VerifikasiRombelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $d['rombels'] = Siswa::select('rombel_saat_ini')->groupBy('rombel_saat_ini')->where('jurusan', '')->get();
        $d['jurusans'] = Jurusan::orderBy('kode_jurusan', 'ASC')->get();
        return view('app.verifikasiRombel.index', $d);
    }

    public function import(){

    }

    public function process_import(){

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rombel = $request->input('rombel');
        $tingkatan = $request->input('tingkatan');
        $jurusan = $request->input('jurusan');

        Siswa::where('rombel_saat_ini', $rombel)->update(['tingkatan' => $tingkatan, 'jurusan'=>$jurusan]);

        return redirect()->route('verifikasiRombel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    }

    public function verifRombel(Request $request){
        $rombel = $request->input('rombel');
        $tingkatan = $request->input('tingkatan');
        $jurusan = $request->input('jurusan');

        Siswa::where('rombel_saat_ini', $rombel)->update(['tingkatan' => $tingkatan, 'jurusan'=>$jurusan]);

        return redirect()->url('verifikasiRombel.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
