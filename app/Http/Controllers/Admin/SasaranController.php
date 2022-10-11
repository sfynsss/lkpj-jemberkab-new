<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SasaranController extends Controller
{
    public function listSKPD(){
        return view('pages.admin.sasaran.list_skpd');
    }
    
    public function index(){
        return view('pages.admin.sasaran.index');
    }

    public function create(){
        return view('pages.admin.sasaran.tambah');
    }

    public function edit(){
        return view('pages.admin.sasaran.edit');
    }

    public function programSasaran(){
        return view('pages.admin.sasaran.program');
    }

    public function createProgram(){
        return view('pages.admin.sasaran.tambah_program');
    }
}
