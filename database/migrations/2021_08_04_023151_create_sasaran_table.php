<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSasaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sasaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_skpd');
            $table->integer('tahun_sasaran');
            $table->longtext('sasaran');
            $table->string('indikator_sasaran');
            $table->string('satuan_target_sasaran')->nullable();
            $table->double('target_kinerja_sasaran1')->nullable();
            $table->double('target_kinerja_sasaran2')->nullable();
            $table->double('target_kinerja_sasaran3')->nullable();
            $table->double('target_kinerja_sasaran4')->nullable();
            $table->double('target_kinerja_sasaran5')->nullable();
            $table->double('target_kinerja_sasaran6')->nullable();
            $table->double('realisasi_sasaran_triwulan1')->nullable();
            $table->double('realisasi_sasaran_triwulan2')->nullable();
            $table->double('realisasi_sasaran_triwulan3')->nullable();
            $table->double('realisasi_sasaran_triwulan4')->nullable();
            $table->longtext('penjelasan_sasaran')->nullable();
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
        Schema::dropIfExists('sasaran');
    }
}
