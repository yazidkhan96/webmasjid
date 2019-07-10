<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerencanaanKajianPelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perencanaan_kajian_pelatihans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('tanggal_pelaksaan');
            $table->string('lokasi');
            $table->string('ustadz');
            $table->string('biaya_pelaksaan');
            $table->string('judul_perencanaan');
            $table->string('nohp');
            $table->string('jenis_perencanaan');
            $table->timestamps();



            $table->foreign('user_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('perencanaan_kajian_pelatihans');
    }
}
