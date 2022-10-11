<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrioritasNasionalController extends Controller
{
    public function listSKPD(){
        return view('pages.admin.prioritas.list_skpd');
    }
}
