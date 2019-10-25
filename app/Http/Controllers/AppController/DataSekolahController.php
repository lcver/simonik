<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Kota;
use App\DataSekolah;

class DataSekolahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        // $in = "";
        // for($i = $r->index; $i <= 10; $i++){
        //     $in .= $i;
        // }
        // $d["index"] = $in;
        $d['sekolahs'] = DataSekolah::orderBy('kode_sekolah', 'ASC')->paginate(10);
        if ($r->ajax()) {
            return view('app.dataSekolah.presult', $d);
        }
        else{
            return view('app.dataSekolah.index', $d);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['kotas'] = Kota::orderBy('kode', 'ASC')->get();
        return view('app.dataSekolah.add', $d);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d = new DataSekolah;
        $d->id_kota = $request->input('id_kota');
        $d->kode_sekolah = $request->input('kode_sekolah');
        $d->npsn_sekolah = $request->input('npsn_sekolah');
        $d->nama_sekolah = $request->input('nama_sekolah');
        $d->kepala_sekolah = $request->input('kepala_sekolah');
        $d->kurikulum = $request->input('kurikulum');
        $d->alamat_sekolah = $request->input('alamat_sekolah');

        $d->save();
        
        return redirect()->route('dataSekolah.index')->with('alertCreate', $request->input('kode_sekolah'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $d['sekolahs'] = DataSekolah::where('id_sekolah', $id)->first();
        $d['kotas'] = Kota::orderBy('id', 'ASC')->get();
        return view('app.dataSekolah.show', $d);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d['sekolahs'] = DataSekolah::where('id_sekolah', $id)->first();
        $d['kotas'] = Kota::orderBy('id', 'ASC')->get();
        return view('app.dataSekolah.edit', $d);
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
        $d = DataSekolah::where('id_sekolah', $id)->get();
        $d->id_kota = $request->input('id_kota');
        $d->kode_sekolah = $request->input('kode_sekolah');
        $d->npsn_sekolah = $request->input('npsn_sekolah');
        $d->nama_sekolah = $request->input('nama_sekolah');
        $d->kepala_sekolah = $request->input('kepala_sekolah');
        $d->kurikulum = $request->input('kurikulum');
        $d->alamat_sekolah = $request->input('alamat_sekolah');

        $d->save();
        
        return redirect()->route('dataSekolah.index')->with('alertCreate', $request->input('kode_sekolah'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = DataSekolah::where('id_sekolah', $id)->get();
        $kode_sekolah = $d->kode_sekolah;

        $d->delete();

        return redirect()->route('dataSekolah.index')->with('alertCreate', $kode_sekolah);
    }
}
