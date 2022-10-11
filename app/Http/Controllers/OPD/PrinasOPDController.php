<?php

namespace App\Http\Controllers\OPD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use App\SubKegiatan;
use App\Kegiatan;
use App\Prioritas;
use App\Skpd;
use Auth;
use Redirect;

class PrinasOPDController extends Controller
{
    public function program(){
        $nama = Skpd::where('id', Auth::user()->id_skpd)->value('nama_skpd');
        $data = Program::join('users', 'program.id', 'users.id_skpd')->where('program.id_skpd', '=', Auth::user()->id_skpd)->get();
        return view('pages.opd.prioritas.program', compact('data', 'nama'));
    }

    public function kegiatan($i){
        $nama = Kegiatan::join('program', 'kegiatan.id_program', 'program.id')->where('kegiatan.id_program', $i)->value('program.nama_program');
        $data = Kegiatan::where('id_program', $i)->get();
        return view('pages.opd.prioritas.kegiatan', compact('data', 'nama'));
    }

    public function subkegiatan($i){
        $nama = SubKegiatan::join('kegiatan', 'sub_kegiatan.id_kegiatan', 'kegiatan.id')->where('sub_kegiatan.id_kegiatan', $i)->value('kegiatan.nama_kegiatan');
        $data = SubKegiatan::where('id_kegiatan', $i)->get();
        $prioritas = Prioritas::all();
        return view('pages.opd.prioritas.subkegiatan', compact('data', 'nama', 'prioritas'));
    }

    public function storePrioritas(Request $request)
    {
        $update = SubKegiatan::where('id', $request->id)->update([
            'prioritas_nasional' => $request->prioritas_nasional
        ]);

        return Redirect::back();
    }
}
