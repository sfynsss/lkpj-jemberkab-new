<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BAB III</title>
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
    background-color: #f1805d;
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
    size: 8.5in 13in;
    /*size: 8.5in 13in;*/
    margin: 0;
  }
  p {
    margin: 0;
  }
  h5 {
    font-weight: normal;
  }
  @media print {
    @page {
      size: portrait;
      margin: 2cm;
      size: 8.5in 13in;
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
    padding-left: 1rem;
    padding-right: 1rem;
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
    font-size: 11pt;
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
</style>
<body>
  
  <!--HALAMAN 1-->
  <div class="print">
    <div class="wrapper">
      <div class="col-12 text-center nopadding">
        <h6 style="font-size: 14pt; margin: 0; padding: 0; font-weight:700;">Bab III</h6>
        <h6 style="font-size: 14pt; margin: 0; padding: 0; font-weight:700;">Capaian Indikator Kinerja Utama</h6>
        <h6 style="font-size: 14pt; margin: 0; padding: 0; font-weight:700;">{{ ucwords(strtolower($data->nama_skpd)) }} Tahun 2021</h6>
      </div>
    </div>
    <br>
    <br>
    @php
    $alphabet = range('A', 'Z');
    $tmp = 0;
    @endphp
    @if (count($indikator) > 0)
    @foreach ($urusan as $i => $urusan)
    <br>
    <div class="wrapper">
      <div class="col-12 text-justify">
        <p style="font-size: 10pt; margin: 0; padding: 0; font-weight:700;">{{ $alphabet[$i] }}. &nbsp;&nbsp;Capaian Indikator Kinerja Utama pada {{ ucwords(strtolower($urusan->Urusan->nama_urusan)) }} Tahun 2021</p>
        <p style="font-size: 10pt; margin: 0; padding: 0; ">Berikut disampaikan data capaian Indikator Kinerja Utama pada {{ ucwords(strtolower($urusan->Urusan->nama_urusan)) }} Tahun 2021 sebagai berikut:</p>
      </div>
    </div>
    <br>
    <table class="gridtable">
      <thead>
        <tr>
          <th class="text-center" width="5%" rowspan="2" align="center"><span style="font-size: 9pt;font-family:Tahoma;font-weight: normal;"><b>No</b></span></th>
          <th rowspan="2" width="25%" align="center"><span style="font-size: 9pt;font-family:Tahoma;font-weight: normal;"><b>Uraian</b></span></th>
          <th rowspan="1" colspan="5" align="center"><span style="font-size: 9pt;font-family:Tahoma;font-weight: normal;"><b>Capaian</b></span></th>
          <th rowspan="2" width="20%" align="center"><span style="font-size: 9pt;font-family:Tahoma;font-weight: normal;"><b>Keterangan</b></span></th>
        </tr>
        <tr>
          <th colspan="1" align="center"><span style="font-size: 9pt;font-family:Tahoma;font-weight: normal;"><b>2021</b></span></th>
          <th colspan="1" align="center"><span style="font-size: 9pt;font-family:Tahoma;font-weight: normal;"><b>2022</b></span></th>
          <th colspan="1" align="center"><span style="font-size: 9pt;font-family:Tahoma;font-weight: normal;"><b>2023</b></span></th>
          <th colspan="1" align="center"><span style="font-size: 9pt;font-family:Tahoma;font-weight: normal;"><b>2024</b></span></th>
          <th colspan="1" align="center"><span style="font-size: 9pt;font-family:Tahoma;font-weight: normal;"><b>2025</b></span></th>
        </tr>
      </thead>
      <tbody>
        @foreach($bidang as $bidang_urusan)
        @if($bidang_urusan->Bidang->id_urusan == $urusan->id_urusan)
        <tr>
          <td class="text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $tmp+=1 }}</span></td>
          <td class="text-justify text-top" colspan="7"><span style="font-size: 8pt;font-family: Arial;">{{ ucwords(strtolower($bidang_urusan->Bidang->nama_bidang_urusan)) }}</span></td>
        </tr>
        
        @foreach ($indikator as $j => $iku)
        @if ($iku->id_bidang_urusan == $bidang_urusan->id_bidang_urusan)
        <tr>
          <td class="text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $tmp+=1 }}</span></td>
          <td class="text-justify text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $iku->indikator_utama }}</span></td>
          <td class="text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $iku->capaian_1 }}</span></td>
          <td class="text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $iku->capaian_2 }}</span></td>
          <td class="text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $iku->capaian_3 }}</span></td>
          <td class="text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $iku->capaian_4 }}</span></td>
          <td class="text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $iku->capaian_5 }}</span></td>
          <td class="text-justify text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $iku->keterangan }}</span></td>
        </tr>
        @endif
        @endforeach
        @endif
        @endforeach
      </tbody>
    </table>
    @endforeach
    @endif
  </div>
</div>
</body>
</html>