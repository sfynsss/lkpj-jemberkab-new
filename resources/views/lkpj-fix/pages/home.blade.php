@extends('lkpj-fix.layouts.app')

@section('content')
    @if (substr(Cookie::get('tahun_aktif'), 3) == 2)

    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-body bg-img bg-primary-light">
                    <div class="d-lg-flex align-items-center justify-content-between">
                        <div class="d-lg-flex align-items-center mb-30 mb-xl-0 w-p100">
                            <img src="{{ asset('LKPJ/images/svg-icon/color-svg/custom-14.svg') }}" class="img-fluid max-w-250" alt="" />
                            <div class="ms-30">
                                <h2 class="mb-10">Selamat datang, {{ Auth::user()->Skpd->nama_skpd }}!</h2>
                                <p class="mb-0 text-fade fs-18">Pada website aplikasi Laporan Keterangan Pertanggungjawaban  (LKPJ) Kabupaten Jember.</p>
                                <p class="mb-0 text-fade fs-18">Anda login sebagai  : User {{ Auth::user()->hak_akses }}</p>
                            </div>
                        </div>
                        <div>
                            <button type="button" class="waves-effect waves-light w-p100 btn btn-primary btn-lg" style="white-space: nowrap;">Ke SIPPD</button>
                        </div>
                    </div>							
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Keterangan Menu Pelaporan</h4>
                </div>
                <div class="box-body p-0">
                  <div class="media-list media-list-hover">
                    <div class="media bar-0">
                      <span class="avatar avatar-lg bg-primary-light rounded"><i class="fa fa-user"></i></span>
                      <div class="media-body fw-500">
                        <p class="d-flex align-items-center justify-content-between">
                          <a class="hover-success" href="#"><strong>Bab I. Capaian dan Indikator</strong></a>
                        </p>
                        <p class="text-fade">Halaman untuk melihat data capaian dan indikator kinerja yang telah diinputkan di SIPPD</p>
                      </div>
                    </div>

                    <div class="media bar-0">
                        <span class="avatar avatar-lg bg-danger-light rounded"><i class="fa fa-money"></i></span>
                        <div class="media-body">
                          <p class="d-flex align-items-center justify-content-between">
                            <a class="hover-success" href="#"><strong> Bab II. Program/Kegiatan/SubKegiatan</strong></a>
                          </p>
                          <p class="text-fade">Halaman review data P/K/S di OPD masing-masing untuk pelaporan LKPJ</p>
                        </div>
                    </div>

                    <div class="media bar-0">
                     <span class="avatar avatar-lg bg-success-light rounded"><i class="fa fa-book"></i></span>
                      <div class="media-body">
                        <p class="d-flex align-items-center justify-content-between">
                          <a class="hover-success" href="#"><strong>Bab. III Capaian Indikator Kinerja Utama</strong></a>
                        </p>
                        <p class="text-fade">Halaman data urusan dan penglolaan informasi indikator utama dan capaian kinerja utama</p>
                      </div>
                    </div>

                    <div class="media bar-0">
                      <span class="avatar avatar-lg bg-info-light rounded"><i class="fa fa-graduation-cap"></i></span>
                      <div class="media-body">
                        <p class="d-flex align-items-center justify-content-between">
                          <a class="hover-success" href="#"><strong>Bab. IV</strong></a>
                        </p>
                        <p class="text-fade">Halaman pembuatan/perubahan paragraf kalimat penutup untuk laporan LKPJ</p>
                      </div>
                    </div>

                  </div>
                </div>
            </div>
          </div>
        <div class="col-8">
            <div class="box mb-15">
                <div class="box-header with-border">
                    <h4 class="box-title">Navigasi Program/Kegiatan/Subkegiatan</h4>
                </div>
            </div>
            <div class="box mb-15 pull-up">
                <div class="box-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="me-15 bg-primary h-50 w-50 l-h-60 rounded text-center">
                                <span class="icon-Mail fs-24"></span>
                            </div>
                            <div class="d-flex flex-column fw-500">
                                <a href="#" class="text-dark hover-primary mb-1 fs-16">Program</a>
                                {{-- <span class="text-fade">Terdapat sebanyak (n) data program</span> --}}
                            </div>
                        </div>
                        <a href="#">
                            <span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="box mb-15 pull-up">
                <div class="box-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="me-15 bg-danger h-50 w-50 l-h-60 rounded text-center">
                                <span class="icon-Book-open fs-24"><span class="path1"></span><span class="path2"></span></span>
                            </div>
                            <div class="d-flex flex-column fw-500">
                                <a href="#" class="text-dark hover-primary mb-1 fs-16">Kegiatan</a>
                                {{-- <span class="text-fade">Terdapat sebanyak (n) data kegiatan</span> --}}
                            </div>
                        </div>
                        <a href="#">
                            <span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="box mb-15 pull-up">
                <div class="box-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="me-15 bg-info h-50 w-50 l-h-60 rounded text-center">
                                <span class="icon-Mail fs-24"></span>
                            </div>
                            <div class="d-flex flex-column fw-500">
                                <a href="#" class="text-dark hover-info mb-1 fs-16">Sub Kegiatan</a>
                                {{-- <span class="text-fade">Terdapat sebanyak (n) data sub-kegiatan</span> --}}
                            </div>
                        </div>
                        <a href="#">
                            <span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>	

    @else

    @endif

@endsection