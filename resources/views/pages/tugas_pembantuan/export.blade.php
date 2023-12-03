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
            <h3 style="font-size: 14px; margin: 0; padding: 0;"><strong>TUGAS PEMBANTUAN</strong></h3>
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
                  <th style="text-align: center; border: 1px solid #000000;" rowspan="2">Dasar Hukum</th>
                  <th style="text-align: center; border: 1px solid #000000;" rowspan="2">Instansi Pemberi <br> Tugas Pembantuan</th>
                  <th style="text-align: center; border: 1px solid #000000;" rowspan="2">Instansi Penerima <br> Tugas Pembantuan</th>
                  <th style="text-align: center; border: 1px solid #000000;" colspan="2">Fungsi</th>
                  <th style="text-align: center; border: 1px solid #000000;" colspan="2">Sub Fungsi</th>
                  <th style="text-align: center; border: 1px solid #000000;" colspan="2">Sub Kegiatan</th>
                  <th style="text-align: center; border: 1px solid #000000;" rowspan="2">Pagu</th>
                  <th style="text-align: center; border: 1px solid #000000;" rowspan="2">Realisasi</th>
                  <th style="text-align: center; border: 1px solid #000000;" rowspan="2">Jangka Waktu Pelaksanaan</th>
                  <th style="text-align: center; border: 1px solid #000000;" rowspan="2">No SIP DPA</th>
                  <th style="text-align: center; border: 1px solid #000000;" rowspan="2">Permasalahan</th>
                  <th style="text-align: center; border: 1px solid #000000;" rowspan="2">Solusi</th>
                  <th style="text-align: center; border: 1px solid #000000;" rowspan="2">Keterangan</th>
                </tr>
                <tr>
                  <th style="text-align: center; border: 1px solid #000000;">Kode</th>
                  <th style="text-align: center; border: 1px solid #000000;">Nama</th>
                  <th style="text-align: center; border: 1px solid #000000;">Kode</th>
                  <th style="text-align: center; border: 1px solid #000000;">Nama</th>
                  <th style="text-align: center; border: 1px solid #000000;">Kode</th>
                  <th style="text-align: center; border: 1px solid #000000;">Nama</th>
                </tr>
                <tr>
                  <th style="text-align: center; border: 1px solid #000000;">1</th>
                  <th style="text-align: center; border: 1px solid #000000;">2</th>
                  <th style="text-align: center; border: 1px solid #000000;">3</th>
                  <th style="text-align: center; border: 1px solid #000000;"></th>
                  <th style="text-align: center; border: 1px solid #000000;"></th>
                  <th style="text-align: center; border: 1px solid #000000;"></th>
                  <th style="text-align: center; border: 1px solid #000000;">4</th>
                  <th style="text-align: center; border: 1px solid #000000;"></th>
                  <th style="text-align: center; border: 1px solid #000000;">5</th>
                  <th style="text-align: center; border: 1px solid #000000;">6</th>
                  <th style="text-align: center; border: 1px solid #000000;"></th>
                  <th style="text-align: center; border: 1px solid #000000;"></th>
                  <th style="text-align: center; border: 1px solid #000000;"></th>
                  <th style="text-align: center; border: 1px solid #000000;">7</th>
                  <th style="text-align: center; border: 1px solid #000000;">8</th>
                  <th style="text-align: center; border: 1px solid #000000;">9</th>
                </tr>
              </thead>
            <tbody>
              @foreach ($data as $dt)
              <tr>
                <td style="text-align: left; border: 1px solid #000000;">{{ $dt->dasar_hukum }}</td>
                <td style="text-align: left; border: 1px solid #000000;">{{ $dt->pemberi_tugas }}</td>
                <td style="text-align: left; border: 1px solid #000000;">{{ $dt->penerima_tugas }}</td>
                <td style="text-align: left; border: 1px solid #000000;">{{ $dt->kode_fungsi }}</td>
                <td style="text-align: left; border: 1px solid #000000;">{{ $dt->nama_fungsi }}</td>
                <td style="text-align: left; border: 1px solid #000000;">{{ $dt->kode_subfungsi }}</td>
                <td style="text-align: left; border: 1px solid #000000;">{{ $dt->nama_subfungsi }}</td>
                <td style="text-align: left; border: 1px solid #000000;">{{ $dt->Subkegiatan->kode_subkegiatan }}</td>
                <td style="text-align: left; border: 1px solid #000000;">{{ $dt->Subkegiatan->nama_subkegiatan }}</td>
                <td style="text-align: left; border: 1px solid #000000;">{{ App\SubkegiatanTahun::where('subkegiatan_id', $dt->subkegiatan_id)->where('tahun', date('Y'))->pluck('pagu_indikatif')->first() }}</td>
                <td style="text-align: left; border: 1px solid #000000;">{{ App\SubkegiatanTahun::where('subkegiatan_id', $dt->subkegiatan_id)->where('tahun', date('Y'))->pluck('realisasi_anggaran')->first() }}</td>
                <td style="text-align: left; border: 1px solid #000000;">{{ $dt->waktu_pelaksanaan }}</td>
                <td style="text-align: left; border: 1px solid #000000;">{{ $dt->no_sp_dipa }}</td>
                <td style="text-align: left; border: 1px solid #000000;">{{ $dt->permasalahan }}</td>
                <td style="text-align: left; border: 1px solid #000000;">{{ $dt->solusi }}</td>
                <td style="text-align: left; border: 1px solid #000000;">{{ $dt->keterangan }}</td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
