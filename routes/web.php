<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// use Symfony\Component\Routing\Route;
Route::get('/','FrontEndController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'function',  'middleware' => 'auth'], function(){
    Route::get('loggedIn', 'FunctionController@loggedIn');
});
Route::group(['prefix' => 'superAdmin',  'middleware' => 'role.superAdmin'], function(){
    Route::resource('dataSekolah', 'AppController\DataSekolahController', []);
    Route::resource('administratorSekolah', 'AppController\AdministratorSekolahController', [
        'except' => ['show']
    ]);
    Route::resource('dataPengawas', 'AppController\DataPengawasController', [
    ]);
    Route::resource('dataGuru', 'AppController\DataGuruController', [
        'except' => ['show']
    ]);
    Route::post('/dataSiswa/store_excel', 'AppController\DataSiswaController@store_excel')->name('siswa_store_excel');
    Route::resource('dataSiswa', 'AppController\DataSiswaController');
    Route::resource('dataJurusan', 'AppController\DataJurusanController', [
        'except' => ['show']
    ]);
});
Route::group(['prefix' => 'guru', 'middleware' => ['role.guru', 'auth']], function(){
    // Route::post("/verifikasiRombel/verif_rombel", "AppController\VerifikasiRombelController@verif_rombel");
    // Route::post("/verifikasiRombel/verif_rombel", "AppController\VerifikasiRombelController@verif_rombel");
});
Route::group(['prefix' => 'guru', 'middleware' => ['role.guru', 'auth']], function(){
    Route::resource('dataMapel', 'AppController\DataMapelController');
    Route::resource('tahunAkademik', 'AppController\TahunAkademikController');
    
    Route::resource('dataDokumen', 'AppController\DataDokumenController', [
        'except' => ['show']
    ]);
    Route::get('/dokumen', 'AppController\DataDokumenController@index')->name('dokumenGuruIndex');
    Route::post('/dokumen', 'AppController\DataDokumenController@proses_upload')->name('dokumenGuruPost');
    Route::resource('verifikasiRombel', 'AppController\VerifikasiRombelController', [
        'except' => ['show']
    ]);
    Route::resource('dataDokumen', 'AppController\DataDokumenController', [
        'except' => ['show']
    ]);
     Route::resource('kehadiranSiswa', 'AppController\KehadiranSiswaController', [
        'except' => ['show']
    ]);
    Route::get('/upload', 'AppController\DataDokumenController@upload');
    Route::post('/upload/proses', 'AppController\DataDokumenController@proses_upload');
});
Route::group(['prefix' => 'admin', 'middleware' => ['role.admin', 'auth']], function(){
    Route::resource('dataMapel', 'AppController\DataMapelController');
    Route::resource('tahunAkademik', 'AppController\TahunAkademikController');
    Route::resource('AdministratorSekolah', 'AppController\AdministratorSekolahController', [
        'except' => ['show']
    ]);
    Route::resource('dataGuru', 'AppController\DataGuruController', [
        'except' => ['show']
    ]);
    Route::resource('dataSiswa', 'AppController\DataSiswaController', [
        'except' => ['show']
    ]);
    Route::resource('dokumentasiGuru', 'AppController\DataDokumenController', [
        'except' => ['show']
    ]);
    Route::resource('kehadiranGuru', 'AppController\KehadiranGuruController', [
        'except' => ['show']
    ]);
    // Route::put('/admin/verifikasiRombel/verifRombel', 'AppController\VerifikasiRombelController@verifRombel');
    Route::resource('verifikasiRombel', 'AppController\VerifikasiRombelController', [
        'except' => ['show']
    ]);
});