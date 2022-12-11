@extends('lkpj-fix.layouts.app')

@section('content')

@if (substr(Cookie::get('tahun_aktif'), 3) == 2)

@include('lkpj-fix.includes_new.alert')

<div class="row">
  <div class="col-12">
    <div class="box">
      <div class="box-body bg-img" style="background-image: url(../images/bg-5.png);" data-overlay-light="9">
        <div class="d-lg-flex align-items-center justify-content-between">
          <div class="d-md-flex align-items-center mb-30 mb-lg-0 w-p100">
            <img src="{{ asset('LKPJ/images/svg-icon/color-svg/custom-14.svg') }}" class="img-fluid max-w-150" alt="" />
            <div class="ms-30">
              <h3 class="mb-10"><b>Bab. III Capaian Utama</b></h3>
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
        <div class="row">
          <div class="col">
            <h4 class="box-title"><b>Capaian Kinerja</b></h4>
            <h6 class="box-subtitle">SKPD : {{ ucwords(strtolower($nama_skpd->nama_skpd)) }}</h6>
          </div>
          <div class="col-auto">
            @if (Auth::user()->hak_akses != 'BIDANG')
              @if (App\StsUpdate::where('id', 3)->pluck('kode_sts')->first() == 0)
                <button class="btn bg-gradient-secondary">Tambah Data</button>
              @else
                <a href="{{ route('create-capaianutama', $nama_skpd->id) }}" class="btn bg-gradient-info">Tambah Data</a>
              @endif
            @endif
          </div>
        </div>
      </h4>
      <div class="box-body">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-bordered no-wrap">
                <thead class="bg-primary">
                  <tr>
                    <th class="text-center">No</th>
                    <th>Uraian</th>
                    <th class="text-center">Satuan</th>
                    <th class="text-center">2021</th>
                    <th class="text-center">2022</th>
                    <th class="text-center">2023</th>
                    <th class="text-center">2024</th>
                    <th class="text-center">2025</th>
                    @if (Auth::user()->hak_akses != 'BIDANG')
                    <th class="text-center">Aksi</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i => $data)
                  <tr>
                    <td class="text-center">{{ $i+1 }}</td>
                    <td>{{ $data->indikator_utama }}</td>     
                    <td>{{ $data->satuan }}</td>
                    <td>{{ $data->capaian_1 }}</td>
                    <td>{{ $data->capaian_2 }}</td>
                    <td>{{ $data->capaian_3 }}</td>
                    <td>{{ $data->capaian_4 }}</td>
                    <td>{{ $data->capaian_5 }}</td>
                    @if (Auth::user()->hak_akses != 'BIDANG')
                    <td class="text-center">
                      <a href="{{ route('edit-capaianutama', $data->id) }}" class="btn bg-gradient-success"><i class="typcn typcn-edit"></i>Edit</a>
                    </td>
                    @endif
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
        <h4 class="card-title">
          <div class="row">
            <div class="col">
              Capaian Kinerja {{ ucwords(strtolower($nama_skpd->nama_skpd)) }}
            </div>
            <div class="col-auto">
              @if (Auth::user()->hak_akses != 'BIDANG')
                @if (App\StsUpdate::where('id', 3)->pluck('kode_sts')->first() == 0)
                  <button class="btn btn-secondary">Tambah Data</button>
                @else
                  <a href="{{ route('create-capaianutama', $nama_skpd->id) }}" class="btn btn-success">Tambah Data</a>
                @endif
              @endif
            </div>
          </div>
        </h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th>Uraian</th>
                    <th class="text-center">Satuan</th>
                    <th class="text-center">2021</th>
                    <th class="text-center">2022</th>
                    <th class="text-center">2023</th>
                    <th class="text-center">2024</th>
                    <th class="text-center">2025</th>
                    @if (Auth::user()->hak_akses != 'BIDANG')
                    <th class="text-center">Aksi</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i => $data)
                  <tr>
                    <td class="text-center">{{ $i+1 }}</td>
                    <td>{{ $data->indikator_utama }}</td>     
                    <td>{{ $data->satuan }}</td>
                    <td>{{ $data->capaian_1 }}</td>
                    <td>{{ $data->capaian_2 }}</td>
                    <td>{{ $data->capaian_3 }}</td>
                    <td>{{ $data->capaian_4 }}</td>
                    <td>{{ $data->capaian_5 }}</td>
                    @if (Auth::user()->hak_akses != 'BIDANG')
                    <td class="text-center">
                      <a href="{{ route('edit-capaianutama', $data->id) }}" class="btn btn-warning text-white"><i class="typcn typcn-edit"></i>Edit</a>
                    </td>
                    @endif
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