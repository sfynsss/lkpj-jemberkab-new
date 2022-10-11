<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SKPDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skpd = [
            ['id'=>1 ,'kode_skpd'=>'1.01.0.00.0.00.1..0000', 'nama_skpd'=>'DINAS PENDIDIKAN', 'id_bidang'=>73],
            ['id'=>2 ,'kode_skpd'=>'1.02.0.00.0.00.1..0000', 'nama_skpd'=>'DINAS KESEHATAN', 'id_bidang'=>73],
            ['id'=>3 ,'kode_skpd'=>'1.02.0.00.0.00.2..0000', 'nama_skpd'=>'RUMAH SAKIT DAERAH (RSD) BALUNG - BLUD', 'id_bidang'=>73],
            ['id'=>4 ,'kode_skpd'=>'1.02.0.00.0.00.3..0000', 'nama_skpd'=>'RUMAH SAKIT DAERAH (RSD) DR SOEBANDI - BLUD', 'id_bidang'=>73],
            ['id'=>5 ,'kode_skpd'=>'1.02.0.00.0.00.4..0000', 'nama_skpd'=>'RUMAH SAKIT DAERAH (RSD) KALISAT - BLUD', 'id_bidang'=>73],
            ['id'=>6 ,'kode_skpd'=>'1.03.0.00.0.00.1..0000', 'nama_skpd'=>'DINAS PEKERJAAN UMUM BINA MARGA DAN SUMBER DAYA AIR', 'id_bidang'=>75],
            ['id'=>7 ,'kode_skpd'=>'1.03.1.04.2.10.1..0000', 'nama_skpd'=>'DINAS PERUMAHAN RAKYAT, KAWASAN PEMUKIMAN DAN CIPTA KARYA', 'id_bidang'=>75],
            ['id'=>8 ,'kode_skpd'=>'1.05.0.00.0.00.1..0000', 'nama_skpd'=>'SATUAN POLISI PAMONG PRAJA', 'id_bidang'=>73],
            ['id'=>9 ,'kode_skpd'=>'1.05.4.01.0.00.1..0000', 'nama_skpd'=>'BADAN PENANGGULANGAN BENCANA DAERAH', 'id_bidang'=>73],
            ['id'=>10 ,'kode_skpd'=>'1.06.0.00.0.00.1..0000', 'nama_skpd'=>'DINAS SOSIAL', 'id_bidang'=>73],
            ['id'=>11 ,'kode_skpd'=>'2.07.0.00.0.00.1..0000', 'nama_skpd'=>'DINAS TENAGA KERJA', 'id_bidang'=>73],
            ['id'=>12 ,'kode_skpd'=>'2.08.2.14.0.00.1..0000', 'nama_skpd'=>'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK DAN KELUARGA BERENCANA', 'id_bidang'=>73],
            ['id'=>13 ,'kode_skpd'=>'2.09.3.27.0.00.1..0000', 'nama_skpd'=>'DINAS KETAHANAN PANGAN DAN PETERNAKAN', 'id_bidang'=>74],
            ['id'=>14 ,'kode_skpd'=>'2.11.0.00.0.00.1..0000', 'nama_skpd'=>'DINAS LINGKUNGAN HIDUP', 'id_bidang'=>75],
            ['id'=>15 ,'kode_skpd'=>'2.12.0.00.0.00.1..0000', 'nama_skpd'=>'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'id_bidang'=>73],
            ['id'=>16 ,'kode_skpd'=>'2.13.0.00.0.00.1..0000', 'nama_skpd'=>'DINAS PEMBERDAYAAN MASYARAKAT DAN DESA', 'id_bidang'=>73],
            ['id'=>17 ,'kode_skpd'=>'2.15.0.00.0.00.1..0000', 'nama_skpd'=>'DINAS PERHUBUNGAN', 'id_bidang'=>75],
            ['id'=>18 ,'kode_skpd'=>'2.16.2.20.2.21.1..0000', 'nama_skpd'=>'DINAS KOMUNIKASI DAN INFORMATIKA', 'id_bidang'=>73],
            ['id'=>19 ,'kode_skpd'=>'2.17.0.00.0.00.1..0000', 'nama_skpd'=>'DINAS KOPERASI DAN USAHA MIKRO', 'id_bidang'=>74],
            ['id'=>20 ,'kode_skpd'=>'2.18.2.10.0.00.1..0000', 'nama_skpd'=>'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'id_bidang'=>74],
            ['id'=>21 ,'kode_skpd'=>'2.19.0.00.0.00.1..0000', 'nama_skpd'=>'DINAS KEPEMUDAAN DAN OLAH RAGA', 'id_bidang'=>73],
            ['id'=>22 ,'kode_skpd'=>'2.22.3.26.0.00.1..0000', 'nama_skpd'=>'DINAS PARIWISATA DAN KEBUDAYAAN', 'id_bidang'=>74],
            ['id'=>23 ,'kode_skpd'=>'2.23.2.24.0.00.1..0000', 'nama_skpd'=>'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'id_bidang'=>73],
            ['id'=>24 ,'kode_skpd'=>'3.25.0.00.0.00.1..0000', 'nama_skpd'=>'DINAS PERIKANAN', 'id_bidang'=>74],
            ['id'=>25 ,'kode_skpd'=>'3.27.0.00.0.00.1..0000', 'nama_skpd'=>'DINAS TANAMAN PANGAN, HORTIKULTURA DAN PERKEBUNAN', 'id_bidang'=>74],
            ['id'=>26 ,'kode_skpd'=>'3.31.3.30.0.00.1..0000', 'nama_skpd'=>'DINAS PERINDUSTRIAN DAN PERDAGANGAN', 'id_bidang'=>74],
            ['id'=>27 ,'kode_skpd'=>'4.01.0.00.0.00.1..0000', 'nama_skpd'=>'BAGIAN HUKUM', 'id_bidang'=>73],
            ['id'=>28 ,'kode_skpd'=>'4.01.0.00.0.00.3..0000', 'nama_skpd'=>'BAGIAN PEMBANGUNAN', 'id_bidang'=>74],
            ['id'=>29 ,'kode_skpd'=>'4.01.0.00.0.00.33.0000', 'nama_skpd'=>'BAGIAN KESEJAHTERAAN RAKYAT', 'id_bidang'=>73],
            ['id'=>30 ,'kode_skpd'=>'4.01.0.00.0.00.4..0000', 'nama_skpd'=>'BAGIAN ORGANISASI', 'id_bidang'=>73],
            ['id'=>31 ,'kode_skpd'=>'4.01.0.00.0.00.7..0000', 'nama_skpd'=>'Bagian Protokol dan Komunikasi Pimpinan', 'id_bidang'=>73],
            ['id'=>32 ,'kode_skpd'=>'4.01.0.00.0.00.8..0000', 'nama_skpd'=>'BAGIAN UMUM', 'id_bidang'=>73],
            ['id'=>33 ,'kode_skpd'=>'4.01.3.30.0.00.2..0000', 'nama_skpd'=>'BAGIAN PEREKONOMIAN DAN SUMBER DAYA ALAM', 'id_bidang'=>74],
            ['id'=>34 ,'kode_skpd'=>'4.02.0.00.0.00.1..0000', 'nama_skpd'=>'SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH', 'id_bidang'=>73],
            ['id'=>35 ,'kode_skpd'=>'5.01.4.01.5.06.1..0000', 'nama_skpd'=>'BAGIAN TATA PEMERINTAHAN', 'id_bidang'=>73],
            ['id'=>36 ,'kode_skpd'=>'5.01.5.05.0.00.1..0000', 'nama_skpd'=>'BADAN PERENCANAAN DAN PEMBANGUNAN DAERAH', 'id_bidang'=>74],
            ['id'=>37 ,'kode_skpd'=>'5.02.0.00.0.00.02.0000', 'nama_skpd'=>'BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH - PPKD', 'id_bidang'=>74],
            ['id'=>38 ,'kode_skpd'=>'5.02.0.00.0.00.1..0000', 'nama_skpd'=>'BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH - SKPD', 'id_bidang'=>74],
            ['id'=>39 ,'kode_skpd'=>'5.02.0.00.0.00.2..0000', 'nama_skpd'=>'BADAN PENDAPATAN DAERAH', 'id_bidang'=>74],
            ['id'=>40 ,'kode_skpd'=>'5.03.5.04.0.00.1..0000', 'nama_skpd'=>'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SDM', 'id_bidang'=>73],
            ['id'=>41 ,'kode_skpd'=>'6.01.0.00.0.00.1..0000', 'nama_skpd'=>'INSPEKTORAT', 'id_bidang'=>73],
            ['id'=>42 ,'kode_skpd'=>'7.01.0.00.0.00.1..0000', 'nama_skpd'=>'KECAMATAN AJUNG', 'id_bidang'=>73],
            ['id'=>43 ,'kode_skpd'=>'7.01.0.00.0.00.10.0000', 'nama_skpd'=>'KECAMATAN KALISAT', 'id_bidang'=>73],
            ['id'=>44 ,'kode_skpd'=>'7.01.0.00.0.00.11.0000', 'nama_skpd'=>'KECAMATAN KALIWATES', 'id_bidang'=>73],
            ['id'=>45 ,'kode_skpd'=>'7.01.0.00.0.00.12.0000', 'nama_skpd'=>'KECAMATAN KENCONG', 'id_bidang'=>73],
            ['id'=>46 ,'kode_skpd'=>'7.01.0.00.0.00.13.0000', 'nama_skpd'=>'KECAMATAN LEDOKOMBO', 'id_bidang'=>73],
            ['id'=>47 ,'kode_skpd'=>'7.01.0.00.0.00.14.0000', 'nama_skpd'=>'KECAMATAN MAYANG', 'id_bidang'=>73],
            ['id'=>48 ,'kode_skpd'=>'7.01.0.00.0.00.15.0000', 'nama_skpd'=>'KECAMATAN MUMBULSARI', 'id_bidang'=>73],
            ['id'=>49 ,'kode_skpd'=>'7.01.0.00.0.00.16.0000', 'nama_skpd'=>'KECAMATAN PAKUSARI', 'id_bidang'=>73],
            ['id'=>50 ,'kode_skpd'=>'7.01.0.00.0.00.18.0000', 'nama_skpd'=>'KECAMATAN PATRANG', 'id_bidang'=>73],
            ['id'=>51 ,'kode_skpd'=>'7.01.0.00.0.00.19.0000', 'nama_skpd'=>'KECAMATAN PUGER', 'id_bidang'=>73],
            ['id'=>52 ,'kode_skpd'=>'7.01.0.00.0.00.2..0000', 'nama_skpd'=>'KECAMATAN AMBULU', 'id_bidang'=>73],
            ['id'=>53 ,'kode_skpd'=>'7.01.0.00.0.00.20.0000', 'nama_skpd'=>'KECAMATAN RAMBIPUJI', 'id_bidang'=>73],
            ['id'=>54 ,'kode_skpd'=>'7.01.0.00.0.00.21.0000', 'nama_skpd'=>'KECAMATAN SEMBORO', 'id_bidang'=>73],
            ['id'=>55 ,'kode_skpd'=>'7.01.0.00.0.00.22.0000', 'nama_skpd'=>'KECAMATAN SILO', 'id_bidang'=>73],
            ['id'=>56 ,'kode_skpd'=>'7.01.0.00.0.00.23.0000', 'nama_skpd'=>'KECAMATAN SUKORAMBI', 'id_bidang'=>73],
            ['id'=>57 ,'kode_skpd'=>'7.01.0.00.0.00.24.0000', 'nama_skpd'=>'KECAMATAN SUKOWONO', 'id_bidang'=>73],
            ['id'=>58 ,'kode_skpd'=>'7.01.0.00.0.00.25.0000', 'nama_skpd'=>'KECAMATAN SUMBERBARU', 'id_bidang'=>73],
            ['id'=>59 ,'kode_skpd'=>'7.01.0.00.0.00.26.0000', 'nama_skpd'=>'KECAMATAN SUMBERJAMBE', 'id_bidang'=>73],
            ['id'=>60 ,'kode_skpd'=>'7.01.0.00.0.00.27.0000', 'nama_skpd'=>'KECAMATAN SUMBERSARI', 'id_bidang'=>73],
            ['id'=>61 ,'kode_skpd'=>'7.01.0.00.0.00.28.0000', 'nama_skpd'=>'KECAMATAN TANGGUL', 'id_bidang'=>73],
            ['id'=>62 ,'kode_skpd'=>'7.01.0.00.0.00.29.0000', 'nama_skpd'=>'KECAMATAN TEMPUREJO', 'id_bidang'=>73],
            ['id'=>63 ,'kode_skpd'=>'7.01.0.00.0.00.3..0000', 'nama_skpd'=>'KECAMATAN ARJASA', 'id_bidang'=>73],
            ['id'=>64 ,'kode_skpd'=>'7.01.0.00.0.00.30.0000', 'nama_skpd'=>'KECAMATAN UMBULSARI', 'id_bidang'=>73],
            ['id'=>65 ,'kode_skpd'=>'7.01.0.00.0.00.31.0000', 'nama_skpd'=>'KECAMATAN WULUHAN', 'id_bidang'=>73],
            ['id'=>66 ,'kode_skpd'=>'7.01.0.00.0.00.32.0000', 'nama_skpd'=>'KECAMATAN PANTI', 'id_bidang'=>73],
            ['id'=>67 ,'kode_skpd'=>'7.01.0.00.0.00.4..0000', 'nama_skpd'=>'KECAMATAN BALUNG', 'id_bidang'=>73],
            ['id'=>68 ,'kode_skpd'=>'7.01.0.00.0.00.5..0000', 'nama_skpd'=>'KECAMATAN BANGSALSARI', 'id_bidang'=>73],
            ['id'=>69 ,'kode_skpd'=>'7.01.0.00.0.00.6..0000', 'nama_skpd'=>'KECAMATAN GUMUKMAS', 'id_bidang'=>73],
            ['id'=>70 ,'kode_skpd'=>'7.01.0.00.0.00.7..0000', 'nama_skpd'=>'KECAMATAN JELBUK', 'id_bidang'=>73],
            ['id'=>71 ,'kode_skpd'=>'7.01.0.00.0.00.8..0000', 'nama_skpd'=>'KECAMATAN JENGGAWAH', 'id_bidang'=>73],
            ['id'=>72 ,'kode_skpd'=>'7.01.0.00.0.00.9..0000', 'nama_skpd'=>'KECAMATAN JOMBANG', 'id_bidang'=>73],
            ['id'=>73 ,'kode_skpd'=>'8.01.0.00.0.00.1..0000', 'nama_skpd'=>'BADAN KESATUAN BANGSA DAN POLITIK', 'id_bidang'=>73]
        ];
        
        DB::table('skpd')->insert($skpd);
        $this->command->info('Tabel SKPD telah diisi!');
    }
}
