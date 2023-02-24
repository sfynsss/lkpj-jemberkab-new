<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BAB II</title>
</head>
<style type="text/css">
  table.gridtable {
    width:100%;
    font-family: Times;
    font-size:12px;
    color:#000000;
    border-width: 1px;
    border-color: #666666;
    border-collapse: collapse;
  }
  table.gridtable th {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #666666;
    background-color: #dedede;
  }
  table.gridtable td {
    border-width: 1px;
    padding: 2px;
    border-style: solid;
    border-color: #666666;
    background-color: #ffffff;
  }
</style>
<style>
  body, html {
    height: 100%;
    font-family: Tahoma, Verdana, Segoe, sans-serif;
    margin: 1cm;
    /* -webkit-print-color-adjust: exact; */
  }
  @page {
    size: 13in 8.5in;
    /*size: 8.5in 13in;*/
    margin: 0cm 2cm 0cm 2cm;
  }
  p {
    margin: 0;
  }
  h5 {
    font-weight: normal;
  }
  @media print {
    @page {
      size: landscape;
      margin: 2cm;
      size: 13in 8.5in;
    }
    html {
      height: auto;
    }
    .header {
      page-break-before: always;
    }
  }
  .footer {
    page-break-after: always;
  }
  body {
    margin: 0;
  }
  .wrapper {
    padding-top: .25em;
    padding-bottom: .25em;
    display: table;
    width: 100%;
  }
  .wrapper div {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
  }
  .col-1 {
    display: table-cell;
    width: 8.33333333333%;
  }
  .col-2 {
    display: table-cell;
    width: 16.6666666667%;
  }
  .col-3 {
    display: table-cell;
    width: 25%;
  }
  .col-4 {
    display: table-cell;
    width: 33.3333333333%;
  }
  .col-5 {
    display: table-cell;
    width: 41.6666666667%;
  }
  .col-6 {
    display: table-cell;
    width: 50%;
  }
  .col-7 {
    display: table-cell;
    width: 58.3333333333%;
  }
  .col-8 {
    display: table-cell;
    width: 66.6666666667%;
  }
  .col-9 {
    display: table-cell;
    width: 75%;
  }
  .col-10 {
    display: table-cell;
    width: 83.3333333333%;
  }
  .col-11 {
    display: table-cell;
    width: 91.6666666667%;
  }
  .col-12 {
    display: table-cell;
    width: 100%;
  }
  .top-wrapper {
    margin-top: 50px;
  }
  .text-top {
    vertical-align: top;
  }
  .text-center {
    text-align: center;
  }
  .text-justify {
    text-align: justify;
  }
  .text-left {
    text-align: left;
  }
  .bolder p {
    font-weight: 900;
  }
  .nomargin {
    margin: 0;
  }
  .notopmargin {
    margin-top: 0;
  }
  .nobottommargin {
    margin-bottom: 0;
  }
  .lgtopmargin {
    margin-top: 40px;
  }
  .mdtopmargin {
    margin-top: 20px;
  }
  .smtopmargin {
    margin-top: 10px;
  }
  .xstopmargin {
    margin-top: 5px;
  }
  .smbottommargin {
    margin-bottom: 10px;
  }
  .lgbottommargin {
    margin-bottom: 40px;
  }
  .nopadding {
    padding-left: 0 !important;
    padding-right: 0 !important;
  }
  .mdpadding {
    padding-left: 2rem;
    padding-right: 2rem;
  }
  .smtoppadding {
    padding-top: 10px;
  }
  p, ul li, ol li {
    font-size: 10pt;
  }
  table {
    border-collapse: collapse;
  }
  /* ukurantabel */
  table th, table td {
    border: 0px solid #000;
    font-size: 12.5pt;
    padding: 3px;
    text-align: center;
  }
  .sub-eng {
    font-style: italic;
  }
  p.sub-eng {
    /*font-size: 8pt;*/
    font-style: italic;
    font-weight: normal;
  }
  ul {
    list-style-type: none;
  }
  .with-border {
    border: solid 2px #000000;
    padding-left: 0.25rem;
    padding-right: 0.25rem;
    font-weight: bold;
  }
  .allborder {
    border: solid 1px #000000;
  }
  .bottomborder {
    border-bottom: solid 1px #000000;
  }
  .keterangan:before {
    content: "";
    position: absolute;
    left: 2rem;
    height: 1px;
    width: 15%; /* or 100px */
    border-top: 3px solid black;
  }
  .keterangan p {
    font-size: 7pt;
    margin: 0;
  }
  ol.nomargin {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
  }
  .print:last-child {
    page-break-after: auto;
  }
  p.narrow {
    font-family: "Arial Narrow", Arial, sans-serif;
    font-size:10pt;
  }
  p.isi {
    font-family: Tahoma, Verdana, Segoe, sans-serif;
    font-size:10pt;
  }
  p.isi-footer {
    font-family: Tahoma, Verdana, Segoe, sans-serif;
    font-size:12pt;
  }
  p.normal {
    font-family: Verdana, Helvetica, sans-serif;
    font-size:12pt;
  }
  p.tab > span {
    display: inline-block;
    min-width: 185px;
  }
  p.form > span {
    display: inline-block;
    min-width: 275px;
  }
  p.subform:after {
    content: "";
    position: absolute;
    right: 5rem;
    height: 1px;
    width: 15%; /* or 100px */
    border-top: 1px solid black;
  }
  .box {
    border: solid 1px #000000;
    padding-top: 5px;
    padding-bottom: 5px;
  }
  ul.dash li {
    padding-left: 1em;
    position: relative;
  }
  ul.dash li:before {
    content: '-';
    position: absolute;
    left: 0;
  }
  hr {
    border: 1px solid black;
  }
  .note p {
    font-size: 10pt;
  }
  table.endorsement td, table.endorsement td div {
    padding: 1px 5px;
  }
  .cap {
    text-transform: capitalize; 
  }
  .pagenum:before {
    content: counter(page);
  }
  footer {
    position: fixed; 
    bottom: -30px; 
    left: 0px; 
    right: 0px;
    height: 50px; 
    
    /** Extra personal styles **/
    /* line-height: 35px; */
    border-top-width: 1px;
    border-top-style: solid;
    border-top-color: rgb(115, 115, 115);
  }
</style>
<body>
  <div class="print">
    
    {{-- <div class="wrapper"> --}}
      <table class="gridtable">
        <thead>
          <tr>
            <th class="text-left" width="2%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>NO</b></span></th>
            <th class="text-left" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>URUSAN PEMERINTAHAN</b></span></th>
            <th class="text-left" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>OPD PELAKSANA</b></span></th>
            <th width="15%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>KEBIJAKAN</b></span></th>
            <th width="15%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>URAIAN PROG/KEG</b></span></th>
            <th width="15%" rowspan="1" colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>TARGET</b></span></th>
            <th width="15%" rowspan="1" colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>REALISASI</b></span></th>
            <th width="15%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>PERMASALAHAN</b></span></th>
            <th width="15%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>UPAYA MENGATASI PERMASALAHAN</b></span></th>
            <th width="15%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>TINJUT REKOMENDASI DPRD</b></span></th>
          </tr>
          <tr>
            <th colspan="1" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Kinerja</b></span></th>
            <th colspan="1" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Rupiah</b></span></th>
            <th colspan="1" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Kinerja</b></span></th>
            <th colspan="1" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Rupiah</b></span></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $skpd)
          <tr>
            <td class="text-left"><span style="font-size: 6pt; margin-left:7px;font-weight:bold;font-family: Arial;">{{ $skpd->kode_skpd }}</span></td>
            <td colspan="11" class="text-left"><span style="font-size: 6pt; margin-left:7px;font-weight:bold;font-family: Arial;">{{ $skpd->nama_skpd }}</span></td>
          </tr>
            @php
              $program = \App\Program::where(['id_skpd' => $skpd->id])->groupBy('id_bidang_urusan')->pluck('id_bidang_urusan');
              $tmp_bidang_urusan = \App\BidangUrusan::whereIn('id', $program)->groupBy('id_urusan')->pluck('id_urusan');
              $data_urusan = \App\Urusan::whereIn('id', $tmp_bidang_urusan)->get();
            @endphp
            
            @foreach($data_urusan as $i => $urusan)
            <tr>
              <td class="text-left"><span style="font-size: 6pt; margin-left:7px;font-weight:bold;font-family: Arial;">{{ $urusan->kode_urusan }}</span></td>
              <td colspan="11" class="text-left"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $urusan->nama_urusan }}</span></td>
            </tr>

            @foreach($urusan->BidangUrusan as $bidang)
            @if(isset($bidang->Program[0]) && $bidang->Program[0]->id_skpd == $skpd->id)
            <tr>
              <td class="text-left"><span style="font-size: 6pt; margin-left:7px;font-weight:bold;font-family: Arial;">{{ $bidang->kode_bidang_urusan }}</span></td>
              <td colspan="11" class="text-left"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $bidang->nama_bidang_urusan }}</span></td>
            </tr>
            @endif

            @foreach($bidang->Program as $program)
            @if($program->id_skpd == $skpd->id)

            <tr>
              <td class="text-left"><span style="font-size: 6pt; margin-left:7px;font-weight:bold;font-family: Arial;">{{ $program->kode_program }}</span></td>
              <td colspan="2" class="text-left"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $program->nama_program }}</span></td>
              <td colspan="9" class="text-left"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">@if ($program->id_sasaran != 0) {{ App\SasaranBaru::where('id', $program->id_sasaran)->pluck('nama_sasaran')->first() }} @endif</span></td>
            </tr>

            @foreach($program->Kegiatan as $kegiatan)
            <tr>
              <td class="text-left"><span style="font-size: 6pt; margin-left:7px;font-family: Arial;">{{ $kegiatan->kode_kegiatan }}</span></td>
              <td colspan="11" class="text-left"><span style="font-size: 6pt;font-family: Arial;">{{ $kegiatan->nama_kegiatan }}</span></td>
            </tr>
            @endforeach

            @foreach ($kegiatan->SubKegiatan as $sub_kegiatan)
            @php
            $realisasi = 0;
            $serapan = 0;
            
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
              $realisasi = $sub_kegiatan->realisasi_sub_keg_1_1+$sub_kegiatan->realisasi_sub_keg_1_2+$sub_kegiatan->realisasi_sub_keg_1_3+$sub_kegiatan->realisasi_sub_keg_1_4;
              $serapan = $sub_kegiatan->serapan_sub_keg_1_1+$sub_kegiatan->serapan_sub_keg_1_2+$sub_kegiatan->serapan_sub_keg_1_3+$sub_kegiatan->serapan_sub_keg_1_4;
            } else if (substr(Cookie::get('tahun_aktif'), 3) == 2) {
              $realisasi = $sub_kegiatan->realisasi_sub_keg_2_1+$sub_kegiatan->realisasi_sub_keg_2_2+$sub_kegiatan->realisasi_sub_keg_2_3+$sub_kegiatan->realisasi_sub_keg_2_4;
              $serapan = $sub_kegiatan->serapan_sub_keg_2_1+$sub_kegiatan->serapan_sub_keg_2_2+$sub_kegiatan->serapan_sub_keg_2_3+$sub_kegiatan->serapan_sub_keg_2_4;
            } else if (substr(Cookie::get('tahun_aktif'), 3) == 3) {
              $realisasi = $sub_kegiatan->realisasi_sub_keg_3_1+$sub_kegiatan->realisasi_sub_keg_3_2+$sub_kegiatan->realisasi_sub_keg_3_3+$sub_kegiatan->realisasi_sub_keg_3_4;
              $serapan = $sub_kegiatan->serapan_sub_keg_3_1+$sub_kegiatan->serapan_sub_keg_3_2+$sub_kegiatan->serapan_sub_keg_3_3+$sub_kegiatan->serapan_sub_keg_3_4;
            } else if (substr(Cookie::get('tahun_aktif'), 3) == 4) {
              $realisasi = $sub_kegiatan->realisasi_sub_keg_4_1+$sub_kegiatan->realisasi_sub_keg_4_2+$sub_kegiatan->realisasi_sub_keg_4_3+$sub_kegiatan->realisasi_sub_keg_4_4;
              $serapan = $sub_kegiatan->serapan_sub_keg_4_1+$sub_kegiatan->serapan_sub_keg_4_2+$sub_kegiatan->serapan_sub_keg_4_3+$sub_kegiatan->serapan_sub_keg_4_4;
            } else if (substr(Cookie::get('tahun_aktif'), 3) == 5) {
              $realisasi = $sub_kegiatan->realisasi_sub_keg_5_1+$sub_kegiatan->realisasi_sub_keg_5_2+$sub_kegiatan->realisasi_sub_keg_5_3+$sub_kegiatan->realisasi_sub_keg_5_4;
              $serapan = $sub_kegiatan->serapan_sub_keg_5_1+$sub_kegiatan->serapan_sub_keg_5_2+$sub_kegiatan->serapan_sub_keg_5_3+$sub_kegiatan->serapan_sub_keg_5_4;
            } else if (substr(Cookie::get('tahun_aktif'), 3) == 6) {
              $realisasi = $sub_kegiatan->realisasi_sub_keg_6_1+$sub_kegiatan->realisasi_sub_keg_6_2+$sub_kegiatan->realisasi_sub_keg_6_3+$sub_kegiatan->realisasi_sub_keg_6_4;
              $serapan = $sub_kegiatan->serapan_sub_keg_6_1+$sub_kegiatan->serapan_sub_keg_6_2+$sub_kegiatan->serapan_sub_keg_6_3+$sub_kegiatan->serapan_sub_keg_6_4;
            }
            @endphp
            @if($realisasi != 0) 
            <tr>
              <td class="text-left text-top"><span style="font-size: 6pt; margin-left:7px;font-family: Arial;">{{ $sub_kegiatan->kode_sub_keg }}</td>
              <td colspan="2" class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->nama_sub_keg }}</td>
              <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;"></td>
              <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->indikator_sub_keg }}</td>
              @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $sub_kegiatan->target_sub_keg_1 }}</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">@currency($sub_kegiatan->pagu_indikatif_sub_keg_1)</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $realisasi }}</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">@currency($serapan)</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->masalah_sub_keg_1_4 }}</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->solusi_sub_keg_1_4 }}</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;"></td>
                @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $sub_kegiatan->target_sub_keg_2 }}</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">@currency($sub_kegiatan->pagu_indikatif_sub_keg_2)</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $realisasi }}</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">@currency($serapan)</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->masalah_sub_keg_2_4 }}</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->solusi_sub_keg_2_4 }}</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;"></td>
                @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $sub_kegiatan->target_sub_keg_3 }}</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">@currency($sub_kegiatan->pagu_indikatif_sub_keg_3)</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $realisasi }}</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">@currency($serapan)</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->masalah_sub_keg_3_4 }}</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->solusi_sub_keg_3_4 }}</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;"></td>
                @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $sub_kegiatan->target_sub_keg_4 }}</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">@currency($sub_kegiatan->pagu_indikatif_sub_keg_4)</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $realisasi }}</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">@currency($serapan)</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->masalah_sub_keg_4_4 }}</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->solusi_sub_keg_4_4 }}</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;"></td>
                @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $sub_kegiatan->target_sub_keg_5 }}</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">@currency($sub_kegiatan->pagu_indikatif_sub_keg_5)</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $realisasi }}</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">@currency($serapan)</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->masalah_sub_keg_5_4 }}</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->solusi_sub_keg_5_4 }}</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;"></td>
                @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $sub_kegiatan->target_sub_keg_6 }}</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">@currency($sub_kegiatan->pagu_indikatif_sub_keg_6)</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $realisasi }}</td>
                  <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">@currency($serapan)</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->masalah_sub_keg_6_4 }}</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->solusi_sub_keg_6_4 }}</td>
                  <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;"></td>
                @endif
          </tr>
            @endif
            @endforeach
          @endif
          @endforeach
          @endforeach
          @endforeach
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
  </html>