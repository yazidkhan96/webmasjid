<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertaPelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_pelatihans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pelatihan_id');
            $table->string('nama_peserta');
            $table->string('alamat_lengkap');
            $table->string('email');
            $table->string('nohp');
            $table->string('foto_data_diri');
            $table->timestamps();


            $table->foreign('pelatihan_id')
            ->references('id')
            ->on('pelatihans')
            ->Ondelete('no action')
            ->Onupdate('no action');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta_pelatihans');
    }
}
