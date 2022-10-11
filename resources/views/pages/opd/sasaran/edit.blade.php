@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Form Ubah Sasaran</h4>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <form action="{{ route('sasaran-update-opd') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center">
                            <h3 class="text-dark font-weight-bold mb-2">Ubah Data Sasaran</h3>
                            <h5 class="font-weight-normal mb-2">Isikan sasaran pada form berikut dengan benar :</h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold">A. Sasaran & Indikator</h4>
                            <input type="text" name="id" value="{{ $data->id }}" class="form-control" hidden >
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sasaran</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" rows="5" name="sasaran" placeholder="Isikan sasaran">{{ $data->sasaran }}</textarea>
                                    @error('sasaran')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Indikator Sasaran</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="indikator_sasaran" placeholder="Tulis indikator kegiatan" value="{{ $data->indikator_sasaran }}">
                                    @error('indikator_sasaran')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold mb-3">B. Target Kinerja Sasaran</h4>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Tahun 2021</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" name="target_kinerja_sasaran1" value="{{ $data->target_kinerja_sasaran1 }}" placeholder="Isikan target kinerja sasaran tahun 2021" step=".1">
                                    @error('target_kinerja_sasaran1')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Tahun 2022</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" name="target_kinerja_sasaran2" value="{{ $data->target_kinerja_sasaran2 }}" placeholder="Isikan target kinerja sasaran tahun 2022" step=".1">
                                    @error('target_kinerja_sasaran2')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Tahun 2023</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" name="target_kinerja_sasaran3" value="{{ $data->target_kinerja_sasaran3 }}" placeholder="Isikan target kinerja sasaran tahun 2023" step=".1">
                                    @error('target_kinerja_sasaran3')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Tahun 2024</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" name="target_kinerja_sasaran4" value="{{ $data->target_kinerja_sasaran4 }}" placeholder="Isikan target kinerja sasaran tahun 2024" step=".1">
                                    @error('target_kinerja_sasaran4')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Tahun 2025</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" name="target_kinerja_sasaran5" value="{{ $data->target_kinerja_sasaran5 }}" placeholder="Isikan target kinerja sasaran tahun 2025" step=".1">
                                    @error('target_kinerja_sasaran5')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Tahun 2026</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" name="target_kinerja_sasaran6" value="{{ $data->target_kinerja_sasaran6 }}" placeholder="Isikan target kinerja sasaran tahun 2026" step=".1">
                                    @error('target_kinerja_sasaran6')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold mb-3">C. Target Realisasi Sasaran Tahun 2021</h4>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Triwulan 1</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" name="realisasi_sasaran_triwulan1" value="{{ $data->realisasi_sasaran_triwulan1 }}" placeholder="Isikan target kinerja sasaran triwulan 1" step=".1">
                                    @error('realisasi_sasaran_triwulan1')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Triwulan 2</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" name="realisasi_sasaran_triwulan2" value="{{ $data->realisasi_sasaran_triwulan2 }}" placeholder="Isikan target kinerja sasaran triwulan 2" step=".1">
                                    @error('realisasi_sasaran_triwulan2')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Triwulan 3</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" name="realisasi_sasaran_triwulan3" value="{{ $data->realisasi_sasaran_triwulan3 }}" placeholder="Isikan target kinerja sasaran triwulan 3" step=".1">
                                    @error('realisasi_sasaran_triwulan3')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Triwulan 4</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" name="realisasi_sasaran_triwulan4" value="{{ $data->realisasi_sasaran_triwulan4 }}" placeholder="Isikan target kinerja sasaran triwulan 4" step=".1">
                                    @error('realisasi_sasaran_triwulan4')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold">D. Penjelasan Sasaran</h4>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sasaran</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" rows="5" name="penjelasan_sasaran" placeholder="Tulis penjelasan sasaran">{{ $data->penjelasan_sasaran }}</textarea>
                                    @error('penjelasan_sasaran')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 py-4 float-right">
                        <a href="{{ url()->previous() }}" class="btn btn-light">Batal</a>
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection