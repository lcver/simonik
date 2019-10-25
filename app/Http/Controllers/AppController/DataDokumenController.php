<?php

namespace App\Http\Controllers\AppController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataDokumen;

class DataDokumenController extends Controller
{
    public function index()
    {
        return view('app.dokumenGuru.index');
    }

    public function upload()
    {
		return view('app.dataDokumen.index');
	}
 
	public function proses_upload(Request $request){
		$this->validate($request, [
			'rpp' => 'required'
		]);
		// menyimpan data file yang diupload ke variabel $file
		$rpp = $request->file('rpp');
		$silabus = $request->file('silabus');
		$prota = $request->file('prota');
        $prosem = $request->file('prosem');
        
		$d = new DataDokumen;

		$tujuan_upload = public_path('UploadedFile/doc/');

		// Nama File
		$nama_rpp = "";
		$nama_silabus = "";
		$nama_prota = "";
		$nama_prosem = "";

		if($rpp){
			$nama_rpp = rand().$rpp->getClientOriginalName();
			$rpp->move($tujuan_upload,$nama_rpp);
		}else if($silabus){
			$nama_silabus = rand().$silabus->getClientOriginalName();
			$silabus->move($tujuan_upload,$nama_silabus);
		}else if($prota){
			$nama_prota= rand().$prota->getClientOriginalName();
			$prota->move($tujuan_upload,$nama_prota);
		}else if($prosem){
			$prosem->move($tujuan_upload,$nama_prosem);
			$nama_prosem= rand().$prosem->getClientOriginalName();
		}
				

		// insert database 
		$d->guru_id =1;
		$d->rpp = $nama_rpp;
		$d->sillabus = $nama_silabus;
		$d->prota = $nama_prota;
		$d->prosem = $nama_prosem;

		$d->save();
        // upload file
		
		
		
		
		return redirect()->route('dataDokumen.index');
	}
		
	// 	$nama_file = rand().$rpp->getClientOriginalName();
	// 	$nama_silabus = rand().$silabus->getClientOriginalName();
	// 	$nama_prota= rand().$prota->getClientOriginalName();
	// 	$nama_prosem= rand().$prosem->getClientOriginalName();
    //     $tujuan_upload = public_path('UploadedFile/doc/');
        
	// 	$d->guru_id = 1;
	// 	$d->rpp = $nama_file;
	// 	$d->sillabus = $nama_silabus;
	// 	$d->prota = $nama_prota;
	// 	$d->prosem = $nama_prosem;
    //     $d->save();
        
	// 	$rpp->move($tujuan_upload,$nama_file);
	// 	$silabus->move($tujuan_upload,$nama_silabus);
	// 	$prota->move($tujuan_upload,$nama_prota);
    //     $prosem->move($tujuan_upload,$nama_prosem);
        
	// 	return redirect()->route('dokumenGuruIndex');
    // }
}
