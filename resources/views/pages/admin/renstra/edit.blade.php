@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Form Ubah Kegiatan RENSTRA</h4>
</div>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <form action="{{ route('renstra-simpan', $data->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center">
                            <h3 class="text-dark font-weight-bold mb-2">Ubah Data Kegiatan RENSTRA</h3>
                            <h5 class="font-weight-normal mb-2">Isikan form berikut dengan benar :</h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold">A. Ringkasan Kegiatan </h4>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Program</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ \App\Program::where('id', $data->id_program)->pluck('nama_program')->first() }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kegiatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" disabled value="{{ $data->nama_kegiatan }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Output</label>
                                <div class="col-sm-9">
                                    <input type="text" name="outcome" class="form-control" value="{{ $data->indikator_kegiatan }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-dark font-weight-bold mb-3">B. Kinerja</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Satuan</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="satuan" class="form-control" value="{{ $data->satuan_kinerja_kegiatan }}" placeholder="Bulan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kinerja 2021</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kinerja1" class="form-control" value="{{ $data->target_kinerja1 }}" placeholder="12">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kinerja 2022</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kinerja2" class="form-control" value="{{ $data->target_kinerja2 }}" placeholder="12">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kinerja 2023</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kinerja3" class="form-control" value="{{ $data->target_kinerja3 }}" placeholder="12">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kinerja 2024</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kinerja4" class="form-control" value="{{ $data->target_kinerja4 }}" placeholder="12">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kinerja 2025</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kinerja5" class="form-control" value="{{ $data->target_kinerja5 }}" placeholder="12">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kinerja 2026</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kinerja6" class="form-control" value="{{ $data->target_kinerja6 }}" placeholder="12">
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
                                        <label class="col-sm-3 col-form-label">Anggaran 2021</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pagu1" class="form-control" value="{{ $data->pagu_indikatif_kegiatan1 }}" placeholder="7934000">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran 2022</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pagu2" class="form-control" value="{{ $data->pagu_indikatif_kegiatan2 }}" placeholder="7934000">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran 2023</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pagu3" class="form-control" value="{{ $data->pagu_indikatif_kegiatan3 }}" placeholder="7934000">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran 2024</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pagu4" class="form-control" value="{{ $data->pagu_indikatif_kegiatan4 }}" placeholder="7934000">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran 2025</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pagu5" class="form-control" value="{{ $data->pagu_indikatif_kegiatan5 }}" placeholder="7934000">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran 2026</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pagu6" class="form-control" value="{{ $data->pagu_indikatif_kegiatan6 }}" placeholder="7934000">
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