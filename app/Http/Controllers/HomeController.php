<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
// use PHPExcel_IOFactory;
// use PHPExcel;
use App\User;
use Cookie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function testPrint()
    {
        $data = User::join('skpd', 'skpd.id', '=', 'users.skpd_id')->get();

        //Import Dependencies
        

        //Inside your function
        // $reader = IOFactory::createReader('Xlsx');
        // $spreadsheet = $reader->load(public_path( 'assets/excel-template/export-user.xlsx' ));

        // header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        // header('Content-Disposition: attachment;filename="SF2.xlsx"');
        // $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        // $writer->save('php://output');
        //End of your function
        $inputFileType = IOFactory::identify( public_path( 'assets/excel-template/export-user.xlsx') );
            # Buat objek
        $excel = IOFactory::createReader( $inputFileType );
        $excel = $excel->load( public_path( 'assets/excel-template/export-user.xlsx' ) );
        $excel->setActiveSheetIndex( 0 );
        $sheet = $excel->getActiveSheet();

        $baris = 2;
        foreach ($data as $i => $data) {
            $sheet->setCellValue( "A".$baris, $data->id."" );
            $sheet->setCellValue( "B".$baris, $data->nama_skpd."" );
            $sheet->setCellValue( "C".$baris, $data->nama."" );
            $sheet->setCellValue( "D".$baris, $data->username."" );
            $sheet->setCellValue( "E".$baris, $data->hak_akses."" );
            $baris++;
        }
        
        $objFinal = IOFactory::createWriter( $excel, "Xlsx" );
        header( "Content-Type: application/vnd.ms-excel" );
        header( "Content-Disposition: attachment; filename=data_user.xlsx" );
        header( "Cache-Control: max-age=0" );
        $objFinal->save( 'php://output' );
    }

    public function updateTahunAktif($tahun)
    {
        Cookie::queue('tahun_aktif', $tahun, 60 * 60 * 2);

        return response()->json("Berhasil", 200);
    }
}
