@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Form Ubah User</h4>
</div>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            @if(Auth::user()->hak_akses == "ADMIN")
            <form action="{{ route('simpan-user', $user->id) }}" method="POST" enctype="multipart/form-data">
            @elseif(Auth::user()->hak_akses == "BIDANG")
            <form action="{{ route('simpan-user-bidang', $user->id) }}" method="POST" enctype="multipart/form-data">
            @else
            <form action="{{ route('simpan-user-opd', $user->id) }}" method="POST" enctype="multipart/form-data">
            @endif
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center">
                            <h3 class="text-dark font-weight-bold mb-2">Ubah Data User</h3>
                            <h5 class="font-weight-normal mb-2">Perbaharui data user pada form berikut dengan benar :</h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold">A. Data User </h4>
                            <div class="row">
                                <div class="form-group row col-12">
                                    <label class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{ $user->username }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group row col-6">
                                    <label class="col-sm-4 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama" value="{{ $user->nama }}" placeholder="Isikan nama Pejabat">
                                    </div>
                                </div>
                                <div class="form-group row col-6">
                                    <label class="col-sm-3 col-form-label">NIP</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nip" value="{{ $user->nip }}" placeholder="Isikan NIP Pejabat">
                                    </div>
                                </div>
                            </div>
                            <div class="row">    
                                <div class="form-group row col-12">
                                    <label class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="jabatan" value="{{ $user->jabatan }}" placeholder="Isikan Jabatan">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group row col-12">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alamat" value="{{ $user->alamat }}" placeholder="Isikan Alamat Pejabat">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group row col-12">
                                    <label class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="mt-2 py-4 float-right">
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    @if(Auth::user()->hak_akses == 'ADMIN')
                    <a href="{{ route('skpd', 'user') }}" class="btn btn-light">Batal</a>
                    @elseif(Auth::user()->hak_akses == 'BIDANG')
                    <a href="{{ url('/dashboard-bidang') }}" class="btn btn-light">Batal</a>
                    @else
                    <a href="{{ url('/dashboard-opd') }}" class="btn btn-light">Batal</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>

@endsection