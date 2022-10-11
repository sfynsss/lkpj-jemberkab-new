@extends('layouts.app')

@section('content')
@include('pages.admin.master.skpd.import_skpd')
@include('pages.admin.master.skpd.tambah_skpd')
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
      <li class="nav-item">{{ strtoupper($segment) }}</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar SKPD</li>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-sm-6">
                <div class="d-lg-flex align-items-center">
                  <h4>Daftar SKPD</h4>
                </div>
              </div>
              @if($segment == "all")
              <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end">
                  <div class="pr-1 mb-3 mb-xl-0">
                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal_import">
                      Import Data SKPD
                      <i class="mdi mdi-file-document btn-icon-append"></i>                          
                    </a>
                  </div>
                  <div class="pr-1 mb-3 mb-xl-0">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal_tambah" onclick="tambah();">
                      Tambah Data SKPD
                      <i class="mdi mdi-file-document btn-icon-append"></i>                          
                    </a>
                  </div>
                </div>
              </div>
              @endif
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="basic-datatables" class="display table table-striped table-hover" >
                <thead>
                  <tr>
                    <th><b>No.</b></th>
                    <th><b>Kode</b></th>
                    <th><b>Nama SKPD</b></th>
                    @if($segment == "rpjmd")
                    <th><b>Jumlah Program</b></th>
                    @elseif($segment == "renstra" || $segment == "rkpd")
                    <th><b>Jumlah Program</b></th>
                    @elseif($segment == 'sippd')
                    <th><b>Jml Program</b></th>
                    <th><b>Jml Kegiatan</b></th>
                    <th><b>Jml Sub-Kegiatan</b></th>
                    @endif
                    <th><b>Aksi</b></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $i => $data)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$data->kode_skpd}}</td>
                    <td>{{$data->nama_skpd}}</td>
                    @if($segment == "rpjmd")
                    <td>{{ \App\Program::where(['id_skpd' => Auth::user()->id_skpd])->count() }}</td>
                    @elseif($segment == "renstra" || $segment == "rkpd")
                    <td>{{ \App\Program::where(['id_skpd' => Auth::user()->id_skpd])->count() }}</td>
                    @elseif($segment == "sippd")
                    <td>{{ \App\Program::where(['id_skpd' => Auth::user()->id_skpd])->count() }} </td>
                    <td>{{ \App\Kegiatan::where(['id_skpd' => Auth::user()->id_skpd])->count() }} </td>
                    <td>{{ \App\SubKegiatan::join('kegiatan', 'sub_kegiatan.id_kegiatan', 'kegiatan.id')->where('kegiatan.id_skpd', Auth::user()->id_skpd)->count() }}</td>
                    @endif
                    <td>
                      @if($segment == "all")
                      <a href="#" class="btn btn-sm btn-warning"  data-toggle="modal" data-target="#modal_tambah" onclick="ubah('{{$data->id}}', '{{$data->kode_skpd}}', '{{$data->nama_skpd}}');"><i class="fas fa-pen btn-icon-prepend"></i></a>&nbsp;
                      <a href="{{ route('hapus-skpd', $data->id) }}" class="btn btn-sm btn-danger" onclick="if (confirm('Apakah Anda yakin untuk menghapus?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fas fa-trash btn-icon-prepend"></i></a>
                      @elseif($segment == "rpjmd")
                      <a href="{{ route('rpjmd-program', $data->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-desktop btn-icon-prepend mr-2"></i> Daftar Program</a>
                      @elseif($segment == "renstra")
                      <a href="{{ route('renstra-program', $data->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-desktop btn-icon-prepend mr-2"></i> Daftar Program</a>
                      @elseif($segment == "rkpd")
                      <a href="{{ route('rkpd-program', $data->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-desktop btn-icon-prepend mr-2"></i> Daftar Program</a>
                      @elseif($segment == "sippd")
                      @if(Auth::user()->hak_akses == 'OPD')
                      <a href="{{ route('sippd-subkegiatan', $data->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-desktop btn-icon-prepend mr-2"></i> Daftar Sub-Kegiatan</a>
                      @else
                      <a href="{{ route('sippd-program', $data->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-desktop btn-icon-prepend mr-2"></i> Daftar Program</a>
                      @endif
                      @elseif($segment == "program")
                      <a href="{{ route('program', $data->id) }}" class="btn btn-sm btn-primary"><i class="mdi mdi-file-check btn-icon-prepend"></i> Daftar Program</a>
                      @elseif($segment == "user")
                      <a href="{{ route('edit-user', $data->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-pen btn-icon-prepend"></i> Edit User</a>
                      @elseif($segment == "kegiatan")
                      <a href="{{ route('program-kegiatan', $data->id) }}" class="btn btn-sm btn-primary"><i class="mdi mdi-file-check btn-icon-prepend"></i> Daftar Program</a>
                      @elseif($segment == "data")
                      <a href="{{ route('data-upload', $data->id) }}" class="btn btn-sm btn-primary"><i class="mdi mdi-file-check btn-icon-prepend"></i> Data File Upload</a>
                      @endif
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

  @section('script')
  <script>
    function tambah() {
      $('#form-skpd').attr('action', '{{route('simpan-skpd')}}');
      $("#kode_skpd").val("");
      $("#nama_skpd").val("");
    }

    function ubah($id_skpd, $kode_skpd, $nama_skpd) {
      $('#form-skpd').attr('action', '{{route('ubah-skpd')}}');
      $("#id_skpd").val($id_skpd);
      $("#kode_skpd").val($kode_skpd);
      $("#nama_skpd").val($nama_skpd);
    }
  </script>
  @endsection