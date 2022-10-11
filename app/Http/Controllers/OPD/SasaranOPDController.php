<?php

namespace App\Http\Controllers\OPD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use App\Sasaran;
use App\DetSasaran;
use App\Skpd;
use Auth;
use Redirect;

class SasaranOPDController extends Controller
{
    public function index() 
    {
        $nama = Skpd::where('id', Auth::user()->id_skpd)->value('nama_skpd');
        $data = Sasaran::where('id_skpd', Auth::user()->id_skpd)->get();
        return view('pages.opd.sasaran.index', compact('data','nama'));
    }

    public function create()
    {
        return view('pages.opd.sasaran.create');
    }

    public function store(Request $request) 
    {
        $simpan = Sasaran::insert([
            'id_skpd'   => Auth::user()->id_skpd,
            'sasaran'   => $request->sasaran,
            'tahun_sasaran' => 2021,
            'indikator_sasaran' => $request->indikator_sasaran,
            'target_kinerja_sasaran1'   => $request->target_kinerja_sasaran1,
            'target_kinerja_sasaran2'   => $request->target_kinerja_sasaran2,
            'target_kinerja_sasaran3'   => $request->target_kinerja_sasaran3,
            'target_kinerja_sasaran4'   => $request->target_kinerja_sasaran4,
            'target_kinerja_sasaran5'   => $request->target_kinerja_sasaran5,
            'target_kinerja_sasaran6'   => $request->target_kinerja_sasaran6
        ]);
        return redirect()->route('sasaran-opd')->with(['success', 'Data Sasaran Berhasil Ditambah']);
    }

    public function edit($id)
    {
        $data = Sasaran::where('id', $id)->first();
        return view('pages.opd.sasaran.edit', compact('data'));
    }

    public function update(Request $request) 
    {
        $update = Sasaran::where('id', $request->id)->update([
            'sasaran'   => $request->sasaran,
            'indikator_sasaran'   => $request->indikator_sasaran,
            'target_kinerja_sasaran1'   => $request->target_kinerja_sasaran1,
            'target_kinerja_sasaran2'   => $request->target_kinerja_sasaran2,
            'target_kinerja_sasaran3'   => $request->target_kinerja_sasaran3,
            'target_kinerja_sasaran4'   => $request->target_kinerja_sasaran4,
            'target_kinerja_sasaran5'   => $request->target_kinerja_sasaran5,
            'target_kinerja_sasaran6'   => $request->target_kinerja_sasaran6,
            'realisasi_sasaran_triwulan1'   => $request->realisasi_sasaran_triwulan1,
            'realisasi_sasaran_triwulan2'   => $request->realisasi_sasaran_triwulan2,
            'realisasi_sasaran_triwulan3'   => $request->realisasi_sasaran_triwulan3,
            'realisasi_sasaran_triwulan4'   => $request->realisasi_sasaran_triwulan4,
            'penjelasan_sasaran'        => $request->penjelasan_sasaran,
        ]);
        return redirect()->route('sasaran-opd')->with(['warning', 'Data Sasaran Berhasil Diubah']);
    }

    public function delete($id) {
        $delete = Sasaran::findOrFail($id);
        $delete->delete();
        //$delete_det = Sasaran::join('det_sasaran', 'sasaran.id', 'sasaran.id_sasaran')->where('det_sasaran.id_sasaran', $id)->get();
        // $delete_det->delete();
        return redirect()->route('sasaran-opd')->with(['danger' => 'Data Sasaran Berhasil Dihapus']);
    }

    public function program($id)
    {
        $sasaran = Sasaran::where('id', $id)->first();
        $program = Program::where('id_skpd', Auth::user()->id_skpd)->get();
        //$data = DetSasaran::where('id_sasaran', $id)->get();
        $data = Program::join('det_sasaran', 'program.id', 'det_sasaran.id_program')->where('det_sasaran.id_sasaran', $id)->get();
        return view('pages.opd.sasaran.program', compact('sasaran', 'data', 'program'));
    }

    public function storeProgram(Request $request)
    {
        $validated = $request->validate([
            'id_program' => 'required|unique:det_sasaran',
        ]);
        $insert = DetSasaran::insert([
            'id_sasaran'    => $request->id_sasaran,
            'id_program'    => $request->id_program
        ]);
        return Redirect::back();
    }

    public function deleteProgram($id) {
        $delete = DetSasaran::findOrFail($id);
        $delete->delete();
        return Redirect::back();
    }


}
