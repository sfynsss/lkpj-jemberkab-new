@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="box">
        <div class="box-body bg-img" style="background-image: url(../images/bg-5.png);" data-overlay-light="9">
          <div class="d-lg-flex align-items-center justify-content-between">
            <div class="d-md-flex align-items-center mb-30 mb-lg-0 w-p100">
              <img src="{{ asset('LKPJ/images/svg-icon/color-svg/custom-14.svg') }}" class="img-fluid max-w-150" alt="" />
              <div class="ms-30">
                <h3 class="mb-10"><b>Bab. III Ubah Data Capaian</b></h3>
              </div>
            </div>
          </div>							
        </div>
      </div>
    </div>
  </div>
  
  <div class="row mt-2">			  
      <div class="col-12">
              <div class="box">
                  <div class="box-header with-border">						
                      <h4 class="box-title">
                          <b>Ubah Data Capaian</b>
                          <small class="subtitle">Isikan data berikut dengan lengkap dan sesuai</small>
                      </h4>
                  </div>
                  <form class="forms-sample" method="POST" action="{{ route('edit-indikator-utama') }}">
                      @csrf
                      <input type="text" id="id" name="id" value="{{ $data->id }}" hidden>
                      <input type="text" id="id_skpd" name="id_skpd" value="{{ $data->id_skpd }}" hidden>
                      <div class="box-body">
                          <div class="form-group">
                              <label class="form-label">Indikator</label>
                              <select class="form-control" id="indikator" name="indikator" disabled>
                                  <option value="{{ $data->id }}">{{ $data->indikator_utama }}</option>
                              </select>
                          </div>
                          <div class="row">
                              <div class="col-md-2">
                              <div class="form-group">
                                  <label class="form-label">Satuan</label>
                                  <input type="text" class="form-control" name="satuan" id="satuan" value="{{ $data->satuan }}" placeholder="Tulis satuan capaian" @if (Auth::user()->hak_akses != 'ADMIN') readonly @endif>
                              </div>
                              </div>
                              <div class="col-md-2">
                              <div class="form-group">
                                  <label class="form-label">Capaian 2021</label>
                                  <input type="text" class="form-control" name="capaian_1" id="capaian_1" value="{{ $data->capaian_1 }}" placeholder="Isikan capaian 2021">
                              </div>
                              </div>
                              <div class="col-md-2">
                              <div class="form-group">
                                  <label class="form-label">Capaian 2022</label>
                                  <input type="text" class="form-control" name="capaian_2" id="capaian_2" value="{{ $data->capaian_2 }}" placeholder="Isikan capaian 2022">
                              </div>
                              </div>
                              <div class="col-md-2">
                              <div class="form-group">
                                  <label class="form-label">Capaian 2023</label>
                                  <input type="text" class="form-control" name="capaian_3" id="capaian_3" value="{{ $data->capaian_3 }}" placeholder="Isikan capaian 2023">
                              </div>
                              </div>
                              <div class="col-md-2">
                              <div class="form-group">
                                  <label class="form-label">Capaian 2024</label>
                                  <input type="text" class="form-control" name="capaian_4" id="capaian_4" value="{{ $data->capaian_4 }}" placeholder="Isikan capaian 2024">
                              </div>
                              </div>
                              <div class="col-md-2">
                              <div class="form-group">
                                  <label class="form-label">Capaian 2025</label>
                                  <input type="text" class="form-control" name="capaian_5" id="capaian_5" value="{{ $data->capaian_5 }}" placeholder="Isikan capaian 2025">
                              </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="form-label">Keterangan</label>
                              <textarea class="form-control" name="keterangan" placeholder="Tulis keterangan capaian">{{ $data->keterangan }}</textarea>
                          </div>
                      </div>
                      <div class="box-footer">
                          <a href="{{ url()->previous() }}" class="btn btn-warning me-1">
                              <i class="ti-trash"></i> Kembali
                          </a>
                          <button type="submit" class="btn btn-primary">
                              <i class="ti-save-alt"></i> Simpan
                          </button>
                      </div> 
                  </form>
              </div>
      </div>
  </div>

@endsection