<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyerahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyerahan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tanggal');
            $table->string('kategori_penyerahan');
            $table->integer('sumber_dana_id');
            $table->string('total_donasi');
            $table->string('gambar');
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
        Schema::dropIfExists('penyerahan');
    }
}
