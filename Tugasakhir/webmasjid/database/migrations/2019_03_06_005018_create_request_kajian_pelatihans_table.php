<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestKajianPelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_kajian_pelatihans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pengunjung');
            $table->string('email');
            $table->string('lokasi');
            $table->string('tanggal_pelaksanaan');
            $table->string('nama_pemateri');
            $table->string('waktu_mulai_selesai');
            $table->string('nohp');
            $table->string('deskripsi');
            $table->string('jenis_request');
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
        Schema::dropIfExists('request_kajian_pelatihans');
    }
}
