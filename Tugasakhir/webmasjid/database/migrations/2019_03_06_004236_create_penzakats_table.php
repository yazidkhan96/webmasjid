<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenzakatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penzakats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('zakat_id');
            $table->string('nama_penzakat');
            $table->string('jumlah_zakat');
            $table->string('email');
            $table->string('status');
            $table->timestamps();


            $table->foreign('zakat_id')
            ->references('id')
            ->on('zakats')
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
        Schema::dropIfExists('penzakats');
    }
}
