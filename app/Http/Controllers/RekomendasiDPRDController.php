<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RekomendasiDPRD;
use App\Skpd;
use App\SubkegiatanInduk;
use Alert;
use Auth;

class RekomendasiDPRDController extends Controller
{
    public function index()
    {
        return view('pages.rekomendari_dprd.index');
    }
}
