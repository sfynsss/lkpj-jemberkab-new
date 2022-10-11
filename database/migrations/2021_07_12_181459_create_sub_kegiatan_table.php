<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_kegiatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_kegiatan');
            $table->string('kode_sub_keg');
            $table->longtext('nama_sub_keg');
            $table->longtext('indikator_sub_keg')->nullable();
            $table->string('target_sub_keg_1')->nullable();
            $table->string('target_sub_keg_2')->nullable();
            $table->string('target_sub_keg_3')->nullable();
            $table->string('target_sub_keg_4')->nullable();
            $table->string('target_sub_keg_5')->nullable();
            $table->string('target_sub_keg_6')->nullable();
            $table->string('satuan_target_sub_keg_1')->nullable();
            $table->string('satuan_target_sub_keg_2')->nullable();
            $table->string('satuan_target_sub_keg_3')->nullable();
            $table->string('satuan_target_sub_keg_4')->nullable();
            $table->string('satuan_target_sub_keg_5')->nullable();
            $table->string('satuan_target_sub_keg_6')->nullable();
            $table->double('pagu_indikatif_sub_keg_1')->nullable();
            $table->double('pagu_indikatif_sub_keg_2')->nullable();
            $table->double('pagu_indikatif_sub_keg_3')->nullable();
            $table->double('pagu_indikatif_sub_keg_4')->nullable();
            $table->double('pagu_indikatif_sub_keg_5')->nullable();
            $table->double('pagu_indikatif_sub_keg_6')->nullable();
            $table->double('prakiraan_maju_sub_keg_1')->nullable();
            $table->double('prakiraan_maju_sub_keg_2')->nullable();
            $table->double('prakiraan_maju_sub_keg_3')->nullable();
            $table->double('prakiraan_maju_sub_keg_4')->nullable();
            $table->double('prakiraan_maju_sub_keg_5')->nullable();
            $table->double('prakiraan_maju_sub_keg_6')->nullable();
            $table->string('kinerja_sub_keg_1')->nullable();
            $table->string('kinerja_sub_keg_2')->nullable();
            $table->string('kinerja_sub_keg_3')->nullable();
            $table->string('kinerja_sub_keg_4')->nullable();
            $table->string('kinerja_sub_keg_5')->nullable();
            $table->string('kinerja_sub_keg_6')->nullable();
            $table->double('papbd_sub_keg')->nullable();
            $table->longtext('prioritas_nasional')->nullable();
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
        Schema::dropIfExists('sub_kegiatan');
    }
}
