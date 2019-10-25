<?php

use Illuminate\Database\Seeder;

use App\Kota;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kota::truncate();

        $kotas = [
            ['id' => 1, 'kode' => '01', 'nama_kota' => 'Jakarta Pusat 1'],
            ['id' => 2, 'kode' => '02', 'nama_kota' => 'Jakarta Pusat 2'],
            ['id' => 3, 'kode' => '03', 'nama_kota' => 'Jakarta Utara 2'],
            ['id' => 4, 'kode' => '04', 'nama_kota' => 'Jakarta Utara 2'],
            ['id' => 5, 'kode' => '05', 'nama_kota' => 'Jakarta Barat 2'],
            ['id' => 6, 'kode' => '06', 'nama_kota' => 'Jakarta Barat 2'],
            ['id' => 7, 'kode' => '07', 'nama_kota' => 'Jakarta Selatan 2'],
            ['id' => 8, 'kode' => '08', 'nama_kota' => 'Jakarta Selatan 2'],
            ['id' => 9, 'kode' => '09', 'nama_kota' => 'Jakarta Timur 2'],
            ['id' => 10, 'kode' => '10', 'nama_kota' => 'Jakarta Timur 2']
        ];
        foreach($kotas as $kota){
            Kota::create($kota);
        }
    }
}
