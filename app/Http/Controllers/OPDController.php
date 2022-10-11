<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class OPDController extends Controller
{
    public function index(){
        return view('dashboard_opd');
    }
}
