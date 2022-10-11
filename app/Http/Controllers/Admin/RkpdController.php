<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use App\Kegiatan;
use App\SubKegiatan;

class RkpdController extends Controller
{
    public function kegiatan($i){
        $data = Kegiatan::where('id_program', $i)->get();

        return view('pages.admin.rkpd.kegiatan', compact('data'));
    }

    public function program($i){
        $data = Program::where('id_skpd', $i)->get();

        return view('pages.admin.rkpd.program', compact('data'));
    }

    public function subkegiatan($id){
        $data = SubKegiatan::where('id_kegiatan', $id)->get();

        return view('pages.admin.rkpd.subkegiatan', compact('data'));
    }

    public function ubahRKPD($i){
        $data = SubKegiatan::where('id', $i)->first();
        $kegiatan = Kegiatan::join('program', 'program.id', '=', 'kegiatan.id_program')->where('kegiatan.id', $data->id_kegiatan)->first();

        return view('pages.admin.rkpd.edit', compact('data', 'kegiatan'));
        // dd($kegiatan);
    }

    public function simpanRKPD(Request $request, $id_subkegiatan)
    {
        $id_subkegiatan = SubKegiatan::where('id', $id_subkegiatan)->pluck('id')->first();
        $update = SubKegiatan::where('id', $id_subkegiatan)->update([
            'indikator_sub_keg'         => $request->outcome,
            'satuan_target_sub_keg'     => $request->satuan,
            'target_sub_keg_1'          => $request->target1,
            'pagu_indikatif_sub_keg_1'  => $request->anggaran1
        ]);

        if($update){
            return redirect()->route('rkpd-subkegiatan', $id_subkegiatan)->with('success','Data Berhasil di Simpan');
        } else {
            return redirect()->route('rkpd-subkegiatan', $id_subkegiatan)->with('error','Data Gagal di Simpan');
        }
    }
}
