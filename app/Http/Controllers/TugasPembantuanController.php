<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TugasPembantuan;
use App\Skpd;
use App\SubkegiatanInduk;
use Alert;
use Carbon\Carbon;
use Auth;
use PDF;

class TugasPembantuanController extends Controller
{
    public function index()
    {
        $data = TugasPembantuan::where('skpd_id', Auth::user()->skpd_id)->orderBy('id', 'DESC')->get();
        return view('pages.tugas_pembantuan.index', compact('data'));
    }

    public function create()
    {
        $subkegiatan = SubkegiatanInduk::where('skpd_id', Auth::user()->skpd_id)->orderBy('kode_subkegiatan', 'ASC')->get();
        return view('pages.tugas_pembantuan.create', compact('subkegiatan'));
    }

    public function store(Request $request)
    {
        $insert = TugasPembantuan::insert([
            'skpd_id'   => Auth::user()->skpd_id,
            'dasar_hukum' => $request->dasar_hukum,
            'pemberi_tugas' => $request->pemberi_tugas,
            'penerima_tugas' => $request->penerima_tugas,
            'kode_fungsi' => $request->kode_fungsi,
            'nama_fungsi' => $request->nama_fungsi,
            'kode_subfungsi' => $request->kode_subfungsi,
            'nama_subfungsi' => $request->nama_subfungsi,
            'subkegiatan_id' => $request->subkegiatan_id,
            'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
            'no_sp_dipa' => $request->no_sp_dipa,
            'permasalahan' => $request->permasalahan,
            'solusi' => $request->solusi,
            'keterangan' => $request->keterangan,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Alert::success('Berhasil', 'Data tugas pembantuan berhasil ditambah');
        return redirect()->route('tugas-pembantuan');
    }

    public function edit($id)
    {
        $data = TugasPembantuan::findOrFail($id);
        $subkegiatan = SubkegiatanInduk::where('skpd_id', Auth::user()->skpd_id)->orderBy('kode_subkegiatan', 'ASC')->get();
        return view('pages.tugas_pembantuan.edit', compact('data', 'subkegiatan'));
    }

    public function update(Request $request)
    {
        $data = TugasPembantuan::findOrFail($request->id_data);
        $data->update([
            'dasar_hukum' => $request->dasar_hukum,
            'pemberi_tugas' => $request->pemberi_tugas,
            'penerima_tugas' => $request->penerima_tugas,
            'kode_fungsi' => $request->kode_fungsi,
            'nama_fungsi' => $request->nama_fungsi,
            'kode_subfungsi' => $request->kode_subfungsi,
            'nama_subfungsi' => $request->nama_subfungsi,
            'subkegiatan_id' => $request->subkegiatan_id,
            'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
            'no_sp_dipa' => $request->no_sp_dipa,
            'permasalahan' => $request->permasalahan,
            'solusi' => $request->solusi,
            'keterangan' => $request->keterangan,
            'updated_at' => Carbon::now(),
        ]);
        Alert::success('Berhasil', 'Data tugas pembantuan berhasil diubah');
        return redirect()->route('tugas-pembantuan');
    }

    public function delete($id)
    {
        $data = TugasPembantuan::findOrFail($id);
        $data->delete();
        Alert::warning('Berhasil', 'Data tugas pembantuan berhasil dihapus');
        return redirect()->route('tugas-pembantuan');
    }

    public function export()
    {
        $data = TugasPembantuan::where('skpd_id', Auth::user()->skpd_id)->orderBy('id', 'DESC')->get();
        $pdf = PDF::setPaper('A4', 'landscape')->loadview('pages.tugas_pembantuan.export', compact('data'));
        return $pdf->stream();
    }
}
