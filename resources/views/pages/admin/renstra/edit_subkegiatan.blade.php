@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Form Ubah Subkegiatan RENSTRA</h4>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <form action="{{ route('renstra-simpan-subkegiatan', $data->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center">
                            <h3 class="text-dark font-weight-bold mb-2">Tambah Ubah Subkegiatan RENSTRA</h3>
                            <h5 class="font-weight-normal mb-2">Isikan form berikut dengan benar :</h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold">A. Ringkasan Kegiatan </h4>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Program</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $kegiatan->nama_program }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kegiatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $kegiatan->nama_kegiatan }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Sub-Kegiatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $data->nama_sub_keg }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Output</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="outcome" value="{{ $data->indikator_sub_keg }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-dark font-weight-bold mb-3">B. Capaian</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Satuan</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="satuan" value="{{ $data->satuan_target_sub_keg_1 }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Target 2022</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="target2" value="{{ $data->target_sub_keg_2 }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Target 2023</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="target3" value="{{ $data->target_sub_keg_3 }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Target 2024</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="target4" value="{{ $data->target_sub_keg_4 }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Target 2025</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="target5" value="{{ $data->target_sub_keg_5 }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Target 2026</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="target6" value="{{ $data->target_sub_keg_6 }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-dark font-weight-bold mb-3">C. Anggaran</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran 2022</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="anggaran2" value="{{ $data->pagu_indikatif_sub_keg_2 }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran 2023</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="anggaran3" value="{{ $data->pagu_indikatif_sub_keg_3 }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran 2024</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="anggaran4" value="{{ $data->pagu_indikatif_sub_keg_4 }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran 2025</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="anggaran5" value="{{ $data->pagu_indikatif_sub_keg_5 }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran 2026</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="anggaran6" value="{{ $data->pagu_indikatif_sub_keg_6 }}" class="form-control">
                                        </div>
                                    </div>
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