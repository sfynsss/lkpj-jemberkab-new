<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $urusan = [
            ['id'=>1, 'kode_urusan'=>'1', 'nama_urusan'=>'URUSAN PEMERINTAHAN WAJIB YANG BERKAITAN DENGAN PELAYANAN DASAR'],
            ['id'=>2, 'kode_urusan'=>'2', 'nama_urusan'=>'URUSAN PEMERINTAHAN WAJIB YANG TIDAK BERKAITAN DENGAN PELAYANAN DASAR'],
            ['id'=>3, 'kode_urusan'=>'3', 'nama_urusan'=>'URUSAN PEMERINTAHAN PILIHAN'],
            ['id'=>4, 'kode_urusan'=>'4', 'nama_urusan'=>'UNSUR PENDUKUNG'],
            ['id'=>5, 'kode_urusan'=>'5', 'nama_urusan'=>'UNSUR PENUNJANG'],
            ['id'=>6, 'kode_urusan'=>'6', 'nama_urusan'=>'UNSUR PENGAWAS'],
            ['id'=>7, 'kode_urusan'=>'7', 'nama_urusan'=>'UNSUR KEWILAYAHAN'],
            ['id'=>8, 'kode_urusan'=>'8', 'nama_urusan'=>'UNSUR PEMERINTAHAN UMUM']
        ];

        DB::table('urusan')->insert($urusan);
        $this->command->info('Tabel Urusan telah diisi!');
    }
}
