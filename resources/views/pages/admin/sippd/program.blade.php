@extends('layouts.app')

@section('content')
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Program</h4>
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
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Daftar Program dari SKPD : <b>{{ $nama_skpd->nama_skpd }}</b></h4>
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
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                @foreach($program as $v_program)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $v_program->kode_program }}</td>
                    <td class="text-left">{{ $v_program->nama_program }}</td>
                    <td class="text-left">{{ $v_program->indikator_program }}</td>
                    <td><a href="{{ route('sippd-kegiatan', $v_program->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-file-alt btn-icon-prepend mr-2"></i>Kegiatan</td>
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