<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>COBA SASARAN</title>
  </head>
  <body>
    {{-- <table class="table table-bordered">
        <thead>
            <td>Kode Urusan</td>
            <td>Nama Urusan</td>
            <td>Kode Bidang Urusan</td>
            <td>Nama Bidang Urusan</td>
            <td>Kode Program</td>
            <td>Nama Program</td>
            <td>Kode Kegiatan</td>
            <td>Nama Kegiatan</td>
            <td>Kode Sub-Kegiatan</td>
            <td>Nama Sub-Kegiatan</td>
        </thead>
        <tbody>
            @foreach ($urusan as $v_urus)
                <tr>
                    <td>{{ $v_urus->kode_urusan }}</td>
                    <td>{{ $v_urus->nama_urusan }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        @foreach ($v_urus->BidangUrusan as $v_bidang_urusan)
                            <tr>
                                <td></td>
                                <td></td>
                                <td>{{ $v_bidang_urusan->kode_bidang_urusan }}</td>
                                <td>{{ $v_bidang_urusan->nama_bidang_urusan }}</td>
                                <td>
                                    @foreach ($v_bidang_urusan->Program as $v_program)
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $v_program->kode_program }}</td>
                                            <td>{{ $v_program->nama_program }}</td>
                                            <td>
                                                @foreach ($v_program->Kegiatan as $v_kegiatan)
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>{{ $v_kegiatan->kode_kegiatan }}</td>
                                                        <td>{{ $v_kegiatan->nama_kegiatan }}</td>
                                                        <td>
                                                            @foreach ($v_kegiatan->SubKegiatan as $v_subkeg)
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>{{ $v_subkeg->kode_sub_keg }}</td>
                                                                <td>{{ $v_subkeg->nama_sub_keg }}</td>
                                                            </tr>
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
    <table class="table table-responsice table-bordered">
        <thead>
            <th>Kode Sasaran</th>
            <th>Nama Sasaran</th>
            <th>Kode Program</th>
            <th>Nama Program</th>
            <th>Nama SKPD</th>
        </thead>
        <tbody>

            @foreach ($data as $ssr)
                <tr>
                    <td>{{ $ssr->kode_sasaran }}</td>
                    <td>{{ $ssr->nama_sasaran }}</td>
                    <td>
                        @foreach ($ssr->Program as $prg)
                            <tr>
                                <td></td>
                                <td></td>
                                <td>{{ $prg->kode_program }}</td>
                                <td>{{ $prg->nama_program }}</td>
                                <td>{{ $prg->SKPD->nama_skpd }}</td>
                            </tr>
                        @endforeach
                    </td>
                </tr>
            @endforeach
 
                        {{-- @foreach (App\Program::where('id_sasaran', $dt->id)->get() as $prg)
                            <tr>
                                <td>{{ $prg->kode_program }}</td>
                                <td>{{ $prg->nama_program }}</td>
                            </tr>
                        @endforeach --}}

        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>



    {{-- <table>
        <thead>
            <th>ID</th>
            <th>ID_SKPD</th>
            <th>NAMA SKPD</th>
            <th>KODE SKPD</th>
            <th>KODE SUB KEGIATAN</th>
            <th>NAMA SUB KEGIATAN</th>
            <th>INDIKATOR 2</th>
            <th>TARGET 2021</th>
            <th>SATUAN 2021</th>
            <th>PAGU 2021</th>
            <th>INDIKATOR 2022</th>
            <th>TARGET 2022</th>
            <th>SATUAN 2022</th>
            <th>PAGU 2022</th>
        </thead>
        <tbody>
            @foreach ($data as $dt)
            <tr>
                <td>{{ $dt->id }}</td>
                <td>{{ $dt->id_skpd }}</td>
                <td>{{ $dt->Skpd->nama_skpd }}</td>
                <td>{{ $dt->Skpd->kode_skpd }}</td>
                <td>{{ $dt->kode_sub_keg }}</td>
                <td>{{ $dt->nama_sub_keg }}</td>
                <td>{{ $dt->indikator_sub_keg }}</td>
                <td>{{ $dt->target_sub_keg_1 }}</td>
                <td>{{ $dt->satuan_target_sub_keg_1 }}</td>
                <td>{{ $dt->pagu_indikatif_sub_keg_1 }}</td>
                <td>{{ App\TestUpdateModel::
                    where('nama_skpd', $dt->Skpd->nama_skpd) 
                    ->where('kode_skpd', $dt->Skpd->kode_skpd)
                    ->where('kode_sub_keg', $dt->kode_sub_keg)
                    ->pluck('indikator_sub_keg')
                    ->first()
                    }}
                </td>
                <td>{{ App\TestUpdateModel::
                    where('nama_skpd', $dt->Skpd->nama_skpd) 
                    ->where('kode_skpd', $dt->Skpd->kode_skpd)
                    ->where('kode_sub_keg', $dt->kode_sub_keg)
                    ->pluck('target_sub_keg')
                    ->first()
                    }}
                </td>
                <td>{{ App\TestUpdateModel::
                    where('nama_skpd', $dt->Skpd->nama_skpd) 
                    ->where('kode_skpd', $dt->Skpd->kode_skpd)
                    ->where('kode_sub_keg', $dt->kode_sub_keg)
                    ->pluck('satuan_target_sub_keg')
                    ->first()
                    }}
                </td>
                <td>{{ App\TestUpdateModel::
                    where('nama_skpd', $dt->Skpd->nama_skpd) 
                    ->where('kode_skpd', $dt->Skpd->kode_skpd)
                    ->where('kode_sub_keg', $dt->kode_sub_keg)
                    ->pluck('pagu_indikatif_sub_keg')
                    ->first()
                    }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> --}}
