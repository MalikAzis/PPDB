<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelDatasekolah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasekolah', function(Blueprint $table)
        {
        $table->increments('id');
        $table->string('jenis_sekolah');
        $table->string('status_sekolah');
        $table->string('prov_sekolah');
        $table->string('kab_sekolah');
        $table->string('jur_sekolah');
        $table->integer('graduate');
        $table->string('pilihan1');
        $table->string('pilihan2');
        $table->integer('mahasiswa_id')->unsigned();
        $table->timestamps();

          $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
