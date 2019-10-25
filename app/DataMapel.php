<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataMapel extends Model
{
    protected $table = "datamapel";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'kode_mapel',
        'nama_mapel'
    ];
    public $timestamps = false;
}
