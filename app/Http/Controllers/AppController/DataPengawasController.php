<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\DataSekolah;

class DataPengawasController extends Controller
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
        $d['dataPengawas'] = User::where('role', 'Pengawas')->paginate(10);
        $d['sekolahs'] = DataSekolah::orderBy('kode_sekolah', 'ASC')->get();
        if ($r->ajax()) {
            return view('app.dataPengawas.presult', $d);
        }
        else{
            return view('app.dataPengawas.index', $d);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['sekolahs'] = DataSekolah::orderBy('kode_sekolah', 'ASC')->get();
        return view('app.dataPengawas.add', $d);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d = new User;
        $d->name = $request->input('name');
        $d->email = $request->input('email');
        $d->password = Hash::make($request->input('password'));

        $d->id_data_sekolah = implode($request->input('id_data_sekolah'), ', ');

        $d->role = "Pengawas";

        $d->save();

        return redirect()->route('dataPengawas.index')->with('alertCreate', $request->input('kode_sekolah'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $d['d'] = User::find($id);
        $d['sekolahs'] = DataSekolah::orderBy('kode_sekolah', 'ASC')->get();
        return view('app.dataPengawas.show', $d);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d['d'] = User::find($id);
        $d['sekolahs'] = DataSekolah::orderBy('kode_sekolah', 'ASC')->get();
        return view('app.dataPengawas.edit', $d);
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
        $d = User::find($id);
        $d->name = $request->input('name');
        $d->email = $request->input('email');

        if(!empty($request->input('password'))){
            $d->password = Hash::make($request->input('password'));
        }

        $d->id_data_sekolah = implode($request->input('id_data_sekolah'), ', ');

        $d->role = "Pengawas";

        $d->save();

        return redirect()->route('dataPengawas.index')->with('alertCreate', $request->input('kode_sekolah'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = User::find($id);
        $email = $d->email;

        $d->delete();

        return redirect()->route('dataPengawas.index')->with('alertCreate', $email);
    }
}
