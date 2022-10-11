<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use App\Kegiatan;
use App\SubKegiatan;
use App\Skpd;
use App\DetSubKegiatan;
use Auth;
Use Alert;

class SIPPDController extends Controller
{
    public function index(){
        $skpd = Skpd::all();
        return view('pages.admin.sippd.index', compact('skpd'));
    }

    public function indexProgram($i){
        $nama_skpd = Skpd::where('id', $i)->first();
        $program = Program::where('id_skpd', $i)->get();
        return view('pages.admin.sippd.program', compact('nama_skpd','program'));
    }

    public function indexKegiatan($id){
        $nama_program = Program::where('id', $id)->first()->nama_program;
        $kegiatan = Kegiatan::where('id_program', $id)->get();
        return view('pages.admin.sippd.kegiatan', compact('nama_program', 'kegiatan'));
    }

    public function indexSubKegiatan($id){
        if(Auth::user()->hak_akses == "OPD") {
            $sub_keg = Program::where('id_skpd', $id)->get();
            return view('pages.admin.sippd.subkegiatan', compact('sub_keg'));
        } else {
            $kegiatan = Kegiatan::where('id', $id)->first();
            $sub_keg = SubKegiatan::where('id_kegiatan', $id)->get();
            return view('pages.admin.sippd.subkegiatan', compact('kegiatan', 'sub_keg'));
        }
    }

    public function createSubKegiatan($id){
        $ket_program = Program::join('kegiatan', 'program.id', 'kegiatan.id_program')->where('kegiatan.id', $id)->first();
        $ket_skpd = SKPD::where('id', $ket_program->id_skpd)->first();
        $ket_kegiatan = Kegiatan::where('id', $id)->first();
        return view('pages.admin.sippd.tambah_subkegiatan', compact('ket_kegiatan', 'ket_program', 'ket_skpd'));
    }

    public function editSubKegiatan($id){
        $ket_kegiatan = SubKegiatan::join('kegiatan', 'sub_kegiatan.id_kegiatan', 'kegiatan.id')->where('sub_kegiatan.id', $id)->first();
        $ket_program = Program::where('id', $ket_kegiatan->id_program)->first();
        $ket_skpd = Skpd::where('id', $ket_program->id_skpd)->first();
        $sub_kegiatan = SubKegiatan::where('id', $id)->first();
        $det_subkegiatan = DetSubKegiatan::where('id_sub_keg', $id)->where('tahun', date('Y'))->first();
        return view('pages.admin.sippd.ubah_subkegiatan', compact('ket_kegiatan', 'ket_program', 'ket_skpd', 'sub_kegiatan', 'det_subkegiatan'));
    }

    public function simpanSubKegiatan (Request $request, $id) {

        if (Auth::user()->hak_akses == 'OPD') {

            $target1 = $request->target_sub_keg_2;

            if ($target1 == 0 || $target1 == null || is_numeric($target1) == false) {
                $kinerja1 = 0;
                $kinerja2 = 0;
                $kinerja3 = 0;
                $kinerja4 = 0;
            } else {
                $kinerja1 = ($request->realisasi_sub_keg_2_1/$target1) * 100;
                $kinerja2 = ($request->realisasi_sub_keg_2_2/$target1) * 100;
                $kinerja3 = ($request->realisasi_sub_keg_2_3/$target1) * 100;
                $kinerja4 = ($request->realisasi_sub_keg_2_4/$target1) * 100;
            }

            $insert = SubKegiatan::where('id', $id)->update([
                'target_sub_keg_'.$request->tahun_aktif             => $request->target_sub_keg_2,
                'satuan_target_sub_keg_'.$request->tahun_aktif      => $request->satuan_target_sub_keg_2,
                'indikator_sub_keg'                                 => $request->indikator_sub_keg,
                'prakiraan_maju_sub_keg_'.$request->tahun_aktif     => $request->prakiraan_maju_sub_keg_2,
                'papbd_sub_keg_2'                                   => $request->papbd_sub_keg,
                'realisasi_sub_keg_'.$request->tahun_aktif.'_1'     => $request->realisasi_sub_keg_2_1,
                'realisasi_sub_keg_'.$request->tahun_aktif.'_2'     => $request->realisasi_sub_keg_2_2,
                'realisasi_sub_keg_'.$request->tahun_aktif.'_3'     => $request->realisasi_sub_keg_2_3,
                'realisasi_sub_keg_'.$request->tahun_aktif.'_4'     => $request->realisasi_sub_keg_2_4,
                'serapan_sub_keg_'.$request->tahun_aktif.'_1'       => $request->serapan_sub_keg_2_1,
                'serapan_sub_keg_'.$request->tahun_aktif.'_2'       => $request->serapan_sub_keg_2_2,
                'serapan_sub_keg_'.$request->tahun_aktif.'_3'       => $request->serapan_sub_keg_2_3,
                'serapan_sub_keg_'.$request->tahun_aktif.'_4'       => $request->serapan_sub_keg_2_4,
                'masalah_sub_keg_'.$request->tahun_aktif.'_1'       => $request->masalah_sub_keg_2_1,
                'masalah_sub_keg_'.$request->tahun_aktif.'_2'       => $request->masalah_sub_keg_2_2,
                'masalah_sub_keg_'.$request->tahun_aktif.'_3'       => $request->masalah_sub_keg_2_3,
                'masalah_sub_keg_'.$request->tahun_aktif.'_4'       => $request->masalah_sub_keg_2_4,
                'solusi_sub_keg_'.$request->tahun_aktif.'_1'        => $request->solusi_sub_keg_2_1,
                'solusi_sub_keg_'.$request->tahun_aktif.'_2'        => $request->solusi_sub_keg_2_2,
                'solusi_sub_keg_'.$request->tahun_aktif.'_3'        => $request->solusi_sub_keg_2_3,
                'solusi_sub_keg_'.$request->tahun_aktif.'_4'        => $request->solusi_sub_keg_2_4,
                'kinerja_sub_keg_'.$request->tahun_aktif.'_1'       => $kinerja1,
                'kinerja_sub_keg_'.$request->tahun_aktif.'_2'       => $kinerja2,
                'kinerja_sub_keg_'.$request->tahun_aktif.'_3'       => $kinerja3,
                'kinerja_sub_keg_'.$request->tahun_aktif.'_4'       => $kinerja4,
            ]);
        } else {
            $target1 = $request->target_sub_keg_2;

            if ($target1 == 0 || $target1 == null || is_numeric($target1) == false) {
                $kinerja1 = 0;
                $kinerja2 = 0;
                $kinerja3 = 0;
                $kinerja4 = 0;
            } else {
                $kinerja1 = ($request->realisasi_sub_keg_2_1/$target1) * 100;
                $kinerja2 = ($request->realisasi_sub_keg_2_2/$target1) * 100;
                $kinerja3 = ($request->realisasi_sub_keg_2_3/$target1) * 100;
                $kinerja4 = ($request->realisasi_sub_keg_2_4/$target1) * 100;
            }

            $insert = SubKegiatan::where('id', $id)->update([
                'target_sub_keg_'.$request->tahun_aktif             => $request->target_sub_keg_2,
                'satuan_target_sub_keg_'.$request->tahun_aktif      => $request->satuan_target_sub_keg_2,
                'indikator_sub_keg'                                 => $request->indikator_sub_keg,
                'pagu_indikatif_sub_keg_'.$request->tahun_aktif     => $request->pagu_indikatif_sub_keg_2, 
                'prakiraan_maju_sub_keg_'.$request->tahun_aktif     => $request->prakiraan_maju_sub_keg_2,
                'papbd_sub_keg_2'                                   => $request->papbd_sub_keg,
                'realisasi_sub_keg_'.$request->tahun_aktif.'_1'     => $request->realisasi_sub_keg_2_1,
                'realisasi_sub_keg_'.$request->tahun_aktif.'_2'     => $request->realisasi_sub_keg_2_2,
                'realisasi_sub_keg_'.$request->tahun_aktif.'_3'     => $request->realisasi_sub_keg_2_3,
                'realisasi_sub_keg_'.$request->tahun_aktif.'_4'     => $request->realisasi_sub_keg_2_4,
                'serapan_sub_keg_'.$request->tahun_aktif.'_1'       => $request->serapan_sub_keg_2_1,
                'serapan_sub_keg_'.$request->tahun_aktif.'_2'       => $request->serapan_sub_keg_2_2,
                'serapan_sub_keg_'.$request->tahun_aktif.'_3'       => $request->serapan_sub_keg_2_3,
                'serapan_sub_keg_'.$request->tahun_aktif.'_4'       => $request->serapan_sub_keg_2_4,
                'masalah_sub_keg_'.$request->tahun_aktif.'_1'       => $request->masalah_sub_keg_2_1,
                'masalah_sub_keg_'.$request->tahun_aktif.'_2'       => $request->masalah_sub_keg_2_2,
                'masalah_sub_keg_'.$request->tahun_aktif.'_3'       => $request->masalah_sub_keg_2_3,
                'masalah_sub_keg_'.$request->tahun_aktif.'_4'       => $request->masalah_sub_keg_2_4,
                'solusi_sub_keg_'.$request->tahun_aktif.'_1'        => $request->solusi_sub_keg_2_1,
                'solusi_sub_keg_'.$request->tahun_aktif.'_2'        => $request->solusi_sub_keg_2_2,
                'solusi_sub_keg_'.$request->tahun_aktif.'_3'        => $request->solusi_sub_keg_2_3,
                'solusi_sub_keg_'.$request->tahun_aktif.'_4'        => $request->solusi_sub_keg_2_4,
                'kinerja_sub_keg_'.$request->tahun_aktif.'_1'       => $kinerja1,
                'kinerja_sub_keg_'.$request->tahun_aktif.'_2'       => $kinerja2,
                'kinerja_sub_keg_'.$request->tahun_aktif.'_3'       => $kinerja3,
                'kinerja_sub_keg_'.$request->tahun_aktif.'_4'       => $kinerja4,
            ]);
        }

        // $cek = DetSubKegiatan::where('id_sub_keg', $id)->where('tahun', date('Y'))->get();
        // if (count($cek) > 0) {
        //     $insert1 = DetSubkegiatan::where('id_sub_keg', $id)->where('tahun', date('Y'))->update([
        //         'realisasi_sub_keg_1_1'       => $request->realisasi_sub_keg_1_1,
        //         'realisasi_sub_keg_1_2'       => $request->realisasi_sub_keg_1_2,
        //         'realisasi_sub_keg_1_3'       => $request->realisasi_sub_keg_1_3,
        //         'realisasi_sub_keg_1_4'       => $request->realisasi_sub_keg_1_4,
        //         'serapan_sub_keg_1_1'         => $request->serapan_sub_keg_1_1,
        //         'serapan_sub_keg_1_2'         => $request->serapan_sub_keg_1_2,
        //         'serapan_sub_keg_1_3'         => $request->serapan_sub_keg_1_3,
        //         'serapan_sub_keg_1_4'         => $request->serapan_sub_keg_1_4,
        //         'masalah_sub_keg_1'         => $request->masalah_sub_keg_1,
        //         'masalah_sub_keg_2'         => $request->masalah_sub_keg_2,
        //         'masalah_sub_keg_3'         => $request->masalah_sub_keg_3,
        //         'masalah_sub_keg_4'         => $request->masalah_sub_keg_4,
        //         'solusi_sub_keg_1'          => $request->solusi_sub_keg_1,
        //         'solusi_sub_keg_2'          => $request->solusi_sub_keg_2,
        //         'solusi_sub_keg_3'          => $request->solusi_sub_keg_3,
        //         'solusi_sub_keg_4'          => $request->solusi_sub_keg_4
        //     ]);
        // } else {
        //     $insert1 = DetSubKegiatan::insert([
        //         'id_sub_keg'                => $id,
        //         'tahun'                     => date('Y'),
        //         'realisasi_sub_keg_1_1'       => $request->realisasi_sub_keg_1_1,
        //         'realisasi_sub_keg_1_2'       => $request->realisasi_sub_keg_1_2,
        //         'realisasi_sub_keg_1_3'       => $request->realisasi_sub_keg_1_3,
        //         'realisasi_sub_keg_1_4'       => $request->realisasi_sub_keg_1_4,
        //         'serapan_sub_keg_1_1'         => $request->serapan_sub_keg_1_1,
        //         'serapan_sub_keg_1_2'         => $request->serapan_sub_keg_1_2,
        //         'serapan_sub_keg_1_3'         => $request->serapan_sub_keg_1_3,
        //         'serapan_sub_keg_1_4'         => $request->serapan_sub_keg_1_4,
        //         'masalah_sub_keg_1'         => $request->masalah_sub_keg_1,
        //         'masalah_sub_keg_2'         => $request->masalah_sub_keg_2,
        //         'masalah_sub_keg_3'         => $request->masalah_sub_keg_3,
        //         'masalah_sub_keg_4'         => $request->masalah_sub_keg_4,
        //         'solusi_sub_keg_1'          => $request->solusi_sub_keg_1,
        //         'solusi_sub_keg_2'          => $request->solusi_sub_keg_2,
        //         'solusi_sub_keg_3'          => $request->solusi_sub_keg_3,
        //         'solusi_sub_keg_4'          => $request->solusi_sub_keg_4
        //     ]);
        // }

        if ($insert) {
            if (Auth::user()->hak_akses != 'OPD') {
                Alert::success('Berhasil', 'Data Berhasil Diubah !!!');
                return redirect()->route('sippd-subkegiatan', $request->id_kegiatan)->with('success','Sippd Berhasil Diubah');
            } else {   
                Alert::success('Berhasil', 'Data Berhasil Diubah !!!');
                return redirect()->route('sippd-subkegiatan', $request->id_skpd)->with('success','Sippd Berhasil Diubah');
            }
        } else {
            if (Auth::user()->hak_akses != 'OPD') {
                Alert::danger('Berhasil', 'Data Berhasil Diubah !!!');
                return redirect()->route('sippd-subkegiatan', $request->id_kegiatan)->with('danger','Sippd Gagal Diubah');
            } else {   
                Alert::danger('Berhasil', 'Data Berhasil Diubah !!!');
                return redirect()->route('sippd-subkegiatan', $request->id_skpd)->with('danger','Sippd Gagal Diubah');
            }
        }
    }

}
