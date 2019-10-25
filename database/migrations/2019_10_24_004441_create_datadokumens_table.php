<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatadokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadokumens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('guru_id')->unsigned();
            // $table->foreign('guru_id')->references('id')->on('guru')->onDelete('cascade')->onUpdate('cascade');
            $table->string('sillabus');
            $table->string('rpp');
            $table->string('prota');
            $table->string('prosem');
            // $table->integer('total');
            $table->timestamps();
        });

        // Schema::table('guru', function($table){
        //     $table->foreign('guru_id')
        //     ->references('id')
        //     ->on('guru')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datadokumens');
    }
}
