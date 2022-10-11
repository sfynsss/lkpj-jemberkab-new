<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use App\Urusan;
use App\BidangUrusan;
use App\Skpd;
use Auth;
use Redirect;

class RPJMDController extends Controller
{
    public function rpjm($id_skpd){
        $data = Program::where('id_skpd', '=', $id_skpd)->get();

        return view('pages.admin.rpjmd.program', compact('data'));
    }

    public function ubahRPJM($id){
        $data = Program::where('id', '=', $id)->first();

        return view('pages.admin.rpjmd.edit', compact('data'));
    }

    public function simpanRPJM(Request $request, $id_program)
    {
        $id_skpd = Program::where('id', $id_program)->pluck('id_skpd')->first();
        $update = Program::where('id', $id_program)->update([
            'indikator_program'         => $request->outcome,
            'satuan_target_program'     => $request->satuan,
            'target_program2'           => $request->target2,
            'target_program3'           => $request->target3,
            'target_program4'           => $request->target4,
            'target_program5'           => $request->target5,
            'target_program6'           => $request->target6,
            'pagu_indikatif_program2'   => $request->pagu2,
            'pagu_indikatif_program3'   => $request->pagu3,
            'pagu_indikatif_program4'   => $request->pagu4,
            'pagu_indikatif_program5'   => $request->pagu5,
            'pagu_indikatif_program6'   => $request->pagu6
        ]);

        if($update){
            return redirect()->route('rpjmd-program', $id_skpd)->with('success','Data Berhasil di Simpan');
        } else {
            return redirect()->route('rpjmd-program', $id_skpd)->with('error','Data Gagal di Simpan');
        }
    }

}
