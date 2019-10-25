<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\DataSiswaImport;
use App\DataSiswa;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        $d['siswa'] = DataSiswa::orderBy('nama', 'ASC')->paginate(10);
        if ($r->ajax()) {
            return view('app.dataSiswa.presult', $d);
        }
        else{
            return view('app.dataSiswa.index', $d);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rombels = DataSiswa::select('rombel_saat_ini')->groupBy('rombel_saat_ini')->get();
        return view('app.dataSiswa.create', compact('rombels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
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
        return view('app.dataSiswa.edit');
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
        //
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

    public function store_excel(Request $request){
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('fileSiswa',$nama_file);

		// import data
		Excel::import(new DataSiswaImport, public_path('/fileSiswa/'.$nama_file));

		// notifikasi dengan session
		// Session::flash('sukses','Data Siswa Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect('superAdmin/dataSiswa')->with('status', 'Data Siswa Berhasil Di Impor!');
    }
}
