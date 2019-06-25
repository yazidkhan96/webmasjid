<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalangDanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galang_danas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kategori_id');
            $table->string('judul');
            $table->string('biaya_yang_dibutuhkan');
            $table->string('batas_waktu');
            $table->string('gambar');
            $table->string('deskripsi');
            $table->string('jenis_penggalang');

            $table->timestamps();


            $table->foreign('kategori_id')
            ->references('id')
            ->on('kategori_donasis')
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
        Schema::dropIfExists('galang_danas');
    }
}
