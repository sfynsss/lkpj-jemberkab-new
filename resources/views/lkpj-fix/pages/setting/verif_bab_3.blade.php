@extends('lkpj-fix.layouts.app')

@section('content')

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

@endsection