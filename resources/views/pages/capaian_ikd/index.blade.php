@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="box">
      <div class="box-body bg-img" style="background-image: url(../images/bg-5.png);" data-overlay-light="9">
        <div class="d-lg-flex align-items-center justify-content-between">
          <div class="d-md-flex align-items-center mb-30 mb-lg-0 w-p100">
            <img src="{{ asset('LKPJ/images/svg-icon/color-svg/custom-14.svg') }}" class="img-fluid max-w-150" alt="" />
            <div class="ms-30">
              <h3 class="mb-10"><b>Capaian IKD</b></h3>
            </div>
          </div>
        </div>							
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="box">
      <div class="box-header with-border">
        <h4 class="box-title">SKPD : <b>{{ $skpd->nama_skpd }}</b></h4>
        <ul class="box-controls pull-right d-md-flex d-none">
          @if (Auth::user()->hak_akses == 'OPD')  
            <a href="{{ route('capaian-ikd-export') }}" target="_blank" class="btn btn-danger btn-sm px-4 py-2 me-2"><i class="fa fas fa-file"></i> Export PDF</a>
          @endif
        </ul>
    </div>
    <div class="box-body">
        <div class="row">
            <small class="fw-bold mb-2">Catatan : <i class="text-danger">Untuk update/merubah data IKD silahkan login ke SIPPD</i></small>
            <div class="col-12">
              <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table align-middle table-bordered table-rounded border gy-7 gs-7 fs-7">
                        <thead class="text-center fw-bolder bg-light">
                            <tr>
                                <th rowspan="2">Kode</th>
                                <th rowspan="2">Indikator Kinerja</th>
                                <th rowspan="2">Satuan</th>
                                <th rowspan="2">Kondisi <br> Awal <br> 2020</th>
                                <th colspan="2">2021</th>
                                <th colspan="2">2022</th>
                                <th colspan="2">2023</th>
                                <th colspan="2">2024</th>
                                <th colspan="2">2025</th>
                                <th colspan="2">2026</th>
                            </tr>
                            <tr>
                                <th>T</th>
                                <th>C</th>
                                <th>T</th>
                                <th>C</th>
                                <th>T</th>
                                <th>C</th>
                                <th>T</th>
                                <th>C</th>
                                <th>T</th>
                                <th>C</th>
                                <th>T</th>
                                <th>C</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dt)
                            <tr class="text-center">
                                <td>{{ $dt->kode_ikd }}</td>
                                <td class="text-start">{{ $dt->indikator_ikd }}</td>
                                <td>{{ $dt->satuan }}</td>
                                <td>{{ $dt->kondisi_awal }}</td>
                                <td>{{ $dt->target_1 }}</td>
                                <td>{{ $dt->capaian_1 }}</td>
                                <td>{{ $dt->target_2 }}</td>
                                <td>{{ $dt->capaian_2 }}</td>
                                <td>{{ $dt->target_3 }}</td>
                                <td>{{ $dt->capaian_3 }}</td>
                                <td>{{ $dt->target_4 }}</td>
                                <td>{{ $dt->capaian_4 }}</td>
                                <td>{{ $dt->capaian_5 }}</td>
                                <td>{{ $dt->target_5 }}</td>
                                <td>{{ $dt->target_6 }}</td>
                                <td>{{ $dt->capaian_6 }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection