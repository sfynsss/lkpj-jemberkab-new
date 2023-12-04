<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\IKDExport;
use App\IKD;
use App\Skpd;
use PDF;

class CapaianIKDController extends Controller
{
    public function index()
    {
        if (Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            if (Auth::user()->hak_akses == 'BIDANG') {
                $data = Skpd::where('bidang_id', Auth::user()->id)->get();
            } else {
                $data = Skpd::all();
            }
            $link = 'capaian-ikd-admin';
            $judul = 'Capaian IKD';
            $link_export = 'capaian-ikd-export';
            return view('pages.skpd.index', compact('data', 'link', 'judul', 'link_export'));
        } else {
            $skpd = Skpd::findOrFail(Auth::user()->skpd_id);
            $data = IKD::where('skpd_id', $skpd)->get();
            return view('pages.capaian_ikd.index', compact('data', 'skpd'));
        }
    }

    public function export()
    {
        $fokus = [
            ['kode_fokus' => '1', 'nama_fokus' => 'Layanan Urusan Wajib Dasar'],
            ['kode_fokus' => '2', 'nama_fokus' => 'Layanan Urusan Wajib Non Dasar'],
            ['kode_fokus' => '3', 'nama_fokus' => 'Layanan Urusan Pilihan'],
            ['kode_fokus' => '4', 'nama_fokus' => 'Pendukung Urusan Pemerintahan'],
            ['kode_fokus' => '5', 'nama_fokus' => 'Penunjang Urusan Pemerintahan'],
            ['kode_fokus' => '6', 'nama_fokus' => 'Unsur Pengawasan'],
            ['kode_fokus' => '7', 'nama_fokus' => 'Unsur Kewilayahan'],
            ['kode_fokus' => '8', 'nama_fokus' => 'Unsur Pemerintahan Umum'],
        ];

        $bidang_urusan = [
            ['kode_fokus' => '1', 'kode_bidang' => '1', 'nama_bidang' => 'Pendidikan'],
            ['kode_fokus' => '1', 'kode_bidang' => '2', 'nama_bidang' => 'Kesehatan'],
            ['kode_fokus' => '1', 'kode_bidang' => '3', 'nama_bidang' => 'Pekerjaan Umum dan Tata Ruang'],
            ['kode_fokus' => '1', 'kode_bidang' => '4', 'nama_bidang' => 'Perumahan Rakyat dan Kawasan Permukiman'],
            ['kode_fokus' => '1', 'kode_bidang' => '5', 'nama_bidang' => 'Ketentraman, Ketertiban Umum, dan Perlindungan Masyarakat'],
            ['kode_fokus' => '1', 'kode_bidang' => '6', 'nama_bidang' => 'Sosial'],
            ['kode_fokus' => '2', 'kode_bidang' => '7', 'nama_bidang' => 'Tenaga Kerja'],
            ['kode_fokus' => '2', 'kode_bidang' => '8', 'nama_bidang' => 'Pemberdayaan Perempuan dan Perlindungan Anak'],
            ['kode_fokus' => '2', 'kode_bidang' => '9', 'nama_bidang' => 'Pangan'],
            ['kode_fokus' => '2', 'kode_bidang' => '10', 'nama_bidang' => 'Pertanahan'],
            ['kode_fokus' => '2', 'kode_bidang' => '11', 'nama_bidang' => 'Lingkungan Hidup'],
            ['kode_fokus' => '2', 'kode_bidang' => '12', 'nama_bidang' => 'Administrasi Kependudukan dan Catatan Sipil'],
            ['kode_fokus' => '2', 'kode_bidang' => '13', 'nama_bidang' => 'Pemberdayaan Masyarakat dan Desa'],
            ['kode_fokus' => '2', 'kode_bidang' => '14', 'nama_bidang' => 'Pengendalian Penduduk dan Keluarga Berencana'],
            ['kode_fokus' => '2', 'kode_bidang' => '15', 'nama_bidang' => 'Perhubungan'],
            ['kode_fokus' => '2', 'kode_bidang' => '16', 'nama_bidang' => 'Komunikasi dan Informatika'],
            ['kode_fokus' => '2', 'kode_bidang' => '17', 'nama_bidang' => 'Koperasi, Usaha Kecil, dan Menengah'],
            ['kode_fokus' => '2', 'kode_bidang' => '18', 'nama_bidang' => 'Penanaman Modal'],
            ['kode_fokus' => '2', 'kode_bidang' => '19', 'nama_bidang' => 'Kepemudaan dan Olah Raga'],
            ['kode_fokus' => '2', 'kode_bidang' => '20', 'nama_bidang' => 'Statistik'],
            ['kode_fokus' => '2', 'kode_bidang' => '21', 'nama_bidang' => 'Persandian'],
            ['kode_fokus' => '2', 'kode_bidang' => '22', 'nama_bidang' => 'Kebudayaan'],
            ['kode_fokus' => '2', 'kode_bidang' => '23', 'nama_bidang' => 'Perpustakaan'],
            ['kode_fokus' => '2', 'kode_bidang' => '24', 'nama_bidang' => 'Kearsipan'],
            ['kode_fokus' => '3', 'kode_bidang' => '25', 'nama_bidang' => 'Kelautan dan Perikanan'],
            ['kode_fokus' => '3', 'kode_bidang' => '26', 'nama_bidang' => 'Pariwisata'],
            ['kode_fokus' => '3', 'kode_bidang' => '27', 'nama_bidang' => 'Pertanian'],
            ['kode_fokus' => '3', 'kode_bidang' => '30', 'nama_bidang' => 'Perdagangan'],
            ['kode_fokus' => '3', 'kode_bidang' => '31', 'nama_bidang' => 'Perindustrian'],
            ['kode_fokus' => '4', 'kode_bidang' => '1', 'nama_bidang' => 'Sekretariat Daerah'],
            ['kode_fokus' => '4', 'kode_bidang' => '2', 'nama_bidang' => 'Sekretariat DPRD'],
            ['kode_fokus' => '5', 'kode_bidang' => '1', 'nama_bidang' => 'Perencanaan Pembangunan'],
            ['kode_fokus' => '5', 'kode_bidang' => '2', 'nama_bidang' => 'Keuangan'],
            ['kode_fokus' => '5', 'kode_bidang' => '3', 'nama_bidang' => 'Kepegawaian'],
            ['kode_fokus' => '5', 'kode_bidang' => '4', 'nama_bidang' => 'Pendidikan dan Pelatihan'],
            ['kode_fokus' => '5', 'kode_bidang' => '5', 'nama_bidang' => 'Penelitian dan Pengembangan'],
            ['kode_fokus' => '6', 'kode_bidang' => '1', 'nama_bidang' => 'Inspektorat'],
            ['kode_fokus' => '7', 'kode_bidang' => '1', 'nama_bidang' => 'Kecamatan'],
            ['kode_fokus' => '8', 'kode_bidang' => '1', 'nama_bidang' => 'Kesatuan Bangsa dan Politik'],
        ];

        $data = [];

        if (Auth::user()->hak_akses == 'OPD') {
            $indikator_opd = IKD::where('skpd_id', Auth::user()->skpd_id)->select('kode_fokus')->distinct()->get();
            foreach ($indikator_opd as $indktr) {
                foreach ($fokus as $fk) {
                    if($fk['kode_fokus'] == $indktr->kode_fokus){
                        $kode_fokus = $fk['kode_fokus'];
                        $nama_fokus = $fk['nama_fokus'];
    
                        $tmp_bidang_urusan = [];
    
                        $cari_bidang_urusan = IKD::where('skpd_id', Auth::user()->skpd_id)->where('kode_fokus', $indktr->kode_fokus)->select('kode_bidang_urusan')->distinct()->get();
    
                        foreach ($bidang_urusan as $bdu) {
    
                            foreach($cari_bidang_urusan as $caribidangurusan) {
                                if ($bdu['kode_bidang'] == $caribidangurusan->kode_bidang_urusan) {
                                    $ikd = IKD::where('skpd_id', Auth::user()->skpd_id)->where('kode_fokus', $indktr->kode_fokus)->where('kode_bidang_urusan', $caribidangurusan->kode_bidang_urusan)->get();
                                    $tmp_bidang_urusan[] = [
                                        'kode_fokus'  => $bdu['kode_fokus'],
                                        'kode_bidang' => $bdu['kode_bidang'],
                                        'nama_bidang' => $bdu['nama_bidang'],
                                        'ikd'         => $ikd,
                                    ];
                                }
                            }
                            
                        }
                    
                        $data[] = [
                            'kode_fokus' => $kode_fokus,
                            'nama_fokus' => $nama_fokus,
                            'bidang_urusan' => $tmp_bidang_urusan
                        ];
                        
                    }
                }
            }
        } else {
            foreach ($fokus as $fk) {
                $kode_fokus = $fk['kode_fokus'];
                $nama_fokus = $fk['nama_fokus'];
            
                $tmp_bidang_urusan = [];
            
                foreach ($bidang_urusan as $bdu) {
                    if ($bdu['kode_fokus'] === $kode_fokus) {
                        $ikd = IKD::with('SKPD')->where('kode_fokus', $bdu['kode_fokus'])->where('kode_bidang_urusan', $bdu['kode_bidang'])->get();
                        $tmp_bidang_urusan[] = [
                            'kode_fokus'  => $bdu['kode_fokus'],
                            'kode_bidang' => $bdu['kode_bidang'],
                            'nama_bidang' => $bdu['nama_bidang'],
                            'ikd'         => $ikd,
                        ];
                    }
                }
            
                $data[] = [
                    'kode_fokus' => $kode_fokus,
                    'nama_fokus' => $nama_fokus,
                    'bidang_urusan' => $tmp_bidang_urusan
                ];
            }
        }

        $pdf = PDF::setPaper('A4', 'landscape')->loadview('pages.capaian_ikd.export', compact('data'));
        return $pdf->stream();
    }

    public function indexAdmin($skpd)
    {
        $skpd = Skpd::findOrFail($skpd);
        $data = IKD::where('skpd_id', $skpd->id)->get();
        return view('pages.capaian_ikd.index', compact('data', 'skpd'));
    }
}
