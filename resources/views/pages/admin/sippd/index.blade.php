@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Daftar SKPD</h4>
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
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pilih SKPD</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover" >
              <thead>
                <tr>
                  <th><b>No.</b></th>
                  <th><b>Kode</b></th>
                  <th><b>Nama SKPD</b></th>
                  <th><b>Jml Program</b></th>
                  <th><b>Jml Kegiatan</b></th>
                  <th><b>Jml Sub-Kegiatan</b></th>
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                @for ($i = 1; $i < 74; $i++)
                <tr>
                  <td>{{ $i }}</td>
                  <td>{{ \App\Skpd::where(['id' => $i])->first()->kode_skpd }} </td>
                  <td>{{ \App\Skpd::where(['id' => $i])->first()->nama_skpd }} </td>
                  <td>{{ \App\Program::where(['id_skpd' => $i])->count() }} </td>
                  <td>{{ \App\Kegiatan::where(['id_skpd' => $i])->count() }} </td>
                  <td>{{ \App\SubKegiatan::join('kegiatan', 'sub_kegiatan.id_kegiatan', 'kegiatan.id')->where('kegiatan.id_skpd', $i)->count() }}</td>
                  <td><a href="{{ route('sippd-program', $i) }}" class="btn btn-primary"><i class="fas fa-desktop btn-icon-prepend mr-2"></i>Program</td>
                </tr>
                @endfor
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection