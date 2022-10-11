<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class BidangController extends Controller
{
    public function index(){
        return view('dashboard_bidang');
    }

}
