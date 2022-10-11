@extends('layouts.app')

@section('content')
@include('pages.admin.laporan.file_tampil')
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Upload Laporan</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Laporan</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Upload Laporan</li>
    </ul>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
              <div class="d-lg-flex align-items-center">
                <h3 class="text-dark font-weight-bold mb-2">Daftar Laporan : {{ $skpd->nama_skpd }}</h3>
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
                  <th><b>Nama File</b></th>
                </tr>
              </thead>
              <tbody>
                @foreach($skpd->File as $i => $file)
                <tr>
                  <td>{{ $i+1 }}</td>
                  <td><a href="#" onclick="lihatFile('{{$file->nama_file}}');" data-toggle="modal" data-target="#lihat_file">{{ $file->nama_file }}</a></td>
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

<script>
  function lihatFile($a) {
    $('#file_tampil').attr('src', '{{ url('storage') }}/file_upload/{{ $skpd->nama_skpd }}/'+$a);
  }
</script>

@endsection