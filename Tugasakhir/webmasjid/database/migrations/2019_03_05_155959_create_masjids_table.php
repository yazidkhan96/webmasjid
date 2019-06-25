<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasjidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masjids', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pengurus_id');
            $table->string('nama_masjid');
            $table->string('alamat_masjid');
            $table->date('tahun_beridiri');
            $table->string('deskripsi');
            $table->string('gambar');
            $table->timestamps();

            $table->foreign('pengurus_id')
            ->references('id')
            ->on('penguruses')
            ->Ondelete('cascade')
            ->Onupdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masjids');
    }
}
