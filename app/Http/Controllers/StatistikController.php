<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatistikKategori;
use App\StatistikInduk;
use Auth;

class StatistikController extends Controller
{
    public function index()
    {
        $data = StatistikKategori::where('skpd_id', Auth::user()->skpd_id)->where('status', 1)->get();
        return view('pages.statistik.index', compact('data'));
    }

    public function show($id)
    {
        $kategori = StatistikKategori::find($id);
        $data = StatistikInduk::with('Kategori')->where('kategori_id', $kategori->id)->orderBy('kode_data', 'ASC')->orderBy('urutan_data', 'ASC')->get();
        return view('pages.statistik.show', compact('kategori', 'data'));
    }
}
