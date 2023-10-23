@extends('layouts.app')

@section('content')

@include('includes.alert')

<div class="row">
  <div class="col-12">
    <div class="box">
      <div class="box-body bg-img" style="background-image: url(../images/bg-5.png);" data-overlay-light="9">
        <div class="d-lg-flex align-items-center justify-content-between">
          <div class="d-md-flex align-items-center mb-30 mb-lg-0 w-p100">
            <img src="{{ asset('LKPJ/images/svg-icon/color-svg/custom-14.svg') }}" class="img-fluid max-w-150" alt="" />
            <div class="ms-30">
              <h3 class="mb-10"><b>Bab. IV Daftar SKPD</b></h3>
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
        <h4 class="box-title"><b>Daftar SKPD</b></h4>
        <h6 class="box-subtitle">Kabupaten Jember</h6>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-bordered no-wrap">
                <thead class="bg-gradient-primary-dark text-white text-center">
                  <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Nama SKPD</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i => $skpd)
                      <tr>
                        <td class="text-center">{{ $i+1 }}</td>
                        <td>{{ $skpd->kode_skpd }}</td>
                        <td class="text-center">{{ $skpd->nama_skpd }}</td>
                        <td class="text-center">
                          <a href="{{ route('penutup', $skpd->id) }}" class="btn bg-gradient-primary">Lihat</a>
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
</div>

@endsection