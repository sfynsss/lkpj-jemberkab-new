<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JumlahPenduduk;
use App\Kecamatan;

class JumlahPendudukController extends Controller
{
    public function index()
    {
        $data = Kecamatan::with('JumlahPenduduk')->orderBy('kode_wilayah', 'ASC')->get();
        return view('pages.jumlah_penduduk.index', compact('data'));
    }
}
