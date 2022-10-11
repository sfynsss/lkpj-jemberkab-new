@extends('lkpj-fix.layouts.app')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">
          <div class="row">
            <div class="col">
              Indikator Utama {{ ucwords(strtolower($nama_skpd->nama_skpd)) }}
            </div>
            <div class="col-auto">
              @if (Auth::user()->hak_akses == 'ADMIN')
              <a type="button" class="btn btn-success text-white" data-toggle="modal" data-target="#modalTambah" onclick="tambahData();">Tambah Data</a>
              @endif
            </div>
          </div>
        </h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
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
                      <a href="{{ route('hapus-indikator-utama', $data->id) }}" class="btn btn-danger">Hapus</a>
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