@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Form Tambah RKPD</h4>
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
                            <h3 class="text-dark font-weight-bold mb-2">Tambah Data RKPD</h3>
                            <h5 class="font-weight-normal mb-2">Isikan form berikut dengan benar :</h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Program</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="Program Penunjang Urusan Pemerintahan Daerah Kabupaten / Kota" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kegiatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="Perencanaan, Pengganggaran, dan Evaluasi Kinerja Perangkat Daerah" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Sub-Kegiatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="Perencanaan, Pengganggaran, dan Evaluasi Kinerja Perangkat Daerah" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Output</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="Isi output RKPD">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Satuan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Capaian 2017</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Anggaran 2017</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 py-4 float-right">
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <button class="btn btn-light">Batal</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection