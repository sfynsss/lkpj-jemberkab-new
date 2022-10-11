<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetSubkegiatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_subkegiatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_sub_keg');
            $table->string('tahun');
            $table->integer('triwulan')->nullable();
            $table->double('realisasi_sub_keg_1')->nullable();
            $table->double('realisasi_sub_keg_2')->nullable();
            $table->double('realisasi_sub_keg_3')->nullable();
            $table->double('realisasi_sub_keg_4')->nullable();
            $table->double('realisasi_sub_keg_5')->nullable();
            $table->double('realisasi_sub_keg_6')->nullable();
            $table->double('serapan_sub_keg_1')->nullable();
            $table->double('serapan_sub_keg_2')->nullable();
            $table->double('serapan_sub_keg_3')->nullable();
            $table->double('serapan_sub_keg_4')->nullable();
            $table->double('serapan_sub_keg_5')->nullable();
            $table->double('serapan_sub_keg_6')->nullable();
            $table->longtext('masalah_sub_keg_1')->nullable();
            $table->longtext('masalah_sub_keg_2')->nullable();
            $table->longtext('masalah_sub_keg_3')->nullable();
            $table->longtext('masalah_sub_keg_4')->nullable();
            $table->longtext('masalah_sub_keg_5')->nullable();
            $table->longtext('masalah_sub_keg_6')->nullable();
            $table->longtext('solusi_sub_keg_1')->nullable();
            $table->longtext('solusi_sub_keg_2')->nullable();
            $table->longtext('solusi_sub_keg_3')->nullable();
            $table->longtext('solusi_sub_keg_4')->nullable();
            $table->longtext('solusi_sub_keg_5')->nullable();
            $table->longtext('solusi_sub_keg_6')->nullable();
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
        Schema::dropIfExists('det_subkegiatan');
    }
}
