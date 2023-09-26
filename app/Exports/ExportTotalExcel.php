<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use App\Skpd;
use App\Urusan;
use App\Misi;
use App\Tujuan;
use App\SasaranBaru;
use App\Program;

class ExportTotalExcel extends \PhpOffice\PhpSpreadsheet\Cell\StringValueBinder implements FromView, WithColumnWidths, WithCustomValueBinder
{
    public function view(): View
    {
        $skpd = Skpd::where('id', request()->id)->first();
        $program = Program::where('skpd_id', $skpd->id)->get();
        // $urusan = Urusan::with('BidangUrusan', 'BidangUrusan.Program', 'BidangUrusan.Program.Kegiatan', 'BidangUrusan.Program.Kegiatan.SubKegiatan')->orderBy('id', 'ASC')->get();
        // $sasaran = SasaranBaru::all();
        return view('pages.excel.laporan_total', compact('skpd', 'program'));
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 30,
            'C' => 25,
            'D' => 75,
            'E' => 100,
            'F' => 18,
            'G' => 18,
            'H' => 18,
            'I' => 18,
            'J' => 18,
            'K' => 18,
            'I' => 18,
            'L' => 18,
            'M' => 18,
            'N' => 18,
            'O' => 18,
            'P' => 18,
            'Q' => 18,
            'R' => 18,
            'S' => 18,
            'T' => 18,
            'U' => 18,
            'V' => 18,
            'W' => 18,
            'X' => 18,
            'Y' => 18,
            'Z' => 18,
            'AA' => 18,
            'AB' => 25,
        ];
    }
}
