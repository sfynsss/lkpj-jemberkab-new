<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Surat Laut</title>
</head>
<style>
    body, html {
        height: 100%;
        font-family: Arial, Helvetica, sans-serif;
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
    table th, table td {
        border: 1px solid #000;
        font-size: 10pt;
        padding: 10px;
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
        <div class="col-3 text-center nopadding">
            <!-- <img src="{{url('/uploads/images/garuda_pancasila.png')}}" width="100"> -->
        </div>
        <div class="col-6 text-center nopadding">
            <h4 class="mdtopmargin nomargin"><strong>SURAT LAUT</strong></h4>
            <h4 class="sub-eng nomargin"><u><strong>CERTIFICATE OF NATIONALITY</strong></u></h4>
            <p class="nomargin">Diterbitkan berdasarkan ketentuan Pasal 58</p>
            <p class="sub-eng nomargin">Issued under the provisions of</p>
            <p class="nomargin">Permenhub Nomor 13 Tahun 2012</p>
            <p class="sub-eng nomargin">Minister of Transportation Regulation Number 13 Year 2012</p>
        </div>
        <div class="col-3 text-center nopadding">
            <p style="font-size: 7pt; letter-spacing: 2px" class="nomargin"><strong>REPUBLIK INDONESIA</strong></p>
        </div>
    </div>

    <div class="wrapper">
        <div class="col-12 text-justify">
            <p class="nomargin">Yang bertanda tangan di bawah ini Direktur Perkapalan dan Kepelautan
                menyatakan bahwa</p>
            <p class="sub-eng nomargin">The undersigned
                ...................................................................................................
                declares that </p>
        </div>
    </div>

    <div class="wrapper">
        <div class="col-12 text-center nopadding">
            <div class="mdpadding smbottommargin">
                <table width="100%">
                    <tr>
                        <td width="40%">
                            <p class="nomargin">NAMA KAPAL</p>
                            <p class="sub-eng nomargin">NAME OF SHIP</p>
                        </td>
                        <td width="15%">
                            <p class="nomargin">TANDA PANGGILAN</p>
                            <p class="sub-eng nomargin">CALL SIGN</p>
                        </td>
                        <td width="25%">
                            <p class="nomargin">TEMPAT PENDAFTARAN</p>
                            <p class="sub-eng nomargin">PORT OF REGISTRY</p>
                        </td>
                        <td width="30%">
                            <p class="nomargin">TANDA PENDAFTARAN</p>
                            <p class="sub-eng nomargin">REGISTRATION MARK</p>
                        </td>
                    </tr>
                    <tr>
                        <td>{{!empty($variable->ship_name) ? $variable->ship_name : ''}}</td>
                        <td>{{!empty($variable->ship_name) ? $variable->call_sign : ''}}</td>
                        <td>@if(!empty($variable->pelabuhan_pendaftaran)){{ $variable->pelabuhan_pendaftaran }}@endif</td>
                        <td>{{!empty($variable->sign_of_ship_registration) ? $variable->sign_of_ship_registration : ''}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="col-12 text-center nopadding">
            <div class="mdpadding smbottommargin">
                <table width="100%">
                    <tr>
                        <td width="20%">
                            <p class="nomargin">UKURAN<br>P X L X D (M)</p>
                            <p class="sub-eng nomargin">DIMENSION<br>P X L X D (M)</p>
                        </td>
                        <td width="20%">
                            <p class="nomargin">TONASE KOTOR (GT)</p>
                            <p class="sub-eng nomargin">GROSS TONNAGE (GT)</p>
                        </td>
                        <td width="20%">
                            <p class="nomargin">TONASE BERSIH (NT)</p>
                            <p class="sub-eng nomargin">NET TONNAGE (NT)</p>
                        </td>
                        <td width="20%">
                            <p class="nomargin">TAHUN PEMBANGUNAN</p>
                            <p class="sub-eng nomargin">YEAR OF BUILT</p>
                        </td>
                        <td width="20%">
                            <p class="nomargin">NOMOR IMO</p>
                            <p class="sub-eng nomargin">IMO NUMBER</p>
                        </td>
                    </tr>
                    <tr>
                        <td>{{!empty($variable->length) ? number_format($variable->length, 2) : '-'}}
                            X {{!empty($variable->width) ? number_format($variable->width, 2): '-'}}
                            X {{!empty($variable->depth) ? number_format($variable->depth, 2) : '-'}}
                        </td>
                        <td>{{!empty($variable->gt) ? $variable->gt : '-'}}</td>
                        <td>{{!empty($variable->net_tonage) ? $variable->net_tonage : '-'}}</td>
                        <td>{{!empty(@$variable->submission_measurement->created_at) ? date('Y', strtotime(@$variable->submission_measurement->created_at)) : '-'}}</td>
                        <td>{{!empty($variable->imo) ? $variable->imo : '-'}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="col-12 text-center nopadding">
            <div class="mdpadding smbottommargin">
                <table width="100%">
                    <tr>
                        <td width="20%">
                            <p class="nomargin">PENGGERAK UTAMA</p>
                            <p class="sub-eng nomargin">MAIN PROPULSION</p>
                        </td>
                        <td width="20%">
                            <p class="nomargin">MEREK TK/KW</p>
                            <p class="sub-eng nomargin">MERK HP/KW</p>
                        </td>
                        <td width="20%">
                            <p class="nomargin">BAHAN UTAMA KAPAL</p>
                            <p class="sub-eng nomargin">SHIP'S MATERIAL</p>
                        </td>
                        <td width="20%">
                            <p class="nomargin">JUMLAH GELADAK</p>
                            <p class="sub-eng nomargin">NO OF DECK</p>
                        </td>
                        <td width="20%">
                            <p class="nomargin">JUMLAH<br>BALING-BALING</p>
                            <p class="sub-eng nomargin">NO OF PROPELLER</p>
                        </td>
                    </tr>
                    <tr>
                        <td>{{!empty($variable->pengerak_utama) ? $variable->pengerak_utama : '-'}}</td>
                        <td>{{!empty($variable->mesin) ? $variable->mesin : '-'}}</td>
                        <td>{{!empty($variable->bahan) ? $variable->bahan : '-'}}</td>
                        <td>{{!empty($variable->jumlah_geladak) ? $variable->jumlah_geladak : '-'}}</td>
                        <td>{{!empty($variable->baling_baling) ? $variable->baling_baling : '-'}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="col-12 text-justify">
            <p class="smtopmargin">Milik
                @if(!empty($variable->user->name)){{ $variable->user->name }} @endif
                berkedudukan di {{ !empty($variable->pelabuhan_pendaftaran) ? $variable->pelabuhan_pendaftaran : '-' }}
                @if(!empty($variable->user->city->name))
                {{ $variable->user->city->name }}
                @endif
                ,
                memenuhi syarat sebagai Kapal Indonesia, sesuai
                dengan ketentuan peraturan perundang-undangan, oleh karena itu
                berhak berlayar dengan mengibarkan bendera Indonesia sebagai bendera
                kebangsaan kapal.</p>
            <p class="sub-eng nomargin">Owned by
                @if(!empty($variable->user)){{ $variable->user->name }} @endif
                at {{ !empty($variable->pelabuhan_pendaftaran) ? $variable->pelabuhan_pendaftaran : '-' }},
                has complied as an Indonesia Vessel in accordance with the provisions of
                applicable regulation, and therefore is entitled to fly the Indonesian flag.</p>
        </div>
    </div>

    <div class="wrapper">
        <div class="col-12 text-justify">
            <p class="smtopmargin">Kepada seluruh pejabat yang berwenang dan pejabat-pejabat Republik
                Indonesia maupun mereka yang bersangkutan dan berkewajiban supaya
                memperlakukan nakhoda kapal dan muatannya sesuai dengan ketentuan
                peraturan perundang-undangan Republik Indonesia dan perjanjian-perjanjian dengan negara-negara lain.</p>
            <p class="sub-eng nomargin">To all authorities and officials of Republic of Indonesia and all others to
                whom this may concern are therefore requested to give appropriate
                treatment to the master with his vessel and cargoes in accordance with the
                provisions stipulated in the laws of Republic of Indonesia and the treaties
                concluded with other souvereign countries.</p>
        </div>
    </div>

     <div class="wrapper">
        <div class="col-6 text-justify"></div>
        <div class="col-6 text-justify">
            <p class="nomargin">Diberikan di : {{@$variable->submission_measurement->upt->pelabuhan}}</p>
            <p class="sub-eng nomargin">Issued at : {{@$variable->submission_measurement->upt->pelabuhan}}</p>
            <p class="nomargin">Pada tanggal :  {{ date('d-m-Y', strtotime(@$variable->updated_at))}}</p>
            <p class="sub-eng nomargin">Date : {{ date('d-m-Y', strtotime(@$variable->updated_at))}}</p>
            <hr>
            <p class="nomargin text-center">An. MENTERI PERHUBUNGAN</p>
            <p class="sub-eng nomargin text-center">Ob. MINISTER OF TRANSPORTATION</p>
        </div>

    </div>

    <div class="wrapper footer note">
        <div class="col-6">
            <p class="nomargin">Didaftarkan dalam Register</p>
            <p class="sub-eng nomargin">Recorded in the register of Surat Laut</p>
            <p class="nomargin">Surat Laut</p>
            <p class="sub-eng nomargin">certificate of nationality in</p>
            <p class="nomargin">No. Urut : {{@$variable->id}}</p>
            <p class="sub-eng nomargin">Serial Number : {{@$variable->id}}</p>
            <p class="nomargin">No. Surat : AL.520/{{@$sn_approved_document}}/{{@$sn_submission_document}}/DK/2019</p>
            <p class="sub-eng nomargin">Certificate Number : AL.520/{{@$sn_approved_document}}/{{@$sn_submission_document}}/DK/2019</p>
            <p class="nomargin">PUP : {{@$last_invoice}}</p>
            <p class="sub-eng nomargin">Invoice Number : {{@$last_invoice}}</p>
        </div>
        <div class="col-6"></div>
    </div>
</div>

<!--HALAMAN 2-->
<div class="print">
    <div class="wrapper">
        <div class="col-3">
            <p class="mdtopmargin">SURAT LAUT</p>
            <p class="nomargin">No. Unit : </p>
            <p class="nomargin">No. Halaman :</p>
        </div>
        <div class="col-6 text-center">
            <h3 class="nomargin"><strong>HALAMAN PENGUKUHAN</strong></h3>
            <h3 class="nomargin sub-eng" style="font-weight: normal">ENDORSEMENT</h3>
        </div>
        <div class="col-3"></div>

    </div>

    <div class="wrapper">
    </div>

    <div class="wrapper">
        <div class="col-12 nopadding nomargin">
            <div class="mdpadding nomargin">
                <table width="100%" class="endorsement">
                    <tr>
                        <td>
                            <div class="wrapper">
                                <div class="col-4 text-left">
                                    <p class="nomargin">1.</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">Pelabuhan</p>
                                    <p class="sub-eng nomargin">Port of</p>
                                    <p class="nomargin">Tanggal</p>
                                    <p class="sub-eng nomargin">Date</p>
                                    <p class="nomargin">Nomor</p>
                                    <p class="sub-eng nomargin">Number</p>
                                </div>
                                <div class="col-8 text-left">
                                    <p class="nomargin">Pengukuhan</p>
                                    <p class="sub-eng nomargin">Endorsement</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                </div>
                            </div>

                            <div class="wrapper text-center">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <p class="nomargin">Syahbandar</p>
                                    <p class="sub-eng nomargin">Harbour Master</p>
                                    <p class="mdtopmargin"><u>...............................</u></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="wrapper">
                                <div class="col-4 text-left">
                                    <p class="nomargin">2.</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">Pelabuhan</p>
                                    <p class="sub-eng nomargin">Port of</p>
                                    <p class="nomargin">Tanggal</p>
                                    <p class="sub-eng nomargin">Date</p>
                                    <p class="nomargin">Nomor</p>
                                    <p class="sub-eng nomargin">Number</p>
                                </div>
                                <div class="col-8 text-left">
                                    <p class="nomargin">Pengukuhan</p>
                                    <p class="sub-eng nomargin">Endorsement</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                </div>
                            </div>

                            <div class="wrapper text-center">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <p class="nomargin">Syahbandar</p>
                                    <p class="sub-eng nomargin">Harbour Master</p>
                                    <p class="mdtopmargin"><u>...............................</u></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="wrapper">
                                <div class="col-4 text-left">
                                    <p class="nomargin">3.</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">Pelabuhan</p>
                                    <p class="sub-eng nomargin">Port of</p>
                                    <p class="nomargin">Tanggal</p>
                                    <p class="sub-eng nomargin">Date</p>
                                    <p class="nomargin">Nomor</p>
                                    <p class="sub-eng nomargin">Number</p>
                                </div>
                                <div class="col-8 text-left">
                                    <p class="nomargin">Pengukuhan</p>
                                    <p class="sub-eng nomargin">Endorsement</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                </div>
                            </div>

                            <div class="wrapper text-center">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <p class="nomargin">Syahbandar</p>
                                    <p class="sub-eng nomargin">Harbour Master</p>
                                    <p class="mdtopmargin"><u>...............................</u></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="wrapper">
                                <div class="col-4 text-left">
                                    <p class="nomargin">4.</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">Pelabuhan</p>
                                    <p class="sub-eng nomargin">Port of</p>
                                    <p class="nomargin">Tanggal</p>
                                    <p class="sub-eng nomargin">Date</p>
                                    <p class="nomargin">Nomor</p>
                                    <p class="sub-eng nomargin">Number</p>
                                </div>
                                <div class="col-8 text-left">
                                    <p class="nomargin">Pengukuhan</p>
                                    <p class="sub-eng nomargin">Endorsement</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                </div>
                            </div>

                            <div class="wrapper text-center">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <p class="nomargin">Syahbandar</p>
                                    <p class="sub-eng nomargin">Harbour Master</p>
                                    <p class="mdtopmargin"><u>...............................</u></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="wrapper">
                                <div class="col-4 text-left">
                                    <p class="nomargin">5.</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">Pelabuhan</p>
                                    <p class="sub-eng nomargin">Port of</p>
                                    <p class="nomargin">Tanggal</p>
                                    <p class="sub-eng nomargin">Date</p>
                                    <p class="nomargin">Nomor</p>
                                    <p class="sub-eng nomargin">Number</p>
                                </div>
                                <div class="col-8 text-left">
                                    <p class="nomargin">Pengukuhan</p>
                                    <p class="sub-eng nomargin">Endorsement</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                </div>
                            </div>

                            <div class="wrapper text-center">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <p class="nomargin">Syahbandar</p>
                                    <p class="sub-eng nomargin">Harbour Master</p>
                                    <p class="mdtopmargin"><u>...............................</u></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="wrapper">
                                <div class="col-4 text-left">
                                    <p class="nomargin">6.</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">Pelabuhan</p>
                                    <p class="sub-eng nomargin">Port of</p>
                                    <p class="nomargin">Tanggal</p>
                                    <p class="sub-eng nomargin">Date</p>
                                    <p class="nomargin">Nomor</p>
                                    <p class="sub-eng nomargin">Number</p>
                                </div>
                                <div class="col-8 text-left">
                                    <p class="nomargin">Pengukuhan</p>
                                    <p class="sub-eng nomargin">Endorsement</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                </div>
                            </div>

                            <div class="wrapper text-center">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <p class="nomargin">Syahbandar</p>
                                    <p class="sub-eng nomargin">Harbour Master</p>
                                    <p class="mdtopmargin"><u>...............................</u></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="wrapper">
                                <div class="col-4 text-left">
                                    <p class="nomargin">7.</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">Pelabuhan</p>
                                    <p class="sub-eng nomargin">Port of</p>
                                    <p class="nomargin">Tanggal</p>
                                    <p class="sub-eng nomargin">Date</p>
                                    <p class="nomargin">Nomor</p>
                                    <p class="sub-eng nomargin">Number</p>
                                </div>
                                <div class="col-8 text-left">
                                    <p class="nomargin">Pengukuhan</p>
                                    <p class="sub-eng nomargin">Endorsement</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                </div>
                            </div>

                            <div class="wrapper text-center">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <p class="nomargin">Syahbandar</p>
                                    <p class="sub-eng nomargin">Harbour Master</p>
                                    <p class="mdtopmargin"><u>...............................</u></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="wrapper">
                                <div class="col-4 text-left">
                                    <p class="nomargin">8.</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">Pelabuhan</p>
                                    <p class="sub-eng nomargin">Port of</p>
                                    <p class="nomargin">Tanggal</p>
                                    <p class="sub-eng nomargin">Date</p>
                                    <p class="nomargin">Nomor</p>
                                    <p class="sub-eng nomargin">Number</p>
                                </div>
                                <div class="col-8 text-left">
                                    <p class="nomargin">Pengukuhan</p>
                                    <p class="sub-eng nomargin">Endorsement</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                </div>
                            </div>

                            <div class="wrapper text-center">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <p class="nomargin">Syahbandar</p>
                                    <p class="sub-eng nomargin">Harbour Master</p>
                                    <p class="mdtopmargin"><u>...............................</u></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="wrapper">
                                <div class="col-4 text-left">
                                    <p class="nomargin">9.</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">Pelabuhan</p>
                                    <p class="sub-eng nomargin">Port of</p>
                                    <p class="nomargin">Tanggal</p>
                                    <p class="sub-eng nomargin">Date</p>
                                    <p class="nomargin">Nomor</p>
                                    <p class="sub-eng nomargin">Number</p>
                                </div>
                                <div class="col-8 text-left">
                                    <p class="nomargin">Pengukuhan</p>
                                    <p class="sub-eng nomargin">Endorsement</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                </div>
                            </div>

                            <div class="wrapper text-center">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <p class="nomargin">Syahbandar</p>
                                    <p class="sub-eng nomargin">Harbour Master</p>
                                    <p class="mdtopmargin"><u>...............................</u></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="wrapper">
                                <div class="col-4 text-left">
                                    <p class="nomargin">10.</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">Pelabuhan</p>
                                    <p class="sub-eng nomargin">Port of</p>
                                    <p class="nomargin">Tanggal</p>
                                    <p class="sub-eng nomargin">Date</p>
                                    <p class="nomargin">Nomor</p>
                                    <p class="sub-eng nomargin">Number</p>
                                </div>
                                <div class="col-8 text-left">
                                    <p class="nomargin">Pengukuhan</p>
                                    <p class="sub-eng nomargin">Endorsement</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                    <p class="nomargin">:</p>
                                    <p class="nomargin">&nbsp;</p>
                                </div>
                            </div>

                            <div class="wrapper text-center">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <p class="nomargin">Syahbandar</p>
                                    <p class="sub-eng nomargin">Harbour Master</p>
                                    <p class="mdtopmargin"><u>...............................</u></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>