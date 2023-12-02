<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CapemKategori;
use App\CapemData;
use PDF;
use Alert;
use Carbon\Carbon;

class CapaianPembangunanController extends Controller
{
    public function index()
    {
        $data = CapemKategori::where('skpd_id', Auth::user()->skpd_id)->orderBy('id', 'DESC')->get();
        return view('pages.capaian_pembangunan.index', compact('data'));
    }

    public function show($id)
    {
        $kategori = CapemKategori::findOrFail($id);
        $data = CapemData::where('skpd_id', Auth::user()->skpd_id)->where('kategori_id', $kategori->id)->orderBy('id', 'DESC')->get();
        return view('pages.capaian_pembangunan.show', compact('data', 'kategori'));
    }

    public function storeKategori(Request $request)
    {
        $data = CapemKategori::insert([
            'skpd_id'   => Auth::user()->skpd_id,
            'nama_kategori' => $request->nama_kategori,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ]);
        Alert::success('Berhasil', 'Kategori berhasil ditambahkan');
        return redirect()->route('capaian-pembangunan');
    }

    public function updateKategori(Request $request)
    {
        $data = CapemKategori::findOrFail($request->id_kategori_ubah);
        $data->update([
            'nama_kategori' => $request->nama_kategori_ubah,
            'updated_at'    => Carbon::now(),
        ]);
        Alert::success('Berhasil', 'Kategori berhasil diubah');
        return redirect()->route('capaian-pembangunan');
    }

    public function deleteKategori($id)
    {
        $data = CapemKategori::findOrFail($id);
        $cek = CapemData::where('kategori_id', $data->id)->count();

        if ($data->skpd_id != Auth::user()->skpd_id) {
            Alert::error('Gagal', 'Akses tidak dikenal');
            return redirect()->route('capaian-pembangunan');
        } elseif($cek > 0) {
            Alert::error('Gagal', 'Kategori ini memiliki data, silahkan hapus data di dalamnya dahulu');
            return redirect()->route('capaian-pembangunan');
        } else {
            $data->delete();
            Alert::warning('Berhasil', 'Kategori berhasil dihapus');
            return redirect()->route('capaian-pembangunan');
        }
    }

    public function storeData(Request $request)
    {
        $data = CapemData::insert([
            'skpd_id'       => Auth::user()->skpd_id,
            'kategori_id'   => $request->id_kategori,
            'nama_data'     => $request->nama_data,
            'keterangan'    => $request->keterangan,
            'th_2019'       => $request->th_2019,
            'th_2020'       => $request->th_2020,
            'th_2021'       => $request->th_2021,
            'th_2022'       => $request->th_2022,
            'th_2023'       => $request->th_2023,
            'th_2024'       => $request->th_2024,
            'th_2025'       => $request->th_2025,
            'th_2026'       => $request->th_2026,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ]);
        Alert::success('Berhasil', 'Data berhasil ditambahkan');
        return redirect()->route('capaian-pembangunan-show', $request->id_kategori);
    }

    public function updateData(Request $request)
    {
        $data = CapemData::findOrFail($request->id_data);
        $data->update([
            'nama_data'     => $request->nama_data_ubah,
            'keterangan'    => $request->keterangan_ubah,
            'th_2019'       => $request->th_2019_ubah,
            'th_2020'       => $request->th_2020_ubah,
            'th_2021'       => $request->th_2021_ubah,
            'th_2022'       => $request->th_2022_ubah,
            'th_2023'       => $request->th_2023_ubah,
            'th_2024'       => $request->th_2024_ubah,
            'th_2025'       => $request->th_2025_ubah,
            'th_2026'       => $request->th_2026_ubah,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ]);
        Alert::success('Berhasil', 'Data berhasil diubah');
        return redirect()->route('capaian-pembangunan-show', $request->id_kategori);
    }

    public function deleteData($id)
    {
        $data = CapemData::findOrFail($id);
        if ($data->skpd_id != Auth::user()->skpd_id) {
            Alert::error('Gagal', 'Akses tidak dikenal');
            return redirect()->route('capaian-pembangunan-show', $data->kategori_id);
        } else {
            $data->delete();
            Alert::warning('Berhasil', 'Kategori berhasil dihapus');
            return redirect()->route('capaian-pembangunan-show', $data->kategori_id);
        }
    }

    public function export()
    {
        $data = CapemKategori::with('Data')->where('skpd_id', Auth::user()->skpd_id)->orderBy('id', 'DESC')->get();
        $pdf = PDF::setPaper('A4', 'landscape')->loadview('pages.capaian_pembangunan.export', compact('data'));
        return $pdf->stream();
    }
}
