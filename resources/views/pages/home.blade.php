@extends('layouts.app')

@section('content')
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
                            <a href="{{ url('https://sippd050.jemberkab.go.id') }}" target="_blank" class="waves-effect waves-light w-p100 btn btn-primary btn-lg" style="white-space: nowrap;">Ke SIPPD</a>
                        </div>
                    </div>							
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Visi dan Misi, Tema Pembangunan, Strategi dan arah Kebijakan, Program unggulan Kepala Daerah</h4>
                </div>
                <div class="box-body p-0">
                  <div class="media-list media-list-hover">
                    <div class="media bar-0">
                      <span class="avatar avatar-lg bg-primary-light rounded"><i class="fa fa-user"></i></span>
                      <div class="media-body fw-500">
                        <p class="d-flex align-items-center justify-content-between">
                            <p class="d-flex align-items-center justify-content-between"><strong>Visi :</strong></p>
                        </p>
                        <p class="text-dark ms-3">Wes Wayahe Mbenahi Jember Dengan Berprinsip Pada Kolaborasi, Sinergi, Dan Akselerasi Dalam Membangun Jember</p>
                      </div>
                    </div>

                    <div class="media bar-0">
                        <span class="avatar avatar-lg bg-danger-light rounded"><i class="fa fa-money"></i></span>
                        <div class="media-body">
                          <p class="d-flex align-items-center justify-content-between"><strong>Misi :</strong></p>
                          <p class="text-fade">
                            <ol>
                                <li>Meningkatkan pertumbuhan ekonomi dengan semangat sinergitas dan kolaborasi dengan semua elemen masyarakat yang berbasiskan potensi daerah.</li>
                                <li>Membangun tata kelola pemerintahan yang kondusif antara eksekutif, legislatif, masyarakat dan komponen pembangunan daerah lainnya.</li>
                                <li>Menuntaskan kemiskinan struktural dan kultural di semua wilayah.</li>
                                <li>Meningkatkan  investasi  dengan  membangun  dan mengembangkan  sektor- sektor unggulan dengan berbasiskan kekayaan sumber daya alam, sumber daya manusia dan lingkungan yang lestari.</li>
                                <li>Meningkatkan  pelayanan  dasar  berupa  kesehatan  dan pendidikan  dengan sistem yang terintegrasi.</li>
                                <li>Meningkatkan kualitas dan ketersediaan infrastruktur publik yang merata di semua wilayah Jember.</li>
                                <li>Pengembangan  potensi  pariwisata  dengan  mengedepankan kearifan  lokal serta pelestarian budaya.</li>
                            </ol>
                          </p>
                        </div>
                    </div>

                    <div class="media bar-0">
                     <span class="avatar avatar-lg bg-success-light rounded"><i class="fa fa-book"></i></span>
                      <div class="media-body">
                        <p class="d-flex align-items-center justify-content-between"><strong>Strategi dan Arah Kebijakan :</strong></p>
                        <p class="text-fade">-</p>
                      </div>
                    </div>

                    <div class="media bar-0">
                      <span class="avatar avatar-lg bg-info-light rounded"><i class="fa fa-graduation-cap"></i></span>
                      <div class="media-body">
                        <p class="d-flex align-items-center justify-content-between"><strong>Program Unggulan :</strong></p>
                        <p class="text-fade">-</p>
                      </div>
                    </div>

                  </div>
                </div>
            </div>
          </div>
    </div>	

@endsection