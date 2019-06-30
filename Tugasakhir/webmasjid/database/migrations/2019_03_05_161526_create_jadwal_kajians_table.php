<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalKajiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_kajians', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('masjid_id');
            $table->string('tema_kajian');
            $table->string('nama_ustadz');
            $table->string('tanggal_kajian');
            $table->string('bulan_kajian');
            $table->string('lokasi');
            $table->string('waktu_kajian');
            $table->timestamps();

            $table->foreign('masjid_id')
            ->references('id')
            ->on('masjids')
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
        Schema::dropIfExists('jadwal_kajians');
    }
}
