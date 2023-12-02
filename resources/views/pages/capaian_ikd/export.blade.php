<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Export IKD</title>
  <style>
    body, html {
        height: 100%;
        font-family: Tahoma, Verdana, Segoe, sans-serif;
        margin: 0.25cm;
        font-size: 10px;
        /* -webkit-print-color-adjust: exact; */
    }

    .wrapper {
      /* background-color: salmon; */
      width: 100%;
      /* height: 150px; */
    }

    table {
      width: 100%;
      max-width: 100%;
      page-break-inside: auto;
      border-collapse: collapse;
    }

    .keterangan {
      margin: 16px 0px;
      /* font-size: 13px; */
    }

    .content-table td {
      border: 1px solid black;
      padding: 4px 2px;
    }

    .ttd-section {
      margin-top: 20px;
    }

    .ttd {
      text-align: center;
    }

    footer {
      position: fixed;
      bottom: -20px;
      left: 0px;
      right: 0px;
      height: 50px;

      /** Extra personal styles **/
      text-align: right;
    }

    .watermark {
      position: fixed;
      top: 50%;
      left: 50%;
      opacity: 0.1;
      height: 400px;
      width: auto;
      transform: translate(-50%, -50%);
    }

    @media print {
        thead {
            display: table-header-group;
        }
    }
  </style>
</head>
<body>

    <div class="wrapper">
        <div style="width: 100%; position: relative; height: 70px;">
          <div style="width: 100%; text-align: center; vertical-align: middle;">
            <h3 style="font-size: 14px; margin: 0; padding: 0;"><strong>CAPAIAN INDIKATOR KINERJA DAERAH TERHADAP HASIL PENYELENGGARAAN URUSAN</strong></h3>
            @if(Auth::user()->hak_akses == 'OPD')
                <h5 style="font-size: 14px; margin: 0; padding: 0;"> {{ Auth::user()->SKPD->nama_skpd }}</h5>
                <h5 style="font-size: 14px; margin: 0; padding: 0;"> KABUPATEN JEMBER</h5>
            @else PEMERINTAH 
                <h5 style="font-size: 14px; margin: 0; padding: 0;"> PEMERINTAH KABUPATEN JEMBER</h5>
            @endif
          </div>
        </div>
        <table class="content-table" style="font-size: 8px;">
            <thead>
                
                <tr>
                    <th rowspan="2" colspan="3" style="text-align: center; border: 1px solid #000000;"><b>Kode</b></th>
                    <th rowspan="2" style="text-align: center; border: 1px solid #000000;"><b>Indikator Kinerja</b></th>
                    <th rowspan="2" style="text-align: center; border: 1px solid #000000;"><b>Satuan</b></th>
                    <th rowspan="2" style="text-align: center; border: 1px solid #000000;"><b>Kondisi Awal 2020</b></th>
                    <th colspan="2" style="text-align: center; border: 1px solid #000000;"><b>2021</b></th>
                    <th colspan="2" style="text-align: center; border: 1px solid #000000;"><b>2022</b></th>
                    <th colspan="2" style="text-align: center; border: 1px solid #000000;"><b>2023</b></th>
                    <th colspan="2" style="text-align: center; border: 1px solid #000000;"><b>2024</b></th>
                    <th colspan="2" style="text-align: center; border: 1px solid #000000;"><b>2025</b></th>
                    <th colspan="2" style="text-align: center; border: 1px solid #000000;"><b>2026</b></th>
                    <th rowspan="2" style="text-align: center; border: 1px solid #000000;"><b>SKPD Pengampu</b></th>
                </tr>
                <tr>
                    <th style="text-align: center; border: 1px solid #000000;"><b>T</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>C</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>T</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>C</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>T</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>C</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>T</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>C</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>T</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>C</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>T</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>C</b></th>
                </tr>
                <tr>
                    <th style="text-align: center; border: 1px solid #000000;"><b>1A</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>1B</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>1C</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>2</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>3</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>4</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>5A</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>5B</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>6A</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>6B</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>7A</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>7B</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>8A</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>8B</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>9A</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>9B</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>10A</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>10B</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>11</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                <tr>
                    <td style="text-align: center; border: 1px solid #000000;">{{ $dt['kode_fokus'] }}</td>
                    <td colspan="18" style="text-align: center; border: 1px solid #000000;">{{ $dt['nama_fokus'] }}</td>
                </tr>
                @foreach ($dt['bidang_urusan'] as $bdu)
                    <tr>
                        <td style="text-align: center; border: 1px solid #000000;">{{ $bdu['kode_fokus'] }}</td>
                        <td style="text-align: center; border: 1px solid #000000;">{{ $bdu['kode_bidang'] }}</td>
                        <td style="text-align: center; border: 1px solid #000000;" colspan="17">{{ $bdu['nama_bidang'] }}</td>
                    </tr>
                    @foreach ($bdu['ikd'] as $ikd)
                        <tr style="text-align: center; border: 1px solid #000000;">
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['kode_fokus'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['kode_bidang_urusan'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['kode_indikator'] }}</td>
                            <td style="text-align: left; border: 1px solid #000000;">{{ $ikd['indikator_ikd'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['satuan'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['kondisi_awal'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['target_1'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['capaian_1'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['target_2'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['capaian_2'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['target_3'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['capaian_3'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['target_4'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['capaian_4'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['target_5'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['capaian_5'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['target_6'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['capaian_6'] }}</td>
                            <td style="text-align: center; border: 1px solid #000000;">{{ $ikd['SKPD']['nama_skpd'] }}</td>
                        </tr>
                    @endforeach
                @endforeach
                @endforeach
            </tbody>
        </table>
        {{-- <table class="table-footer"> --}}
        <table style="font-size: 10px; margin-top: 18px; text-align: center; page-break-inside:avoid; page-break-after:auto">
            <tr>
                <td style="width: 50%;"></td>
                <td style="width: 50%;">
                    KEPALA
                </td>
            </tr>
            <tr>
                <td style="width: 50%;"></td>
                <td style="width: 50%;">
                    {{ strtoupper(Auth::user()->SKPD->nama_skpd) }}
                </td>
            </tr>
            <tr>
                <td style="width: 50%;"></td>
                <td style="width: 50%;">
                    KABUPATEN JEMBER
                </td>
            </tr>
            <tr>
                <td style="width: 50%;"></td>
                <td style="width: 50%; height: 60pt;">
                </td>
            </tr>
            <tr>
                <td style="width: 50%;"></td>
                <td style="width: 50%;">
                    <b><u>{{ Auth::user()->nama }}</u></b>
                </td>
            </tr>
            <tr>
                <td style="width: 50%;"></td>
                <td style="width: 50%;">
                    NIP. {{ Auth::user()->nip }}
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
