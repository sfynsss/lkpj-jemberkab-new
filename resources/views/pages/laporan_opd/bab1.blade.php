<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BAB I</title>
</head>
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
            margin: 0;
            size: 8.5in 13in;
        }
        html {
            height: auto;
            width: auto;
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
    .text-right {
        text-align: right;
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
        font-size: 9pt;
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
</style>

<body>
    
    <div class="print">
        <div class="wrapper">
            <div class="col-12 text-center nopadding">
                <h6 style="font-size: 14pt; margin: 0; padding: 0; font-weight:700;">Bab I</h6>
                <h6 style="font-size: 14pt; margin: 0; padding: 0; font-weight:700;">Pendahuluan</h6>
            </div>
        </div>
        <br>
        <br>
        
        @if(Auth::user()->hak_akses == "ADMIN")
        <div class="wrapper">
            <div class="col-12 text-justify">
                <h5 style="font-size: 10pt; margin-bottom: 5; padding: 0; font-weight:700;">A. Latar Belakang</h5>
                <p class="text-justify" style="font: 10pt;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Sebagaimana diamanatkan dalam Pasal 69 ayat 1 Undang-undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah dinyatakan bahwa Kepala Daerah 
                    wajib menyampaikan laporan penyelenggaraan Pemerintahan Daerah, laporan keterangan pertanggungjawaban dan ringkasan laporan penyelenggaraan 
                    Pemerintahan Daerah. Laporan Keterangan Pertanggungjawaban (LKPJ) Akhir Tahun Anggaran pada dasarnya merupakan progress report atas kinerja 
                    pembangunan selama satu tahun dan menjadi kegiatan evaluasi terhadap pelaksanaan Rencana Pembangunan Jangka Menengah Daerah.
                </p>
                <br>
                <p class="text-justify" style="font: 10pt;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Berdasarkan ketentuan dalam Peraturan Pemerintah Nomor 13 Tahun 2019 menyebutkan bahwa ruang lingkup LKPJ meliputi hasil penyelenggaraan 
                    urusan pemerintahan yang menjadi kewenangan daerah yang dilaksanakan oleh Pemerintah Daerah dan hasil pelaksanaan tugas pembantuan dan penugasan. 
                    Hasil penyelenggaraan pemerintahan di Kabupaten Jember di tahun 2021 meliputi capaian pelaksanaan program dan kegiatan serta permasalahan 
                    dan upaya penyelesaian setiap urusan. Serta kebijakan strategis yang ditetapkan oleh kepala daerah dan pelaksanaannya yang berdasarkan 
                    Peraturan Bupati Nomor 69 Tahun 2021 tentang Perubahan Rencana Kerja Pemerintah Daerah Kabupaten Jember Tahun 2021 yang merupakan penjabaran 
                    tahunan dari Peraturan Daerah Nomor 3 Tahun 2021 tentang Rencana Pembangunan Jangka Menengah Daerah Kabupaten Jember Tahun 2021-2026 dengan 
                    berpedoman pada Peraturan Daerah Nomor 4 Tahun 2015 tentang Rencana Pembangunan Jangka Panjang Daerah (RPJPD) Kabupaten Jember Tahun 2005-2025. 
                    Dokumen tersebut memuat rencana pembangunan ke depan yang menggambarkan visi, misi, tujuan, sasaran, kebijakan, strategi, program dan kegiatan 
                    pembangunan Kabupaten Jember.
                </p>
                <br>
                <p class="text-justify" style="font: 10pt;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Sehingga berdasarkan dasar hukum Peraturan Daerah Nomor 3 Tahun 2021 tentang Rencana Pembangunan Jangka Menengah Daerah Kabupaten Jember 
                    Tahun 2021-2026 tersebut guna menciptakan pembangunan yang berkesinambungan dan demi terciptanya pencapaian indikator kinerja utama Perangkat 
                    Daerah (PD) secara maksimal di Kabupaten Jember maka {{ ucwords(strtolower($data->nama_skpd)) }} dalam hal ini sebagai Salah Satu Peranglat Daerah di Kabupaten Jember 
                    berkewajiban untuk melaksanakan pelaporan pertanggungjawaban penyelenggaraan pemerintahan dalam bentuk laporan LKPJ tahun 2021 yang diharapkan 
                    dengan adanya pelaporan ini maka koreksi dan dukungan untuk pencapaian kinerja Perangkat Daerah dari {{ ucwords(strtolower($data->nama_skpd)) }} di Kabupaten Jember juga 
                    bisa terlaksana dengan baik. Kegagalan dan keberhasilan pencapaian indikator kinerja Perangkat Daerah juga akan dijadikan sebagai acuan tindakan 
                    perbaikan dalam penyelenggaraan pelaksanaan pembangunan Kabupaten Jember di tahun mendatang.
                </p>
            </div>
        </div>
        @endif
        <br>
        @if (count($indikator) > 0)
        <div class="wrapper">
            <div class="col-12 text-justify">
                <h5 style="font-size: 10pt; margin: 0; padding: 0; font-weight:700;">B. Data Capaian Kinerja pada {{ ucwords(strtolower($data->nama_skpd)) }}</h5>
                <br>
                @foreach ($data_urusan as $i => $urusan)
                <p style="font: 10pt;">
                    {{ $i+1 }}. &nbsp;&nbsp;Data Capaian Kinerja {{ ucwords(strtolower($urusan->Urusan->nama_urusan)) }}</b>
                </p>
                <p class="text-justify" style="font: 10pt;">
                    Berikut disampaikan data capaian {{ ucwords(strtolower($urusan->Urusan->nama_urusan)) }} mulai tahun 2021-2025 sebagai berikut:
                </p>
                <br>
            </div>
        </div>
        <table class="gridtable">
            <thead>
                <tr>
                    <th class="text-center" width="5%" rowspan="2" align="center"><span style="font-size: 9pt;font-family:Tahoma;font-weight: normal;"><b>No</b></span></th>
                    <th rowspan="2" width="40%" align="center"><span style="font-size: 9pt;font-family:Tahoma;font-weight: normal;"><b>Uraian</b></span></th>
                    <th rowspan="1" colspan="5" align="center"><span style="font-size: 9pt;font-family:Tahoma;font-weight: normal;"><b>Tahun</b></span></th>
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
                @foreach ($indikator as $j => $detail)
                @if ($detail->id_urusan == $urusan->Urusan->id)
                <tr>
                    <td class="text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $j+1 }}</span></td>
                    <td class="text-justify text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $detail->indikator }}</span></td>
                    <td class="text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $detail->capaian_1 }}</span></td>
                    <td class="text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $detail->capaian_2 }}</span></td>
                    <td class="text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $detail->capaian_3 }}</span></td>
                    <td class="text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $detail->capaian_4 }}</span></td>
                    <td class="text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $detail->capaian_5 }}</span></td>
                    <td class="text-justify text-top"><span style="font-size: 8pt;font-family: Arial;">{{ $detail->keterangan }}</span></td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
        @endforeach
        @endif
        <br>
        <br>
        <div class="wrapper">
            <div class="col-12 text-justify">
                <h5 style="font-size: 10pt; margin: 0; padding: 0; font-weight:700;">C. Tabel Program Unggulan dan Program Inovasi {{ ucwords(strtolower($data->nama_skpd)) }} tahun 2021</h5>
                <br>
            </div>
        </div>
        <table class="gridtable">
            <thead>
              <tr>
                <th class="text-left" width="10%" rowspan="1" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>kode</b></span></th>
                <th width="15%" rowspan="1" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Program/Kegiatan/SubKegiatan</b></span></th>
                <th width="15%" rowspan="1" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Target</b></span></th>
                <th width="15%" rowspan="1" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Satuan</b></span></th>
                <th width="15%" rowspan="1" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Anggaran</b></span></th>
                <th width="15%" rowspan="1" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Lokasi</b></span></th>
                <th width="15%" rowspan="1" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Uraian Kegiatan</b></span></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($program as $i => $prog)
              <tr>
                <td class="text-left text-top"><span style="font-size: 6pt; margin-left:7px;font-weight:bold;font-family: Arial;">{{ $prog->kode_program }}</span></td>
                <td colspan="6" class="text-left text-top"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $prog->nama_program }}</span></td>
                {{-- <td colspan="6" class="text-left text-top"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td> --}}
              </tr>

              @foreach ($kegiatan as $j => $keg)
              @if ($keg->id_program == $prog->id)
              <tr>
                <td class="text-left text-top"><span style="font-size: 6pt; margin-left:7px;font-weight:bold;font-family: Arial;">{{ $keg->kode_kegiatan }}</span></td>
                <td colspan="6" class="text-left text-top"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $keg->nama_kegiatan }}</span></td>
                {{-- <td colspan="6" class="text-left text-top"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td> --}}
              </tr>
              @foreach ($sub_kegiatan as $k => $sub_keg)
              @if ($sub_keg->id_kegiatan == $keg->id)
              <tr>
                <td class="text-left text-top"><span style="font-size: 6pt; margin-left:7px;font-family: Arial;">{{ $sub_keg->kode_sub_keg }}</td>
                <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_keg->nama_sub_keg }}</td>
                <td class="text-center text-top"><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $sub_keg->target_sub_keg_1 }}</td>
                <td class="text-center text-top"><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">{{ $sub_keg->satuan_target_sub_keg_1 }}</td>
                <td class="text-center text-top"><span style="font-size: 6pt; font-weight:bold;font-family: Arial;">@currency($sub_keg->pagu_indikatif_sub_keg_1)</td>
                <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_keg->lokasi }}</td>
                <td class="text-left text-top"><span style="font-size: 6pt;font-family: Arial;">{{ $sub_keg->keterangan }}</td>
              </tr>
              @endif
              @endforeach
              @endif
              @endforeach
              @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>