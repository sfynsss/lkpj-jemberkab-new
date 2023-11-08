<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IndikatorKependudukan;

class IndikatorKependudukanController extends Controller
{
    public function index()
    {
        $data = IndikatorKependudukan::all();
        return view('pages.indikator_kependudukan.index', compact('data'));
    }
}
