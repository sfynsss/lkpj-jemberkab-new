@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Predikat</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Predikat</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>

      <li class="nav-item">Predikat SKPD</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-12">
              <div class="d-lg-flex align-items-center">
                <h3 class="text-dark font-weight-bold mb-2">Daftar Predikat SKPD : {{ $nama }}</h3>
              </div>
              <h3 class="text-dark font-weight-bold mb-2">Tahun : 202{{ $tahun_aktif }}</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display table table-bordered table-hover" >
              <thead class="text-center">
                <tr>
                  <th style="width: 10%"><b>No.</b></th>
                  <th style="width: 10%"><b>Triwulan</b></th>
                  <th style="width: 30%"><b>Predikat Kinerja</b></th>
                  <th style="width: 30%"><b>Predikat Anggaran</b></th>
                  <th style="width: 20%"><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">Triwulan I</td>
                    <td>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-info" style="width: {{ $ps_kinerja1 }}% !important;" role="progressbar" aria-valuenow="{{ $ps_kinerja1 }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <p class="text-muted mb-0">{{ $ps_kinerja1 }}%</p>
                            <p class="text-muted mb-0">{{ $pr_kinerja1 }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-primary" style="width: {{ $ps_anggaran1 }}% !important;" role="progressbar" aria-valuenow="{{ $ps_anggaran1 }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                          <p class="text-muted mb-0">{{ $ps_anggaran1 }}%</p>
                          <p class="text-muted mb-0">{{ $pr_anggaran1 }}</p>
                        </div>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('predikat-faktor-opd', $ke_predikat_1) }}" class="btn btn-success">Faktor Capain Triwulan I</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">2</td>
                    <td class="text-center">Triwulan II</td>
                    <td>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-info" style="width: {{ $ps_kinerja2 }}% !important;" role="progressbar" aria-valuenow="{{ $ps_kinerja2 }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <p class="text-muted mb-0">{{ $ps_kinerja2 }}%</p>
                            <p class="text-muted mb-0">{{ $pr_kinerja2 }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-primary" style="width: {{ $ps_anggaran2 }}% !important;" role="progressbar" aria-valuenow="{{ $ps_anggaran2 }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                          <p class="text-muted mb-0">{{ $ps_anggaran2 }}%</p>
                          <p class="text-muted mb-0">{{ $pr_anggaran2 }}</p>
                        </div>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('predikat-faktor-opd', $ke_predikat_2) }}" class="btn btn-success">Faktor Capain Triwulan II</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">3</td>
                    <td class="text-center">Triwulan III</td>
                    <td>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-info" style="width: {{ $ps_kinerja3 }}% !important;" role="progressbar" aria-valuenow="{{ $ps_kinerja3 }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <p class="text-muted mb-0">{{ $ps_kinerja3 }}%</p>
                            <p class="text-muted mb-0">{{ $pr_kinerja3 }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-primary" style="width: {{ $ps_anggaran3 }}% !important;" role="progressbar" aria-valuenow="{{ $ps_anggaran3 }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                          <p class="text-muted mb-0">{{ $ps_anggaran3 }}%</p>
                          <p class="text-muted mb-0">{{ $pr_anggaran3 }}</p>
                        </div>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('predikat-faktor-opd', $ke_predikat_3) }}" class="btn btn-success">Faktor Capain Triwulan III</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">4</td>
                    <td class="text-center">Triwulan IV</td>
                    <td>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-info" style="width: {{ $ps_kinerja4 }}% !important;" role="progressbar" aria-valuenow="{{ $ps_kinerja4 }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <p class="text-muted mb-0">{{ $ps_kinerja4 }}%</p>
                            <p class="text-muted mb-0">{{ $pr_kinerja4 }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-primary" style="width: {{ $ps_anggaran4 }}% !important;" role="progressbar" aria-valuenow="{{ $ps_anggaran4 }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                          <p class="text-muted mb-0">{{ $ps_anggaran4 }}%</p>
                          <p class="text-muted mb-0">{{ $pr_anggaran4 }}</p>
                        </div>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('predikat-faktor-opd', $ke_predikat_4) }}" class="btn btn-success">Faktor Capain Triwulan IV</a>
                    </td>
                  </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection