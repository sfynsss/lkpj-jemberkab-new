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
              <h3 class="mb-10"><b>Bab. III Indikator Utama</b></h3>
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
        <h4 class="box-title"><b>Indikator Utama</b></h4>
        <h6 class="box-subtitle">SKPD : {{ ucwords(strtolower($nama_skpd->nama_skpd)) }}</h6>
        @if (Auth::user()->hak_akses == 'ADMIN')
        <a type="button" class="btn bg-gradient-success mt-2" data-bs-toggle="modal" data-bs-target="#modalTambah" onclick="tambahData();">Tambah Data</a>
        @endif
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-bordered no-wrap">
                <thead class="bg-gradient-primary-dark text-white text-center">
                  <tr>
                    <th class="text-center">No</th>
                    <th>Indikator Utama</th>
                    @if (Auth::user()->hak_akses == 'ADMIN')
                    <th class="text-center">Aksi</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i => $data)
                  <tr>
                    <td class="text-center">{{ $i+1 }}</td>
                    <td>{{ $data->indikator_utama }}</td>                      
                    @if (Auth::user()->hak_akses == 'ADMIN')
                    <td class="text-center">
                      <a href="{{ route('hapus-indikator-utama', $data->id) }}" class="btn bg-gradient-danger">Hapus</a>
                    </td>
                    @endif
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Indikator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('tambah-indikator-utama') }}" method="POST">
          @csrf
          <input type="text" hidden id="id" name="id" value="">
          <input type="text" hidden name="id_skpd" value="{{ $nama_skpd->id }}">
          <div class="form-group">
            <label for="exampleFormControlSelect2">Urusan</label>
            <select class="form-control" id="urusan" name="urusan" onchange="setBidangUrusan();" required>
              <option  selected="true" disabled="disabled">Pilih Urusan</option>
              @foreach ($urusan as $urusan)
              <option value="{{ $urusan->id }}">{{ $urusan->nama_urusan }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Bidang Urusan</label>
            <select class="form-control" id="bidang_urusan" name="bidang_urusan" required>
              <option  selected="true" disabled="disabled">Pilih Bidang Urusan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="nama_indikator">Nama Indikator</label>
            <input type="text" class="form-control" name="nama_indikator" id="nama_indikator" placeholder="Isikan nama indikator" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
@section('script')
<script>
  function setBidangUrusan() {
    let urusan = $('select[name=urusan]').val();
    let id_skpd = $('#id_skpd').val();
    $('#bidang_urusan').empty();
    $('#bidang_urusan').append('<option  selected="true" disabled="disabled">Pilih Bidang Urusan</option>');
    
    $.ajax({
      method: 'GET',
      url: '/getBidangUrusan/'+urusan,
      success: function (result) {
        $.each( result['data'], function( key, val ) {
          // console.log(val.nama_kegiatan);
          $('#bidang_urusan').append('<option value='+val.id+'>'+val.nama_bidang_urusan+'</option>');
        });
        
      } 
    });
  }
</script>
@endsection