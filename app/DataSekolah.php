<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSekolah extends Model
{
    public function kota(){
        return $this->belongsTo('\App\Kota', 'id_kota');
    }
}
