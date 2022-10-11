@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Sasaran</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Sasaran</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar Sasaran</li>
    </ul>
  </div>
  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
  @elseif ($message = Session::get('warning'))
  <div class="alert alert-warning alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
  @elseif ($message = Session::get('danger'))
  <div class="alert alert-danger alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
  @endif
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
              <div class="d-lg-flex align-items-center">
                <h3 class="text-dark font-weight-bold mb-2">Daftar Sasaran : {{ $nama }}</h3>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center justify-content-md-end">
                  <a href="{{ route('sasaran-create-opd') }}" class="btn btn-success">Tambah Sasaran Baru</a>
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
                  <th><b>Sasaran</b></th>
                  <th><b>Jumlah Program</b></th>
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $v_data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$v_data->sasaran}}</td>
                  <td>{{ \App\DetSasaran::where(['id' => $v_data->id])->count() }}</td>
                  <td>
                    <a href="{{ route('sasaran-edit-opd', $v_data->id) }}" class="btn btn-warning">Ubah</a>
                    <a href="{{ route('sasaran-delete-opd', $v_data->id) }}" class="btn btn-danger" 
                      onclick="if (confirm('Hapus Sasaran Terpilih?')){
                          return true;
                          } else {
                              event.stopPropagation(); event.preventDefault();
                      };"><i class="mdi mdi-delete"></i> Hapus</a>
                    <a href="{{ route('sasaran-program-opd', $v_data->id) }}" class="btn btn-primary">Tambah</a>
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