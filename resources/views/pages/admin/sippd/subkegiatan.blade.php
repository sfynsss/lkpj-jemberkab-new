@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Sub - Kegiatan</h4>
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
      <li class="nav-item">Program</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Kegiatan</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Sub - Kegiatan</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
              <div class="d-lg-flex align-items-center">
                @if(Auth::user()->hak_akses == 'OPD')
                <h3 class="text-dark font-weight-bold mb-2">Daftar Subkegiatan</h3>
                @else
                <h3 class="text-dark font-weight-bold mb-2">Kegiatan : {{$kegiatan->nama_kegiatan}}</h3>
                @endif
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
                  <th><b>Nama Sub-Kegiatan</b></th>
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                @php($i = 1)
                @if(Auth::user()->hak_akses == 'OPD')
                @foreach($sub_keg as $program)
                @foreach($program->Kegiatan as $kegiatan)
                @foreach($kegiatan->SubKegiatan as $subkeg)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $subkeg->kode_sub_keg }}</td>
                  <td class="text-left">{{ $subkeg->nama_sub_keg }}</td>
                  <td>
                    <a href="{{ route('sippd-edit', $subkeg->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-pen btn-icon-prepend mr-2"></i>Ubah Data</a>
                  </td>
                </tr>
                @endforeach
                @endforeach
                @endforeach
                @else
                @foreach($sub_keg as $v_sub_keg)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $v_sub_keg->kode_sub_keg }}</td>
                  <td class="text-left">{{ $v_sub_keg->nama_sub_keg }}</td>
                  <td>
                    <a href="{{ route('sippd-edit', $v_sub_keg->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-pen btn-icon-prepend mr-2"></i>Ubah Data</a>
                  </td>
                </tr>
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection