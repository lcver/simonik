<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataGuru;


class DataGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        $guru = DataGuru::orderBy('nip','DESC')->paginate(10);

        if ($r->ajax()) {
            return view('app.dataGuru.presult', compact('guru'));
        }
        else{
            return view('app.dataGuru.index', compact('guru'));
        }

        // $guru1 = DataGuru::orderBy('nama')->where('nip','<>', '')->get();
        // $guru2 = DataGuru::orderBy('nama')->where('nip', '')->get();

        // $data['guru'] = '';
        // $data['guru'] .= $guru1;
        // $data['guru'] .= $guru2;

        // return view('app.dataGuru.index', ['guru'=>$guru1]);
        // dd($data);
        
       
        return view('app.dataGuru.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.dataGuru.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d = new DataGuru;
        // $d->id = $request->input('id');
        $d->nama = $request->input('nama');
        $d->nip = $request->input('nip');
        $d->nuptk = $request->input('NULL');
        $d->status_kepegawaian = $request->input('status_kepegawaian');

        $d->save();
        
        
        return redirect()->route('dataGuru.index');
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
        $guru = DataGuru::findOrFail($id);
        // return view('app.dataGuru.edit', ['guru' => $guru]);
        return view('app.dataGuru.edit', compact('guru'));
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
        // $d = DataGuru::find($id);
        // $d->id = $request->input('id');
        // $d->nama = $request->input('nama');
        // $d->nip = $request->input('nip');
        // $d->status_kepegawaian = $request->input('status_kepegawaian');

        // $d->save();
        
        // return redirect()->route('dataGuru.index');

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nip' => 'required|max:255',
            'status_kepegawaian' => 'required|max:255',
        ]);
        DataGuru::whereId($id)->update($validatedData);

        return redirect()->route('dataGuru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = DataGuru::find($id);
        $guru->delete();

        return redirect()->route('dataGuru.index');
    }
}
