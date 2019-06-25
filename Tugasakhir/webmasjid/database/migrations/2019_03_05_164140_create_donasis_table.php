<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donasis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kategori_donasi_id');
            $table->unsignedInteger('creator');
            $table->string('judul_donasi');
            $table->string('deskripsi');
            $table->string('gambar');

            $table->timestamps(); 


            $table->foreign('kategori_donasi_id')
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
        Schema::dropIfExists('donasis');
    }
}
