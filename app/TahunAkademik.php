<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunAkademik extends Model
{
    protected $table = "tahun_akademiks";
    protected $primaryKey  = "id";

    protected $fillable = [
        'id',
        'nama_tahun_akademik',
        'keterangan'
    ];
    public $timestamps = false;

}
