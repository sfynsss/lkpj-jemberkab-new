<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class CapaianPelaksanaanExport extends \PhpOffice\PhpSpreadsheet\Cell\StringValueBinder implements FromView, WithColumnWidths, WithCustomValueBinder
{
    private $data;
    private $tahun;
    private $opd;

    public function __construct($data, $tahun, $opd)
    {
        $this->data = $data;
        $this->tahun = $tahun;
        $this->opd = $opd;
    }

    public function view(): View
    {
        $data = $this->data;
        $tahun = $this->tahun;
        $opd = $this->opd;
        return view('pages.program_unggulan.export', compact('data','tahun', 'opd'));
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 15,
            'C' => 20,
            'D' => 20,
            'E' => 20,
            'F' => 50,
            'G' => 20,
            'H' => 20,
            'I' => 20,
            'J' => 20,
            'K' => 30,
            'L' => 30,
            'M' => 30,
        ];
    }
}
