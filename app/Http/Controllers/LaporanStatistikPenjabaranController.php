<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaporanKategori;
use App\LaporanStatistik;
use App\LaporanPenjabaran;
use Auth;
use Alert;

class LaporanStatistikPenjabaranController extends Controller
{
    public function index()
    {
        $data = LaporanKategori::where('skpd_id', Auth::user()->skpd_id)->get();
        return view('pages.laporan.index', compact('data'));
    }

    public function updateKategori(Request $request)
    {
        $data = LaporanKategori::findOrFail($request->id_kategori);
        $data->update([
            'nama_kategori' => $request->nama_kategori,
            'tahun' => $request->tahun,
            'keterangan' => $request->keterangan,
        ]);
        Alert::success('Berhasil', 'Data kategori laporan berhasil diubah');
        return redirect()->route('laporan-kategori');
    }

    public function statistikShow($id)
    {
        $data = LaporanStatistik::where('kategori_id', $id)->orderBy('kode_data', 'ASC')->get();
        return view('pages.laporan.statistik.index', compact('data'));
    }

    public function penjabaranShow($id, $th)
    {
        $data = LaporanPenjabaran::where('kategori_id', $id)->where('tahun', $th)->orderBy('kode_data', 'ASC')->get();
        $tahun = ['2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024', '2025', '2026'];
        return view('pages.laporan.penjabaran.index', compact('data', 'tahun'));
    }

}
