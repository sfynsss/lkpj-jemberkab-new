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
                          <h2 class="mb-10">Selamat datang, Admin!</h2>
                          <p class="mb-0 text-fade fs-18">Pada website aplikasi Laporan Keterangan Pertanggungjawaban  (LKPJ) Kabupaten Jember.</p>
                          <p class="mb-0 text-fade fs-18">Anda login sebagai  : User Admin Bappeda</p>
                      </div>
                  </div>
                  <div>
                      <button type="button" class="waves-effect waves-light w-p100 btn btn-primary btn-lg" style="white-space: nowrap;">Ke SIPPD</button>
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
          <h4 class="box-title"><b>Daftar SKPD</b></h4>
          <h6 class="box-subtitle">Kabupaten Jember</h6>
        </div>
          <div class="box-body">
              <div class="table-responsive">
								<table id="tickets" class="table mt-0 table-bordered table-hover no-wrap" data-page-size="10">
                  <thead class="bg-gradient-primary-dark text-white">
                          <tr>
                              <th>No</th>
                              <th>Kode SKPD</th>
                              <th>Nama SKPD</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $dt)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dt->kode_skpd }}</td>
                            <td>{{ $dt->nama_skpd }}</td>
                            <td>
                              @if (Auth::user()->hak_akses == 'BIDANG')
                                @if ($dt->sts_lkpj == 0)
                                  <a href="{{ route('verif-lkpj', $dt->id) }}" class="btn bg-gradient-primary">Verif</a>
                                @endif
                              @endif
                              <a href="{{ route('program-lkpj', $dt->id) }}" class="btn bg-gradient-secondary">Lihat Data</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                          <tr>
                              <th>Name</th>
                              <th>Kode SKPD</th>
                              <th>Nama SKPD</th>
                              <th>Aksi</th>
                          </tr>
                      </tfoot>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>



@else

<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title">Data SKPD Kabupaten Jember</h4>
              <div class="table-responsive">
                  <table id="zero_config" class="table table-striped table-bordered no-wrap">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Kode SKPD</th>
                              <th>Nama SKPD</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $dt)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dt->kode_skpd }}</td>
                            <td>{{ $dt->nama_skpd }}</td>
                            <td>
                              @if (Auth::user()->hak_akses == 'BIDANG')
                                @if ($dt->sts_lkpj == 0)
                                  <a href="{{ route('verif-lkpj', $dt->id) }}" class="btn btn-outline-success">Verif</a>
                                @endif
                              @endif
                              <a href="{{ route('program-lkpj', $dt->id) }}" class="btn btn-outline-primary">View</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                          <tr>
                              <th>Name</th>
                              <th>Kode SKPD</th>
                              <th>Nama SKPD</th>
                              <th>Aksi</th>
                          </tr>
                      </tfoot>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>

@endif

 {{-- <div class="row">
  <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Triwulan I</h4>
        <div class="d-flex justify-content-between">
          <p>Avg. Session</p>
          <p>40 %</p>
        </div>
        <div class="progress progress-md">
          <div class="progress-bar bg-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Triwulan II</h4>                      
        <div class="d-flex justify-content-between">
          <p>Avg. Session</p>
          <p>120 %</p>
        </div>
        <div class="progress progress-md">
          <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Triwulan III</h4>
        <div class="d-flex justify-content-between">
          <p>Avg. Session</p>
          <p>54 %</p>
        </div>
        <div class="progress progress-md">
          <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Triwulan IV</h4>
        <div class="d-flex justify-content-between">
          <p>Avg. Session</p>
          <p>143 %</p>
        </div>
        <div class="progress progress-md">
          <div class="progress-bar bg-warning w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
</div> 

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data SKPD Kabupaten Jember</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Nama SKPD</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i => $skpd)
                      <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $skpd->kode_skpd }}</td>
                        <td>{{ $skpd->nama_skpd }}</td>
                        <td>
                          <a href="{{ route('program', $skpd->id) }}" class="btn btn-outline-primary">View</a>
                        </td>
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
</div> --}}

@endsection