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

class KebijakanStrategisExport extends \PhpOffice\PhpSpreadsheet\Cell\StringValueBinder implements FromView, WithColumnWidths, WithCustomValueBinder
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
        return view('pages.kebijakan_strategis.export', compact('data','tahun', 'opd'));
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 25,
            'C' => 25,
            'D' => 25,
            'E' => 25,
            'F' => 25,
            'G' => 25,
            'I' => 15,
            'H' => 25,
        ];
    }
}
