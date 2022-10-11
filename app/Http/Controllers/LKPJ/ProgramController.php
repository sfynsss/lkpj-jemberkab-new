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
    
    public function index($id_skpd)
    {
        $data = Program::where('id_skpd', $id_skpd)->get();

        return view('lkpj-fix.pages.home.program', compact('data'));
    }
}
