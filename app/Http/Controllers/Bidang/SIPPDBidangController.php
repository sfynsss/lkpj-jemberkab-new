<?php

namespace App\Http\Controllers\Bidang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use App\SubKegiatan;
use App\DetSubkegiatan;
use App\Kegiatan;
use App\Urusan;
use App\BidangUrusan;
use App\Skpd;
use Auth;
use Redirect;
Use Alert;

class SIPPDBidangController extends Controller
{
    public function listSKPD(){
        $data = SKPD::where('id_bidang', Auth::user()->id)->get();
        return view('pages.bidang.sippd.list_skpd', compact('data'));
    }

    public function program($id_skpd){
        $nama = Program::join('skpd', 'program.id_skpd', 'skpd.id')->where('program.id_skpd', $id_skpd)->value('skpd.nama_skpd');
        $data = Program::where('id_skpd', '=', $id_skpd)->get();
        return view('pages.bidang.sippd.program', compact('data', 'nama'));
    }

    public function kegiatan($i){
        $nama = Kegiatan::join('program', 'kegiatan.id_program', 'program.id')->where('kegiatan.id_program', $i)->value('program.nama_program');
        $data = Kegiatan::where('id_program', $i)->get();
        return view('pages.bidang.sippd.kegiatan', compact('data', 'nama'));
    }

    public function subkegiatan($i){
        $nama = SubKegiatan::join('kegiatan', 'sub_kegiatan.id_kegiatan', 'kegiatan.id')->where('sub_kegiatan.id_kegiatan', $i)->value('kegiatan.nama_kegiatan');
        $data = SubKegiatan::where('sub_kegiatan.id_kegiatan', $i)->get();
        return view('pages.bidang.sippd.subkegiatan', compact('data', 'nama'));
    }

    public function edit($id) {
        $ket_kegiatan = SubKegiatan::join('kegiatan', 'sub_kegiatan.id_kegiatan', 'kegiatan.id')->where('sub_kegiatan.id', $id)->first();
        $ket_program = Program::where('id', $ket_kegiatan->id_program)->first();
        $ket_skpd = Skpd::where('id', $ket_program->id_skpd)->first();
        $sub_kegiatan = SubKegiatan::where('id', $id)->first();
        //$det_subkegiatan = DetSubkegiatan::where('id_sub_keg', $id)->where('tahun', date('Y'))->first();
        $det_subkegiatan = DetSubkegiatan::join('sub_kegiatan', 'det_subkegiatan.id', 'sub_kegiatan.id_det_sub_keg')
        ->where('sub_kegiatan.id_det_sub_keg', $id)
        ->where('tahun', date('Y'))
        ->first();
        return view('pages.bidang.sippd.ubah_subkegiatan', compact('ket_kegiatan', 'ket_program', 'ket_skpd', 'sub_kegiatan', 'det_subkegiatan'));
    }

    public function update(Request $request, $id) {

        
            $target1 = $request->target_sub_keg_1;

            if ($target1 == 0 || $target1 == null || is_numeric($target1) == false) {
                $kinerja1 = 0;
                $kinerja2 = 0;
                $kinerja3 = 0;
                $kinerja4 = 0;
            } else {
                $kinerja1 = ($request->realisasi_sub_keg_1_1/$target1) * 100;
                $kinerja2 = ($request->realisasi_sub_keg_1_2/$target1) * 100;
                $kinerja3 = ($request->realisasi_sub_keg_1_3/$target1) * 100;
                $kinerja4 = ($request->realisasi_sub_keg_1_4/$target1) * 100;
            }

            $insert = SubKegiatan::where('id', $id)->update([
                'target_sub_keg_1'          => $request->target_sub_keg_1,
                'satuan_target_sub_keg_1'   => $request->satuan_target_sub_keg_1,
                'indikator_sub_keg'         => $request->indikator_sub_keg,
                'pagu_indikatif_sub_keg_1'  => $request->pagu_indikatif_sub_keg1, 
                'prakiraan_maju_sub_keg_1'  => $request->prakiraan_maju_sub_keg1,
                'papbd_sub_keg'             => $request->papbd_sub_keg,
                'realisasi_sub_keg_1_1'     => $request->realisasi_sub_keg_1_1,
                'realisasi_sub_keg_1_2'     => $request->realisasi_sub_keg_1_2,
                'realisasi_sub_keg_1_3'     => $request->realisasi_sub_keg_1_3,
                'realisasi_sub_keg_1_4'     => $request->realisasi_sub_keg_1_4,
                'serapan_sub_keg_1_1'       => $request->serapan_sub_keg_1_1,
                'serapan_sub_keg_1_2'       => $request->serapan_sub_keg_1_2,
                'serapan_sub_keg_1_3'       => $request->serapan_sub_keg_1_3,
                'serapan_sub_keg_1_4'       => $request->serapan_sub_keg_1_4,
                'masalah_sub_keg_1_1'       => $request->masalah_sub_keg_1_1,
                'masalah_sub_keg_1_2'       => $request->masalah_sub_keg_1_2,
                'masalah_sub_keg_1_3'       => $request->masalah_sub_keg_1_3,
                'masalah_sub_keg_1_4'       => $request->masalah_sub_keg_1_4,
                'solusi_sub_keg_1_1'        => $request->solusi_sub_keg_1_1,
                'solusi_sub_keg_1_2'        => $request->solusi_sub_keg_1_2,
                'solusi_sub_keg_1_3'        => $request->solusi_sub_keg_1_3,
                'solusi_sub_keg_1_4'        => $request->solusi_sub_keg_1_4,
                'kinerja_sub_keg_1_1'       => $kinerja1,
                'kinerja_sub_keg_1_2'       => $kinerja2,
                'kinerja_sub_keg_1_3'       => $kinerja3,
                'kinerja_sub_keg_1_4'       => $kinerja4,
            ]);
        
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
