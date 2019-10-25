<?php

namespace App\Imports;

use App\DataSiswa;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataSiswaImport implements ToModel //, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataSiswa([
            'nama' => $row[1],
            'nipd' => $row[2],
            'jk' => $row[3],
            'nisn' => $row[4],
            'tempat_lahir' => $row[5],
            'tanggal_lahir' => $row[6],
            'nik' => $row[7],
            'agama' => $row[8],
            'alamat' => $row[9],
            'rt' => $row[10],
            'rw' => $row[11],
            'dusun' => $row[12],
            'kelurahan' => $row[13],
            'kecamatan' => $row[14],
            'kode_pos' => $row[15],
            'jenis_tinggal' => $row[16],
            'alat_transportasi' => $row[17],
            'telepon' => $row[18],
            'hp' => $row[19],
            'email' => $row[20],
            'skhun' => $row[21],
            'penerima_kps' => $row[22],
            'no_kps' => $row[23],
            'nama_ayah' => $row[24],
            'tahun_lahir_ayah' => $row[25],
            'jenjang_pendidikan_ayah' => $row[26],
            'pekerjaan_ayah' => $row[27],
            'penghasilan_ayah' => $row[28],
            'nik_ayah' => $row[29],
            'nama_ibu' => $row[30],
            'tahun_lahir_ibu' => $row[31],
            'jenjang_pendidikan_ibu' => $row[32],
            'pekerjaan_ibu' => $row[33],
            'penghasilan_ibu' => $row[34],
            'nik_ibu' => $row[35],
            'nama_wali' => $row[36],
            'tahun_lahir_wali' => $row[37],
            'jenjang_pendidikan_wali' => $row[38],
            'pekerjaan_wali' => $row[39],
            'penghasilan_wali' => $row[40],
            'nik_wali' => $row[41],
            'rombel_saat_ini' => $row[42],
            'tingkatan' => 0,
            'jurusan' => '',
            'no_peserta_ujian_nasional' => $row[43],
            'no_seri_ijazah' => $row[44],
            'penerima_kip' => $row[45],
            'nomor_kip' => $row[46],
            'nama_di_kip' => $row[47],
            'nomor_kks' => $row[48],
            'no_registrasi_akta_lahir' => $row[49],
            'bank' => $row[50],
            'no_rekening_bank' => $row[51],
            'rekening_atas_nama' => $row[52],
            'layak_pip' => $row[53],
            'alasan_layak_pip' => $row[54],
            'kebutuhan_khusus' => $row[55],
            'sekolah_asal' => $row[56],
            'anak_ke_berapa' => $row[57],
            'lintang' => $row[58],
            'bujur' => $row[59],
            'no_kk' => $row[60],
            'berat_badan' => $row[61],
            'tinggi_badan' => $row[62],
            'lingkar_kepala' => $row[63],
            'jumlah_saudara_kandung' => $row[64],
            'jarak_rumah_ke_sekolah' => $row[65],
            'id_sekolah' => 1,
        ]);
    }

    // public function headingRow(): int
    // {
    //     return 7;
    // }
}
