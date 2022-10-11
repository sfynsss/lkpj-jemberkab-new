<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use App\Kegiatan;
use App\SubKegiatan;

class RenstraController extends Controller
{

    public function program($i){
        $data = Program::where('id_skpd', $i)->get();

        return view('pages.admin.renstra.program', compact('data'));
    }

    public function kegiatan($i){
        $data = Kegiatan::where('id_program', $i)->get();

        return view('pages.admin.renstra.kegiatan', compact('data'));
    }

    public function ubahRENSTRA($i){
        $data = Kegiatan::where('id', $i)->first();

        return view('pages.admin.renstra.edit', compact('data'));
    }

    public function simpanRENSTRA(Request $request, $id_kegiatan)
    {
        $id_kegiatan = Kegiatan::where('id', $id_kegiatan)->pluck('id')->first();
        $update = Kegiatan::where('id', $id_kegiatan)->update([
            'indikator_kegiatan'        => $request->outcome,
            'satuan_kinerja_kegiatan'   => $request->satuan,
            'target_kinerja1'           => $request->kinerja1,
            'target_kinerja2'           => $request->kinerja2,
            'target_kinerja3'           => $request->kinerja3,
            'target_kinerja4'           => $request->kinerja4,
            'target_kinerja5'           => $request->kinerja5,
            'target_kinerja6'           => $request->kinerja6,
            'pagu_indikatif_kegiatan1'   => $request->pagu1,
            'pagu_indikatif_kegiatan2'   => $request->pagu2,
            'pagu_indikatif_kegiatan3'   => $request->pagu3,
            'pagu_indikatif_kegiatan4'   => $request->pagu4,
            'pagu_indikatif_kegiatan5'   => $request->pagu5,
            'pagu_indikatif_kegiatan6'   => $request->pagu6
        ]);

        if($update){
            return redirect()->route('renstra', $id_kegiatan)->with('success','Data Berhasil di Simpan');
        } else {
            return redirect()->route('renstra', $id_kegiatan)->with('error','Data Gagal di Simpan');
        }
    }


    public function subkegiatan($id)
    {
        $data = SubKegiatan::where('id_kegiatan', $id)->get();

        return view('pages.admin.renstra.subkegiatan', compact('data'));
    }

    public function ubahSubkegiatanRENSTRA($i){
        $data = SubKegiatan::where('id', $i)->first();
        $kegiatan = Kegiatan::join('program', 'program.id', '=', 'kegiatan.id_program')->where('kegiatan.id', $data->id_kegiatan)->first();

        return view('pages.admin.renstra.edit_subkegiatan', compact('data', 'kegiatan'));
        // dd($kegiatan);
    }

    public function simpanSubkegiatanRENSTRA(Request $request, $id_subkegiatan)
    {
        $id_subkegiatan = SubKegiatan::where('id', $id_subkegiatan)->pluck('id')->first();
        $update = SubKegiatan::where('id', $id_subkegiatan)->update([
            'indikator_sub_keg'         => $request->outcome,
            'satuan_target_sub_keg'     => $request->satuan,
            'target_sub_keg2'           => $request->target2,
            'target_sub_keg3'           => $request->target3,
            'target_sub_keg4'           => $request->target4,
            'target_sub_keg5'           => $request->target5,
            'target_sub_keg6'           => $request->target6,
            'pagu_indikatif_sub_keg2'   => $request->anggaran2,
            'pagu_indikatif_sub_keg3'   => $request->anggaran3,
            'pagu_indikatif_sub_keg4'   => $request->anggaran4,
            'pagu_indikatif_sub_keg5'   => $request->anggaran5,
            'pagu_indikatif_sub_keg6'   => $request->anggaran6
        ]);

        if($update){
            return redirect()->route('renstra-subkegiatan', $id_subkegiatan)->with('success','Data Berhasil di Simpan');
        } else {
            return redirect()->route('renstra-subkegiatan', $id_subkegiatan)->with('error','Data Gagal di Simpan');
        }
    }
}
