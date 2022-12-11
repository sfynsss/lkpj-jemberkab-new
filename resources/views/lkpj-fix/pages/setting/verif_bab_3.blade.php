@extends('lkpj-fix.layouts.app')

@section('content')

@if (substr(Cookie::get('tahun_aktif'), 3) == 2)

@include('lkpj-fix.includes_new.alert')

<div class="row">
  <div class="col-12">
    <div class="box">
      <div class="box-body bg-img" style="background-image: url(../images/bg-5.png);" data-overlay-light="9">
        <div class="d-lg-flex align-items-center justify-content-between">
          <div class="d-md-flex align-items-center mb-30 mb-lg-0 w-p100">
            <img src="{{ asset('LKPJ/images/svg-icon/color-svg/custom-14.svg') }}" class="img-fluid max-w-150" alt="" />
            <div class="ms-30">
              <h3 class="mb-10"><b>Setting LKPJ</b></h3>
            </div>
          </div>
        </div>							
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="box">
      <div class="box-header with-border">						
        <h4 class="box-title"><b>Pengaturan Verifikasi BAB III OPD</b></h4>
        <h6 class="box-subtitle">Pilih status keaktifan dibawah :</h6>
      </div>
      <div class="box-body">
        <form class="forms-sample" method="POST" action="{{ route('update-verif-bab3') }}">
          @csrf
          <div class="form-group">
            <div class="demo-radio-button">
              <input type="radio" id="radio_30" name="kode_sts" value="1" class="with-gap radio-col-success" @if ($data == 1) checked @endif />
              <label for="radio_30">Aktif</label>					
              <input type="radio" id="radio_32" name="kode_sts" value="0" class="with-gap radio-col-warning" @if ($data == 0) checked @endif />
              <label for="radio_32">Non Aktif</label>
          </div>
          <button type="submit" class="btn btn-success me-2">Simpan Perubahan</button>
          <button class="btn btn-light">Batal</button>
        </form>
      </div>
    </div>
  </div>
</div>

@else

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Pengaturan Verifikasi BAB III OPD</h4>
          <div class="row">
            <div class="col-12">
                <form class="forms-sample" method="POST" action="{{ route('update-verif-bab3') }}">
                    @csrf
                    <div class="form-group">
                        <fieldset class="radio">
                            <label for="radio1">
                                <input type="radio" name="kode_sts" value="1" @if ($data == 1) checked @endif > Aktif
                            </label>
                        </fieldset>
                        <fieldset class="radio">
                            <label>
                                <input type="radio" name="kode_sts" value="0" @if ($data == 0) checked @endif> Non Aktif
                            </label>
                        </fieldset>
                    </div>
                    <button type="submit" class="btn btn-success me-2">Simpan Perubahan</button>
                    <button class="btn btn-light">Batal</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endif

@endsection