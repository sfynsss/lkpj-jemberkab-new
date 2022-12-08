@extends('lkpj-fix.layouts.app')

@section('content')

@if (substr(Cookie::get('tahun_aktif'), 3) == 2)

<div class="row">
  <div class="col-12">
    <div class="box">
      <div class="box-body bg-img" style="background-image: url(../images/bg-5.png);" data-overlay-light="9">
        <div class="d-lg-flex align-items-center justify-content-between">
          <div class="d-md-flex align-items-center mb-30 mb-lg-0 w-p100">
            <img src="{{ asset('LKPJ/images/svg-icon/color-svg/custom-14.svg') }}" class="img-fluid max-w-150" alt="" />
            <div class="ms-30">
              <h3 class="mb-10"><b>Bab. II Sub-Kegiatan</b></h3>
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
        <h4 class="box-title"><b>Data Sub-Kegiatan</b></h4>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table table-bordered no-wrap">
                <thead class="bg-warning">
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Sub-Kegiatan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i => $data)
                  <tr>
                    <td class="text-center">{{ $i+1 }}</td>
                    <td>{{ $data->kode_sub_keg }}</td>
                    <td>{{ $data->nama_sub_keg }}</td>                      
                    <td class="text-center">
                      <a href="{{ route('detail-pks', $data->id) }}" class="btn bg-gradient-warning"><i class="typcn typcn-edit"></i> Lihat Data</a>
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

@else

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Sub-Kegiatan {{ $data[0]->Skpd->nama_skpd }}</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Sub-Kegiatan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i => $data)
                  <tr>
                    <td class="text-center">{{ $i+1 }}</td>
                    <td>{{ $data->kode_sub_keg }}</td>
                    <td>{{ $data->nama_sub_keg }}</td>                      
                    <td class="text-center">
                      <a href="{{ route('detail-pks', $data->id) }}" class="btn btn-warning text-white"><i class="typcn typcn-edit"></i>VIEW</a>
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

@endif

@endsection