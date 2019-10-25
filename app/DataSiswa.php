<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    protected $table = 'siswa';
    // protected $primaryKey = 'id';
    protected $fillable = ['nama', 'nipd', 'jk', 'nisn', 'tempat_lahir', 'tanggal_lahir', 'nik', 'agama', 'alamat', 'rt', 'rw', 'dusun', 'kelurahan', 'kecamatan', 'kode_pos', 'jenis_tinggal', 'alat_transportasi', 'telepon', 'hp', 'email', 'skhun', 'penerima_kps', 'no_kps', 'nama_ayah', 'tahun_lahir_ayah', 'jenjang_pendidikan_ayah', 'pekerjaan_ayah', 'penghasilan_ayah', 'nik_ayah', 'nama_ibu', 'tahun_lahir_ibu', 'jenjang_pendidikan_ibu', 'pekerjaan_ibu', 'penghasilan_ibu', 'nik_ibu', 'nama_wali', 'tahun_lahir_wali', 'jenjang_pendidikan_wali', 'pekerjaan_wali', 'penghasilan_wali', 'nik_wali', 'rombel_saat_ini', 'tingkatan','jurusan', 'no_peserta_ujian_nasional', 'no_seri_ijazah', 'penerima_kip', 'nomor_kip', 'nama_di_kip', 'nomor_kks', 'no_registrasi_akta_lahir', 'bank', 'no_rekening_bank', 'rekening_atas_nama', 'layak_pip', 'alasan_layak_pip', 'kebutuhan_khusus', 'sekolah_asal', 'anak_ke_berapa', 'lintang', 'bujur', 'no_kk', 'berat_badan, tinggi_badan, lingkar_kepala', 'jumlah_saudara_kandung', 'jarak_rumah_ke_sekolah'];
}
