<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonasiPengunjungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donasi_pengunjungs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pendonasi');
            $table->string('kategori_donasi_id');
            $table->string('nama_bank');
            $table->string('email');
            $table->string('jumlah_donasi');
            $table->string('status');
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
        Schema::dropIfExists('donasi_pengunjungs');
    }
}
