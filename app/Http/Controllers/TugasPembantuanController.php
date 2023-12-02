<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasPembantuanController extends Controller
{
    public function index()
    {
        return view('pages.tugas_pembantuan.index');
    }
}
