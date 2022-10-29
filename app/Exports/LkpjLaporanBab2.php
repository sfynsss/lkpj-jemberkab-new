<?php

namespace App\Exports;

use App\Skpd;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LkpjLaporanBab2 extends Controller implements FromView, ShouldAutoSize
{
    
    public function view(): View
    {
        $data = Skpd::where('id', '>=', 61)->where('id', '<=', 73)->get();
        return view('lkpj-fix.pages.laporan_opd.bab2_total', compact('data'));
    }

}
