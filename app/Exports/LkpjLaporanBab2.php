<?php

namespace App\Exports;

use App\Skpd;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Concerns\FromView;

class LkpjLaporanBab2 extends Controller implements FromView
{
    
    public function view(): View
    {
        $data = Skpd::where('id', '>=', 0)->where('id', '<=', 73)->get();
        return view('lkpj-fix.pages.laporan_opd.bab2_excel_baru', compact('data'));
    }

}
