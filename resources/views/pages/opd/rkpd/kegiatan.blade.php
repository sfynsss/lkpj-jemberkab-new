@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">RKPD</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">RKPD</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>

      <li class="nav-item">Daftar Program</li>
      <li class="separator">
          <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">Daftar Kegiatan</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-12">
              <div class="d-lg-flex align-items-center">
                <h3 class="text-dark font-weight-bold mb-2">Daftar Kegiatan Tahun <span class="badge badge-primary">{{ Cookie::get('tahun_aktif') }}</span></h3>
              </div>
              <h3 class="text-dark font-weight-bold mb-2">Program : {{ $nama }}</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover" >
              <thead>
                <tr>
                  <th><b>No.</b></th>
                  <th><b>Kode</b></th>
                  <th><b>Kegiatan</b></th>
                  <th><b>Indikator</b></th>
                  <th><b>Target</b></th>
                  <th><b>Pagu Anggaran</b></th>
                  <th><b>Prakiraan Maju</b></th>
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                @php($i = 1)
                @foreach($data as $data)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$data->kode_kegiatan}}</td>
                  <td class="text-left">{{$data->nama_kegiatan}}</td>
                  <td class="text-left">{{$data->indikator_kegiatan}}</td>
                  @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                  <td class="text-left">{{$data->target_kegiatan1}}</td>
                  <td class="text-left">{{$data->pagu_indikatif_kegiatan1}}</td>
                  <td class="text-left">{{$data->prakiraan_maju_kegiatan1}}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                  <td class="text-left">{{$data->target_kegiatan2}}</td>
                  <td class="text-left">{{$data->pagu_indikatif_kegiatan2}}</td>
                  <td class="text-left">{{$data->prakiraan_maju_kegiatan2}}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                  <td class="text-left">{{$data->target_kegiatan3}}</td>
                  <td class="text-left">{{$data->pagu_indikatif_kegiatan3}}</td>
                  <td class="text-left">{{$data->prakiraan_maju_kegiatan3}}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                  <td class="text-left">{{$data->target_kegiatan4}}</td>
                  <td class="text-left">{{$data->pagu_indikatif_kegiatan4}}</td>
                  <td class="text-left">{{$data->prakiraan_maju_kegiatan4}}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                  <td class="text-left">{{$data->target_kegiatan5}}</td>
                  <td class="text-left">{{$data->pagu_indikatif_kegiatan5}}</td>
                  <td class="text-left">{{$data->prakiraan_maju_kegiatan5}}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                  <td class="text-left">{{$data->target_kegiatan6}}</td>
                  <td class="text-left">{{$data->pagu_indikatif_kegiatan6}}</td>
                  <td class="text-left">{{$data->prakiraan_maju_kegiatan6}}</td>
                  @endif
                  <td>
                    <a href="{{ route('rkpd-subkegiatan-opd', $data->id) }}" class="btn btn-primary" ><i class="fas fa-clipboard-check btn-icon-prepend mr-2"></i>Sub-Kegiatan</a>
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

@endsection