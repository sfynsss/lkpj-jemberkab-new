<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PerkembanganAPBD;

class PerkembanganAPBDController extends Controller
{
    public function index()
    {
        $data = PerkembanganAPBD::all();
        return view('pages.perkembangan_apbd.index', compact('data'));
    }
}
