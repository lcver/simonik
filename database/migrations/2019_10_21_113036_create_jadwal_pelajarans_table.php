<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pelajarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hari');
            $table->bigInteger('tahun_ajaran_id')->unsigned();
            $table->foreign('tahun_ajaran_id')->references('id')->on('tahun_akademiks')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('siswa_id')->unsigned();
            // $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('jam_mulai');
            $table->string('jam_akhir');
            $table->string('keterangan');
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
        Schema::dropIfExists('jadwal_pelajarans');
    }
}
