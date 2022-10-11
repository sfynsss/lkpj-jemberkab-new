<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioritasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prioritas = [
            ['kode_prioritas'=>'01', 'nama_prioritas'=>'Program Prioritas Percepatan Pengurangan Kemiskinan'],
            ['kode_prioritas'=>'02', 'nama_prioritas'=>'Program Prioritas Peningkatan Pelayanan Kesehatan dan Gizi Masyarakat'],
            ['kode_prioritas'=>'03', 'nama_prioritas'=>'Program Prioritas Pemerataan Layanan Pendidikan Berkualitas'],
            ['kode_prioritas'=>'04', 'nama_prioritas'=>'Program Prioritas Peningkatan Akses Masyarakat terhadap Perumahan dan Permukiman Layak'],
            ['kode_prioritas'=>'05', 'nama_prioritas'=>'Program Prioritas Peningkatan Tata Kelola Layanan Dasar'],
            ['kode_prioritas'=>'06', 'nama_prioritas'=>'Program Prioritas Peningkatan Konektivitas dan TIK'],
            ['kode_prioritas'=>'07', 'nama_prioritas'=>'Program Prioritas Percepatan Pembangunan Papua dan Papua Barat'],
            ['kode_prioritas'=>'08', 'nama_prioritas'=>'Program Prioritas Percepatan Pembangunan Daerah Tertinggal dan Desa'],
            ['kode_prioritas'=>'09', 'nama_prioritas'=>'Program Prioritas Penanggulangan Bencana'],
            ['kode_prioritas'=>'10', 'nama_prioritas'=>'Program Prioritas Peningkatan Sistem Logistik'],
            ['kode_prioritas'=>'11', 'nama_prioritas'=>'Program Prioritas Peningkatan Ekspor dan Nilai Tambah Produk Pertanian'],
            ['kode_prioritas'=>'12', 'nama_prioritas'=>'Program Prioritas Percepatan Peningkatan Ekspor dan Nilai Tambah Industri Pengolahan'],
            ['kode_prioritas'=>'13', 'nama_prioritas'=>'Program Prioritas Peningkatan Nilai Tambah Pariwisata dan Jasa Produktif Lainnya'],
            ['kode_prioritas'=>'14', 'nama_prioritas'=>'Program Prioritas Percepatan Peningkatan Keahlian Tenaga Kerja'],
            ['kode_prioritas'=>'15', 'nama_prioritas'=>'Program Prioritas Pengembangan Iptek dan Inovasi untuk Meningkatkan Produktivitas'],
            ['kode_prioritas'=>'16', 'nama_prioritas'=>'Program Prioritas Peningkatan Produksi dan Pemenuhan Kebutuhan Energi'],
            ['kode_prioritas'=>'17', 'nama_prioritas'=>'Program Prioritas Peningkatan Produksi, Akses dan Kualitas Konsumsi Pangan'],
            ['kode_prioritas'=>'18', 'nama_prioritas'=>'Program Prioritas Peningkatan Kuantitas, Kualitas, dan Aksesibilitas Sumber Daya Air'],
            ['kode_prioritas'=>'19', 'nama_prioritas'=>'Program Prioritas Peningkatan Daya Dukung Sumber Daya Alam dan Daya Tampung Lingkungan'],
            ['kode_prioritas'=>'20', 'nama_prioritas'=>'Program Prioritas Kamtibmas dan Keamanan Siber'],
            ['kode_prioritas'=>'21', 'nama_prioritas'=>'Program Prioritas Kesuksesan Pemilu'],
            ['kode_prioritas'=>'22', 'nama_prioritas'=>'Program Prioritas Pertahanan Wilayah Nasional'],
            ['kode_prioritas'=>'23', 'nama_prioritas'=>'Program Prioritas Kepastian Hukum dan Reformasi Birokrasi'],
            ['kode_prioritas'=>'24', 'nama_prioritas'=>'Program Prioritas Efektivitas Diplomasi']
        ];

        DB::table('prioritas')->insert($prioritas);
        $this->command->info('Tabel Prioritas telah diisi!');
    }
}
