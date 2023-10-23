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
              <h3 class="mb-10"><b>Bab. III Bidang Urusan</b></h3>
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
        <h4 class="box-title"><b>Data Bidang Urusan</b></h4>
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
                      <th>Bidang Urusan</th>
                      {{-- <th>Aksi</th> --}}
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i => $data)
                      <tr>
                        <td class="text-center">{{ $i+1 }}</td>
                        <td class="text-center">{{ $data->kode_bidang_urusan }}</td>
                        <td>{{ $data->nama_bidang_urusan }}</td>
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