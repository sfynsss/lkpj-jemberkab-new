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
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
              <div class="d-lg-flex align-items-center">
                <h3 class="text-dark font-weight-bold mb-2">Daftar Program Tahun <span class="badge badge-primary">{{ Cookie::get('tahun_aktif') }}</span></h3>
              </div>
              <h3 class="text-dark font-weight-bold mb-2">SKPD : {{ $nama }}</h3>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center justify-content-md-end">
              </div>
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
                  <th><b>Program</b></th>
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
                  <td>{{$data->kode_program}}</td>
                  <td class="text-left">{{$data->nama_program}}</td>
                  <td class="text-left">{{$data->indikator_program}}</td>
                  @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                  <td class="text-left">{{$data->target_program1}}</td>
                  <td class="text-left">{{$data->pagu_indikatif_program1}}</td>
                  <td class="text-left">{{$data->prakiraan_maju_program1}}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                  <td class="text-left">{{$data->target_program2}}</td>
                  <td class="text-left">{{$data->pagu_indikatif_program2}}</td>
                  <td class="text-left">{{$data->prakiraan_maju_program2}}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                  <td class="text-left">{{$data->target_program3}}</td>
                  <td class="text-left">{{$data->pagu_indikatif_program3}}</td>
                  <td class="text-left">{{$data->prakiraan_maju_program3}}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                  <td class="text-left">{{$data->target_program4}}</td>
                  <td class="text-left">{{$data->pagu_indikatif_program4}}</td>
                  <td class="text-left">{{$data->prakiraan_maju_program4}}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                  <td class="text-left">{{$data->target_program5}}</td>
                  <td class="text-left">{{$data->pagu_indikatif_program5}}</td>
                  <td class="text-left">{{$data->prakiraan_maju_program5}}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                  <td class="text-left">{{$data->target_program6}}</td>
                  <td class="text-left">{{$data->pagu_indikatif_program6}}</td>
                  <td class="text-left">{{$data->prakiraan_maju_program6}}</td>
                  @endif
                  <td>
                    <a href="{{ route('rkpd-subkegiatan-opd', $data->id) }}" class="btn btn-sm btn-success"><i class="fas fa-clipboard-check btn-icon-prepend mr-2"></i>Sub-Kegiatan</a>
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