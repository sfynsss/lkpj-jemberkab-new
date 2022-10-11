<?php

namespace App\Http\Controllers\OPD;

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

class KinerjaOPDController extends Controller
{
    public function program(){
        $nama = Skpd::where('id', Auth::user()->id_skpd)->value('nama_skpd');
        $data = Program::join('users', 'program.id', 'users.id_skpd')->where('program.id_skpd', '=', Auth::user()->id_skpd)->get();
        return view('pages.opd.kinerja.program', compact('data', 'nama'));
    }

    public function kegiatan($i){
        $nama = Kegiatan::join('program', 'kegiatan.id_program', 'program.id')->where('kegiatan.id_program', $i)->value('program.nama_program');
        $data = Kegiatan::where('id_program', $i)->get();
        return view('pages.opd.kinerja.kegiatan', compact('data', 'nama'));
    }

    public function subkegiatan($i){
        $nama = SubKegiatan::join('kegiatan', 'sub_kegiatan.id_kegiatan', 'kegiatan.id')->where('sub_kegiatan.id_kegiatan', $i)->value('kegiatan.nama_kegiatan');
        $data = SubKegiatan::join('det_subkegiatan', 'sub_kegiatan.id_det_sub_keg', 'det_subkegiatan.id')->where('sub_kegiatan.id_kegiatan', $i)->get();
        return view('pages.opd.kinerja.subkegiatan', compact('data', 'nama'));
    }

    public function kinerjaProgram(Request $request){
        $update = Program::where('id', $request->id)->update([
            'kinerja_program1'  => $request->kinerja_program1
        ]);
        return Redirect::back();
    }

    public function kinerjaKegiatan(Request $request){
        $update = Kegiatan::where('id', $request->id)->update([
            'kinerja_kegiatan1'  => $request->kinerja_kegiatan1
        ]);
        return Redirect::back();
    }
}
