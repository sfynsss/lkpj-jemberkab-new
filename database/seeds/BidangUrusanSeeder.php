<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidangUrusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bidang_urusan = [
            ['id'=>1,'id_urusan'=>1, 'kode_bidang_urusan'=>'1.01', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PENDIDIKAN'],
            ['id'=>2,'id_urusan'=>1, 'kode_bidang_urusan'=>'1.02', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG KESEHATAN'],
            ['id'=>3,'id_urusan'=>1, 'kode_bidang_urusan'=>'1.03', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PEKERJAAN UMUM DAN PENATAAN RUANG'],
            ['id'=>4,'id_urusan'=>1, 'kode_bidang_urusan'=>'1.04', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PERUMAHAN DAN KAWASAN PERMUKIMAN'],
            ['id'=>5,'id_urusan'=>1, 'kode_bidang_urusan'=>'1.05', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG KETENTERAMAN DAN KETERTIBAN UMUM SERTA PERLINDUNGAN MASYARAKAT'],
            ['id'=>6,'id_urusan'=>1, 'kode_bidang_urusan'=>'1.06', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG SOSIAL'],
            ['id'=>7,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.07', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG TENAGA KERJA'],
            ['id'=>8,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.08', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK'],
            ['id'=>9,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.09', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PANGAN'],
            ['id'=>10,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.10', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PERTANAHAN'],
            ['id'=>11,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.11', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG LINGKUNGAN HIDUP'],
            ['id'=>12,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.12', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG ADMINISTRASI KEPENDUDUKAN DAN PENCATATAN SIPIL'],
            ['id'=>13,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.13', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PEMBERDAYAAN MASYARAKAT DAN DESA'],
            ['id'=>14,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.14', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA'],
            ['id'=>15,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.15', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PERHUBUNGAN'],
            ['id'=>16,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.16', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG KOMUNIKASI DAN INFORMATIKA'],
            ['id'=>17,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.17', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG KOPERASI, USAHA KECIL, DAN MENENGAH'],
            ['id'=>18,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.18', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PENANAMAN MODAL'],
            ['id'=>19,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.19', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG KEPEMUDAAN DAN OLAHRAGA'],
            ['id'=>20,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.20', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG STATISTIK'],
            ['id'=>21,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.21', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PERSANDIAN'],
            ['id'=>22,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.22', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG KEBUDAYAAN'],
            ['id'=>23,'id_urusan'=>2, 'kode_bidang_urusan'=>'2.23', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PERPUSTAKAAN'],
            ['id'=>24,'id_urusan'=>3, 'kode_bidang_urusan'=>'2.24', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG KEARSIPAN'],
            ['id'=>25,'id_urusan'=>3, 'kode_bidang_urusan'=>'3.25', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG KELAUTAN DAN PERIKANAN'],
            ['id'=>26,'id_urusan'=>3, 'kode_bidang_urusan'=>'3.26', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PARIWISATA'],
            ['id'=>27,'id_urusan'=>3, 'kode_bidang_urusan'=>'3.27', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PERTANIAN'],
            ['id'=>28,'id_urusan'=>3, 'kode_bidang_urusan'=>'3.28', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG KEHUTANAN'],
            ['id'=>29,'id_urusan'=>3, 'kode_bidang_urusan'=>'3.29', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG ENERGI DAN SUMBER DAYA MINERAL'],
            ['id'=>30,'id_urusan'=>3, 'kode_bidang_urusan'=>'3.30', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PERDAGANGAN'],
            ['id'=>31,'id_urusan'=>3, 'kode_bidang_urusan'=>'3.31', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG PERINDUSTRIAN'],
            ['id'=>32,'id_urusan'=>3, 'kode_bidang_urusan'=>'3.32', 'nama_bidang_urusan'=>'URUSAN PEMERINTAHAN BIDANG TRANSMIGRASI'],
            ['id'=>33,'id_urusan'=>4, 'kode_bidang_urusan'=>'4.01', 'nama_bidang_urusan'=>'SEKRETARIAT DAERAH'],
            ['id'=>34,'id_urusan'=>4, 'kode_bidang_urusan'=>'4.02', 'nama_bidang_urusan'=>'SEKRETARIAT DPRD'],
            ['id'=>35,'id_urusan'=>5, 'kode_bidang_urusan'=>'5.01', 'nama_bidang_urusan'=>'PERENCANAAN'],
            ['id'=>36,'id_urusan'=>5, 'kode_bidang_urusan'=>'5.02', 'nama_bidang_urusan'=>'KEUANGAN'],
            ['id'=>37,'id_urusan'=>5, 'kode_bidang_urusan'=>'5.03', 'nama_bidang_urusan'=>'KEPEGAWAIAN'],
            ['id'=>38,'id_urusan'=>5, 'kode_bidang_urusan'=>'5.04', 'nama_bidang_urusan'=>'PENDIDIKAN DAN PELATIHAN'],
            ['id'=>39,'id_urusan'=>5, 'kode_bidang_urusan'=>'5.05', 'nama_bidang_urusan'=>'PENELITIAN DAN PENGEMBANGAN'],
            ['id'=>40,'id_urusan'=>5, 'kode_bidang_urusan'=>'5.06', 'nama_bidang_urusan'=>'PENGELOLAAN PERBATASAN DAERAH'],
            ['id'=>41,'id_urusan'=>6, 'kode_bidang_urusan'=>'6.01', 'nama_bidang_urusan'=>'INSPEKTORAT DAERAH'],
            ['id'=>42,'id_urusan'=>7, 'kode_bidang_urusan'=>'7.01', 'nama_bidang_urusan'=>'KECAMATAN'],
            ['id'=>43,'id_urusan'=>8, 'kode_bidang_urusan'=>'8.01', 'nama_bidang_urusan'=>'KESATUAN BANGSA DAN POLITIK']
        ];

        DB::table('bidang_urusan')->insert($bidang_urusan);
        $this->command->info('Tabel Bidang Urusan telah diisi!');
    }
}
