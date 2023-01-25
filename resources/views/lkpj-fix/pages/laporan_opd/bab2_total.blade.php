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
            <th class="text-left" width="10%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>kode</b></span></th>
            <th width="15%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Program/Kegiatan/SubKegiatan</b></span></th>
            <th width="15%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Indikator Kinerja Program/Kegiatan/SubKegiatan</b></span></th>
            <th width="15%" rowspan="1" colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Target Tahun test</b></span></th>
            <th width="15%" rowspan="1" colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Realisasi Tahun test</b></span></th>
            <th width="15%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Permasalahan</b></span></th>
            <th width="15%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Solusi</b></span></th>
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
          @foreach ($skpd->Program as $program)
          @if ($program->id_skpd == $skpd->id)
          <tr>
            <td class="text-left"><span style="font-size: 6pt; margin-left:7px;font-weight:bold;font-family: Arial;">{{ $program->kode_program }}</span></td>
            <td colspan="8" class="text-left"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $program->nama_program }}</span></td>
          </tr>
          @foreach ($program->Kegiatan as $kegiatan)
          <tr>
            <td class="text-left"><span style="font-size: 6pt; margin-left:7px;font-family: Arial;">{{ $kegiatan->kode_kegiatan }}</span></td>
            <td colspan="8" class="text-left"><span style="font-size: 6pt;font-family: Arial;">{{ $kegiatan->nama_kegiatan }}</span></td>
          </tr>
          @foreach ($kegiatan->SubKegiatan as $sub_kegiatan)
          @php
            $realisasi = $sub_kegiatan->realisasi_sub_keg_1_1+$sub_kegiatan->realisasi_sub_keg_1_2+$sub_kegiatan->realisasi_sub_keg_1_3+$sub_kegiatan->realisasi_sub_keg_1_4;
            $serapan = $sub_kegiatan->serapan_sub_keg_1_1+$sub_kegiatan->serapan_sub_keg_1_2+$sub_kegiatan->serapan_sub_keg_1_3+$sub_kegiatan->serapan_sub_keg_1_4;
          @endphp
          <tr>
            <td class="text-left text-top"><span style="font-size: 6pt; margin-left:7px;font-family: Arial;">{{ $sub_kegiatan->kode_sub_keg }}</td>
            <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->nama_sub_keg }}</td>
            <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->indikator_sub_keg }}</td>
            <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $sub_kegiatan->target_sub_keg_1 }}</td>
            <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">@currency($sub_kegiatan->pagu_indikatif_sub_keg_1)</td>
            <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $realisasi }}</td>
            <td><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">@currency($serapan)</td>
            <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->masalah_sub_keg_1_4 }}</td>
            <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_kegiatan->solusi_sub_keg_1_4 }}</td>
          </tr>
          @endforeach
          @endforeach
          @endif
          @endforeach
          @endforeach
        </tbody>
      </table>
    {{-- </div> --}}

  </div>
</body>
</html>