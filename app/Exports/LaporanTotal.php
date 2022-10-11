<?php

namespace App\Exports;

// use Maatwebsite\Excel\Concerns\FromCollection;
use App\Skpd;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class LaporanTotal extends Controller implements FromView, ShouldAutoSize, WithColumnWidths, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $awal;
    private $akhir;
    private $tgl_susun;
    private $tgl_disetujui;
    private $tw;

    public function __construct($awal, $akhir, $tgl_susun, $tgl_disetujui, $tw)
    {
        $this->awal = $awal;
        $this->akhir = $akhir;
        $this->tgl_susun = $tgl_susun;
        $this->tgl_disetujui = $tgl_disetujui;
        $this->tw = $tw;
    }

    public function view(): View
    {
        $skpd = Skpd::where('id', '>=', $this->awal)->where('id', '<=', $this->akhir)->get();
        $tw = $this->tw;
        $tgl_susun = $this->tgl_susun;
        $tgl_setuju = $this->tgl_disetujui;
            
        return view('pages.export.laporan_total_excel', compact('skpd', 'tw', 'tgl_susun', 'tgl_setuju'));
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

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->getRowDimension(37)->setRowHeight(-1);
                $event->sheet->getDelegate()->getStyle('A5:AB5')->getAlignment()->setWrapText(true);
            },
        ];
    }
}
