<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\DataMapel;
use Symfony\Component\VarDumper\Cloner\Data;

class DataMapelController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_mapel = DataMapel::all();

        return view('app.dataMapel.index' , compact('data_mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('app.dataMapel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mapels = new DataMapel;
        // $mapel ->timestamps = false;
        $mapels->id = $request->input('id');
        $mapels->kode_mapel = $request->input('kode_mapel');
        $mapels->nama_mapel = $request->input('nama_mapel');
        $mapels->jampelajaran = $request->input('jampelajaran');

        $mapels->save();
        return redirect()->route('dataMapel.index');

        // return redirect();
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

        $mapel = DataMapel::find($id);
        return view('app.dataMapel.edit', ['data' => $mapel]);
        //halaman edit

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
        $update = ['kode_mapel' => $request->kode_mapel, 'nama_mapel' => $request->nama_mapel,'jampelajaran'=> $request->jampelajaran];
        DataMapel::where('id', $id)->update($update);
        return redirect()->route('dataMapel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $dl = DataMapel::find($id);
      $dl->delete();

        return redirect()->route('dataMapel.index');
    }
}
