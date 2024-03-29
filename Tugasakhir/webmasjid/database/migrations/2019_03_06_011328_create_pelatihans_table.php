<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelatihans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('masjid_id');
            $table->string('nohp');
            $table->string('judul_pelatihan');
            $table->string('nama_pemateri');
            $table->string('tanggal_pelatihan');
            $table->string('gambar');
            $table->string('deskripsi');

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
        Schema::dropIfExists('pelatihans');
    }
}
