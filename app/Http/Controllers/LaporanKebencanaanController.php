<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaporanKebencanaan;
use Carbon\Carbon;
use Alert;

class LaporanKebencanaanController extends Controller
{
    public function index()
    {
        $data = LaporanKebencanaan::all();
        return view('pages.kebencanaan.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = LaporanKebencanaan::insert([
            'nama_kategori' => $request->nama_kategori,
            'th_2018'       => $request->th_2018,
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
        return redirect()->route('laporan-kebencanaan');
    }

    public function update(Request $request)
    {
        $data = LaporanKebencanaan::findOrFail($request->id_data);
        $data->update([
            'nama_kategori' => $request->nama_kategori,
            'th_2018'       => $request->th_2018,
            'th_2019'       => $request->th_2019,
            'th_2020'       => $request->th_2020,
            'th_2021'       => $request->th_2021,
            'th_2022'       => $request->th_2022,
            'th_2023'       => $request->th_2023,
            'th_2024'       => $request->th_2024,
            'th_2025'       => $request->th_2025,
            'th_2026'       => $request->th_2026,
            'updated_at'    => Carbon::now(),
        ]);
        Alert::success('Berhasil', 'Data berhasil diubah');
        return redirect()->route('laporan-kebencanaan');
    }

    public function delete($id)
    {
        $data = LaporanKebencanaan::findOrFail($id);
        $data->delete();
        Alert::warning('Berhasil', 'Kategori berhasil dihapus');
        return redirect()->route('laporan-kebencanaan');
    }
}
