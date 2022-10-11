<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidangUrusanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidang_urusan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_urusan');
            $table->string('kode_bidang_urusan');
            $table->string('nama_bidang_urusan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bidang_urusan');
    }
}
