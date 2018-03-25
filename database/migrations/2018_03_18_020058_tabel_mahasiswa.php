<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('mahasiswa', function(Blueprint $table)
        {
        $table->increments('id');
        $table->bigInteger('nomor_peserta')->unique();
        $table->string('nama_depan');
        $table->string('nama_belakang');
        $table->string('jk');
        $table->string('jalan');
        $table->string('kota');
        $table->string('provinsi');
        $table->string('negara');
        $table->integer('kodepos');
        $table->string('tempat_lahir');
        $table->date('tanggal_lahir');
        $table->string('email', 150)->unique();
        $table->bigInteger('telp');
        $table->string('agama');
        $table->string('token');

        $table->rememberToken();
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
        //
    }
}
