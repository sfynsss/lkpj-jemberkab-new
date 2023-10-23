<?php

namespace App\Http\Controllers\LKPJ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($skpd_id)
    {
        $data = Program::where('skpd_id', $skpd_id)->get();

        return view('pages.home.program', compact('data'));
    }
}
