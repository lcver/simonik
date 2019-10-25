<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sekolahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_kota');
            $table->string('kode_sekolah')->unique();
            $table->string('npsn_sekolah')->unique();
            $table->string('kurikulum');
            $table->string('nama_sekolah');
            $table->string('alamat_sekolah');
            $table->string('kepala_sekolah');
            $table->string('password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_sekolahs');
    }
}
