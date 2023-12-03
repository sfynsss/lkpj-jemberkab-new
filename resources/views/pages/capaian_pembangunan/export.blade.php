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
            <h3 style="font-size: 14px; margin: 0; padding: 0;"><strong>CAPAIAN PEMBANGUNAN TERHADAP TERHADAP HASIL PENYELENGGARAAN URUSAN</strong></h3>
            @if(Auth::user()->hak_akses == 'OPD')
                <h5 style="font-size: 14px; margin: 0; padding: 0;"> {{ strtoupper(Auth::user()->SKPD->nama_skpd) }}</h5>
                <h5 style="font-size: 14px; margin: 0; padding: 0;"> KABUPATEN JEMBER</h5>
            @else PEMERINTAH 
                <h5 style="font-size: 14px; margin: 0; padding: 0;"> PEMERINTAH KABUPATEN JEMBER</h5>
            @endif
          </div>
        </div>
        <table class="content-table">
            <thead>
                <tr>
                    <th style="text-align: center; border: 1px solid #000000;"><b>Kategori</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>2019</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>2020</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>2021</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>2022</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>2023</b></th>
                    <th style="text-align: center; border: 1px solid #000000;"><b>Keterangan</b></th>
                </tr>
                <tr>
                  <th style="text-align: center; border: 1px solid #000000;"><b>1</b></th>
                  <th style="text-align: center; border: 1px solid #000000;"><b>2</b></th>
                  <th style="text-align: center; border: 1px solid #000000;"><b>3</b></th>
                  <th style="text-align: center; border: 1px solid #000000;"><b>4</b></th>
                  <th style="text-align: center; border: 1px solid #000000;"><b>5</b></th>
                  <th style="text-align: center; border: 1px solid #000000;"><b>6</b></th>
                  <th style="text-align: center; border: 1px solid #000000;"><b>7</b></th>
                </tr>
            </thead>
            <tbody>
              @foreach ($data as $dt)
              <tr>
                <td style="text-align: left; border: 1px solid #000000;">&nbsp;<b>{{ $dt->nama_kategori }}</b></td>
                <td style="text-align: center; border: 1px solid #000000;"></td>
                <td style="text-align: center; border: 1px solid #000000;"></td>
                <td style="text-align: center; border: 1px solid #000000;"></td>
                <td style="text-align: center; border: 1px solid #000000;"></td>
                <td style="text-align: center; border: 1px solid #000000;"></td>
                <td style="text-align: center; border: 1px solid #000000;"></td>
              </tr>
              @foreach ($dt->Data as $dtx)
                <tr>
                  <td style="text-align: left; border: 1px solid #000000;">&nbsp;&nbsp;&nbsp;&nbsp;- {{ $dtx->nama_data }}</td>
                  <td style="text-align: center; border: 1px solid #000000;">{{ $dtx->th_2019 }}</td>
                  <td style="text-align: center; border: 1px solid #000000;">{{ $dtx->th_2020 }}</td>
                  <td style="text-align: center; border: 1px solid #000000;">{{ $dtx->th_2021 }}</td>
                  <td style="text-align: center; border: 1px solid #000000;">{{ $dtx->th_2022 }}</td>
                  <td style="text-align: center; border: 1px solid #000000;">{{ $dtx->th_2023 }}</td>
                  <td style="text-align: center; border: 1px solid #000000;">{{ $dtx->keterangan }}</td>
                </tr>
              @endforeach
              @endforeach
            </tbody>
        </table>
        {{-- <table class="table-footer"> --}}
        @if (Auth::user()->hak_akses == 'OPD')
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
        @endif
    </div>

</body>
</html>
