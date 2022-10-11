@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Form Tambah Data Sasaran</h4>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <form action="#!" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center">
                            <h3 class="text-dark font-weight-bold mb-2">Tambah Data Sasaran</h3>
                            <h5 class="font-weight-normal mb-2">Isikan sub-kegiatan pada form berikut dengan benar :</h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold">A. Sasaran dan Indikator</h4>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Sasaran</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" placeholder="Isikan sasaran"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Indikator</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Isikan indikator sasaran">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-dark font-weight-bold mb-3">B. Target Kinerja Sasaran</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Target 2017</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Target 2018</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Target 2019</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Target 2020</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 py-4 float-right">
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <a href="{{ route('sasaran') }}" class="btn btn-light">Batal</a>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection