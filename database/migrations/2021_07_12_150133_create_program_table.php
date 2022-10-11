<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_bidang_urusan');
            $table->integer('id_skpd');
            $table->string('kode_program');
            $table->longtext('nama_program');
            $table->longtext('indikator_program')->nullable();
            $table->string('satuan_target_program')->nullable();
            $table->double('target_program1')->nullable();
            $table->double('target_program2')->nullable();
            $table->double('target_program3')->nullable();
            $table->double('target_program4')->nullable();
            $table->double('target_program5')->nullable();
            $table->double('target_program6')->nullable();
            $table->double('kinerja_program1')->nullable();
            $table->double('kinerja_program2')->nullable();
            $table->double('kinerja_program3')->nullable();
            $table->double('kinerja_program4')->nullable();
            $table->double('kinerja_program5')->nullable();
            $table->double('kinerja_program6')->nullable();
            $table->double('realisasi_program1')->nullable();
            $table->double('realisasi_program2')->nullable();
            $table->double('realisasi_program3')->nullable();
            $table->double('realisasi_program4')->nullable();
            $table->double('realisasi_program5')->nullable();
            $table->double('realisasi_program6')->nullable();
            $table->double('pagu_indikatif_program1')->nullable();
            $table->double('pagu_indikatif_program2')->nullable();
            $table->double('pagu_indikatif_program3')->nullable();
            $table->double('pagu_indikatif_program4')->nullable();
            $table->double('pagu_indikatif_program5')->nullable();
            $table->double('pagu_indikatif_program6')->nullable();
            $table->double('prakiraan_maju_program1')->nullable();
            $table->double('prakiraan_maju_program2')->nullable();
            $table->double('prakiraan_maju_program3')->nullable();
            $table->double('prakiraan_maju_program4')->nullable();
            $table->double('prakiraan_maju_program5')->nullable();
            $table->double('prakiraan_maju_program6')->nullable();
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
        Schema::dropIfExists('program');
    }
}
