@extends('lkpj-fix.layouts.app')

@section('content')

<div class="row">
  <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Triwulan I</h4>
        <div class="d-flex justify-content-between">
          <p>Kinerja</p>
          <p>40 %</p>
        </div>
        <div class="progress progress-md">
          <div class="progress-bar bg-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Triwulan II</h4>                      
        <div class="d-flex justify-content-between">
          <p>Kinerja</p>
          <p>120 %</p>
        </div>
        <div class="progress progress-md">
          <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Triwulan III</h4>
        <div class="d-flex justify-content-between">
          <p>Kinerja</p>
          <p>54 %</p>
        </div>
        <div class="progress progress-md">
          <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Triwulan IV</h4>
        <div class="d-flex justify-content-between">
          <p>Kinerja</p>
          <p>143 %</p>
        </div>
        <div class="progress progress-md">
          <div class="progress-bar bg-warning w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">
          <div class="row">
            <div class="col">
              Indikator Kinerja {{ $nama_skpd->nama_skpd }}
            </div>
            <div class="col-auto">
              @if (Auth::user()->hak_akses == 'ADMIN')
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalTambah" onclick="tambahData();">Tambah Data</button>
              @endif
            </div>
          </div>
        </h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                  <tr class="text-center">
                    <th style="width: 25px">No</th>
                    <th style="width: 600px">Indikator</th>
                    @if (Auth::user()->hak_akses == 'ADMIN')
                    <th>Aksi</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i => $indikator)
                  <tr>
                    <td class="text-center">{{ $i+1 }}</td>
                    <td style="width: 600px">{{ $indikator->indikator }}</td>
                    @if (Auth::user()->hak_akses == 'ADMIN')
                    <td class="text-center">
                      <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#modalTambah" onclick="ubahData('{{ $indikator->id }}', '{{ $indikator->indikator }}', '{{ $indikator->id_urusan }}')">Ubah</button>
                      <a href="{{ route('hapus-indikator', $indikator->id) }}" class="btn btn-danger" onclick="if (confirm('Apakah Anda yakin untuk menghapus?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Hapus</a>
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
        <form action="{{ route('tambah-indikator') }}" method="POST">
          @csrf
          <input type="text" hidden id="id" name="id" value="">
          <input type="text" hidden name="id_skpd" value="{{ $nama_skpd->id }}">
          <div class="form-group">
            <label for="nama_indikator">Nama SKPD</label>
            <input type="text" class="form-control" disabled placeholder="Isikan nama indikator" value="{{ $nama_skpd->nama_skpd }}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Urusan</label>
            <select class="form-control" id="urusan" name="urusan"required>
              <option  selected="true" disabled="disabled">Pilih Urusan</option>
              @foreach ($urusan as $urusan)
              <option value="{{ $urusan->id }}">{{ $urusan->nama_urusan }}</option>
              @endforeach
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
  $(document).ready(function() {
    
  });

  function tambahData() {
    $("#id").val('');
    $("#nama_indikator").val('');
  }

  function ubahData($a, $b, $c) {
    $("#id").val($a);
    $("#nama_indikator").val($b);
    $("#urusan").val($c).change();
  }
  
  function setKegiatan() {
    let program = $('select[name=program]').val();
    $('#kegiatan').empty();
    $('#kegiatan').append('<option  selected="true" disabled="disabled">Pilih Kegiatan</option>');
    $('#sub_kegiatan').empty();
    $('#sub_kegiatan').append('<option  selected="true" disabled="disabled">Pilih Sub-Kegiatan</option>');
    $.ajax({
      method: 'GET',
      url: '/getDataKegiatan/'+program,
      success: function (result) {
        $.each( result['data'], function( key, val ) {
          console.log(val.nama_kegiatan);
            $('#kegiatan').append('<option value='+val.id+'>'+val.nama_kegiatan+'</option>');
        });
        
      } 
    });
  }

  function setSubKegiatan() {
    let kegiatan = $('select[name=kegiatan]').val();
    $('#sub_kegiatan').empty();
    $('#sub_kegiatan').append('<option  selected="true" disabled="disabled">Pilih Sub-Kegiatan</option>');
    
    $.ajax({
      method: 'GET',
      url: '/getDataSubKegiatan/'+kegiatan,
      success: function (result) {
        $.each( result['data'], function( key, val ) {
          // console.log(val.nama_kegiatan);
            $('#sub_kegiatan').append('<option value='+val.id+'>'+val.nama_sub_keg+'</option>');
        });
        
      } 
    });
  }
</script>
@endsection