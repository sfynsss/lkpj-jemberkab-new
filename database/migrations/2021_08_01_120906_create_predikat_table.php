<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePredikatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predikat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_skpd');
            $table->integer('triwulan_predikat');
            $table->integer('tahun_predikat');
            $table->string('predikat_kinerja')->nullable();
            $table->integer('capaian_kinerja')->nullable();
            $table->string('predikat_anggaran')->nullable();
            $table->integer('capaian_anggaran')->nullable();
            $table->longtext('faktor_pendorong')->nullable();
            $table->longtext('faktor_penghambat')->nullable();
            $table->longtext('tindak_lanjut_triwulan')->nullable();
            $table->longtext('tindak_lanjut_rkpd')->nullable();
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
        Schema::dropIfExists('predikat');
    }
}
