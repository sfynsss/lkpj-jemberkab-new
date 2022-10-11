<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PredikatController extends Controller
{
    public function index(){
        return view('pages.admin.predikat.index');
    }

    public function indexGrafik(){
        return view('pages.admin.predikat.grafik');
    }

    public function indexTotal(){
        return view('pages.admin.predikat.total');
    }

    public function indexTotalSKPD(){
        return view('pages.admin.predikat.total_skpd');
    }
}
