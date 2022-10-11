@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Data RPJM</h4>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <form action="{{ route('rpjm-simpan', $data->id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center">
                            <h3 class="text-dark font-weight-bold mb-2">Edit Data RPJM</h3>
                            <h5 class="font-weight-normal mb-2">Isikan form berikut dengan benar :</h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold">A. Ringkasan Kegiatan </h4>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Program</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$data->nama_program}}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Outcome</label>
                                <div class="col-sm-9">
                                    <input type="text" name="outcome" value="{{$data->indikator_program}}" class="form-control" placeholder="Isikan outcome dari program diatas">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-dark font-weight-bold mb-3">B. Target</h4>
                                    <p>Inputan desimal menggunakan tanda (,) koma</p>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Satuan</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$data->satuan_target_program}}" name="satuan" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Target 2022</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$data->target_program2}}" name="target2" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Target 2023</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$data->target_program3}}" name="target3" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Target 2024</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$data->target_program4}}" name="target4" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Target 2025</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$data->target_program5}}" name="target5" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Target 2026</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$data->target_program6}}" name="target6" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-dark font-weight-bold mb-3">C. Anggaran</h4>
                                    <p>Inputan desimal menggunakan tanda (,) koma</p>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran 2022</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$data->pagu_indikatif_program2}}" name="pagu2" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran 2023</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$data->pagu_indikatif_program3}}" name="pagu3" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran 2024</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$data->pagu_indikatif_program4}}" name="pagu4" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran 2025</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$data->pagu_indikatif_program5}}" name="pagu5" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran 2026</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$data->pagu_indikatif_program6}}" name="pagu6" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 py-4 float-right">
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <a href="{{ url('skpd/rpjmd') }}" class="btn btn-light">Batal</a>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection