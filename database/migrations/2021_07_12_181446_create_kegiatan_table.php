<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_skpd');
            $table->integer('id_program');
            $table->string('kode_kegiatan');
            $table->longtext('nama_kegiatan');
            $table->longtext('indikator_kegiatan')->nullable();
            $table->string('satuan_kinerja_kegiatan')->nullable();
            $table->double('target_kinerja1')->nullable();
            $table->double('target_kinerja2')->nullable();
            $table->double('target_kinerja3')->nullable();
            $table->double('target_kinerja4')->nullable();
            $table->double('target_kinerja5')->nullable();
            $table->double('target_kinerja6')->nullable();
            $table->double('kinerja_kegiatan1')->nullable();
            $table->double('kinerja_kegiatan2')->nullable();
            $table->double('kinerja_kegiatan3')->nullable();
            $table->double('kinerja_kegiatan4')->nullable();
            $table->double('kinerja_kegiatan5')->nullable();
            $table->double('kinerja_kegiatan6')->nullable();
            $table->double('realisasi_kegiatan1')->nullable();
            $table->double('realisasi_kegiatan2')->nullable();
            $table->double('realisasi_kegiatan3')->nullable();
            $table->double('realisasi_kegiatan4')->nullable();
            $table->double('realisasi_kegiatan5')->nullable();
            $table->double('realisasi_kegiatan6')->nullable();
            $table->double('pagu_indikatif_kegiatan1')->nullable();
            $table->double('pagu_indikatif_kegiatan2')->nullable();
            $table->double('pagu_indikatif_kegiatan3')->nullable();
            $table->double('pagu_indikatif_kegiatan4')->nullable();
            $table->double('pagu_indikatif_kegiatan5')->nullable();
            $table->double('pagu_indikatif_kegiatan6')->nullable();
            $table->double('prakiraan_maju_kegiatan1')->nullable();
            $table->double('prakiraan_maju_kegiatan2')->nullable();
            $table->double('prakiraan_maju_kegiatan3')->nullable();
            $table->double('prakiraan_maju_kegiatan4')->nullable();
            $table->double('prakiraan_maju_kegiatan5')->nullable();
            $table->double('prakiraan_maju_kegiatan6')->nullable();
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
        Schema::dropIfExists('kegiatan');
    }
}
