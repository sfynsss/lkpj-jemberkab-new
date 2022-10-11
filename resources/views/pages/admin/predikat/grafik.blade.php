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
      <li class="nav-item">SIPPD</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar SKPD</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Predikat</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <h3 class="text-dark font-weight-bold mb-2">Grafik Predikat Dinas Pendidikan</h3>
                    <h5 class="font-weight-normal mb-2">Berikut grafik predikat kinerja dan anggaran dari Dinas Pendidikan :</h5>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5><b>Triwulan I</b></h5>
                                    <p class="text-muted">Predikat Kinerja</p>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info" style="width: 28% !important;" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <p class="text-muted mb-0">Sangat Rendah</p>
                                <p class="text-muted mb-0">28.21</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5><b>Triwulan II</b></h5>
                                    <p class="text-muted">Predikat Kinerja</p>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" style="width: 55% !important;" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <p class="text-muted mb-0">Rendah</p>
                                <p class="text-muted mb-0">55.56</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5><b>Triwulan III</b></h5>
                                    <p class="text-muted">Predikat Kinerja</p>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger" style="width: 75% !important;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <p class="text-muted mb-0">Tinggi</p>
                                <p class="text-muted mb-0">75.85</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5><b>Triwulan IV</b></h5>
                                    <p class="text-muted">Predikat Kinerja</p>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-secondary" style="width: 99% !important;" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <p class="text-muted mb-0">Sangat Tinggi</p>
                                <p class="text-muted mb-0">99.17</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5><b>Triwulan I</b></h5>
                                    <p class="text-muted">Predikat Anggaran</p>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width: 7% !important;" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <p class="text-muted mb-0">Sangat Rendah</p>
                                <p class="text-muted mb-0">7.66</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5><b>Triwulan II</b></h5>
                                    <p class="text-muted">Predikat Anggaran</p>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger" style="width: 28% !important;" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <p class="text-muted mb-0">Rendah</p>
                                <p class="text-muted mb-0">28.48</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5><b>Triwulan III</b></h5>
                                    <p class="text-muted">Predikat Anggaran</p>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-warning" style="width: 48% !important;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <p class="text-muted mb-0">Sangat Rendah</p>
                                <p class="text-muted mb-0">43.18</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5><b>Triwulan IV</b></h5>
                                    <p class="text-muted">Predikat Anggaran</p>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info" style="width: 70% !important;" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <p class="text-muted mb-0">Sangat Tinggi</p>
                                <p class="text-muted mb-0">70.4</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection