<?php

namespace App\Http\Controllers\AppController;
use App\Http\Controllers\Controller;
use App\TahunAkademik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\VarDumper\Cloner\Data;

class TahunAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahunAkademiks = TahunAkademik::all();
        return view('app.tahunAkademik.index', ['tahunAkademiks'=>$tahunAkademiks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('app.tahunAkademik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tahunAkademiks = new TahunAkademik;
        $tahunAkademiks->id = $request->input("id");
        $tahunAkademiks->nama_tahun_akademik = $request->input("nama_tahun_akademik");
        $tahunAkademiks->keterangan = $request->input("keterangan");

        $tahunAkademiks->save();
        return redirect()->route("tahunAkademik.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function show(TahunAkademik $tahunAkademik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tahunAkademiks = TahunAkademik::find("$id");
        return view("app.tahunAkademik.edit" , ['data' => $tahunAkademiks]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = ['nama_tahun_akademik'=>$request->nama_tahun_akademik , 'keterangan'=>$request->keterangan];

        TahunAkademik::where('id',$id)->update($update);
        return redirect()->route('tahunAkademik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dl = TahunAkademik::find($id);
        $dl->delete();

        return redirect()->route('tahunAkademik.index');
    }
}
