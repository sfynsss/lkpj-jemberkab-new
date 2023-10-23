@extends('layouts.app')

@section('content')

@include('includes.alert')
<div class="row">
  <div class="col-12">
    <div class="box">
      <div class="box-body bg-img" style="background-image: url(../images/bg-5.png);" data-overlay-light="9">
        <div class="d-lg-flex align-items-center justify-content-between">
          <div class="d-md-flex align-items-center mb-30 mb-lg-0 w-p100">
            <img src="{{ asset('LKPJ/images/svg-icon/color-svg/custom-14.svg') }}" class="img-fluid max-w-150" alt="" />
            <div class="ms-30">
              <h3 class="mb-10"><b>Bab. I Indikator Kinerja</b></h3>
            </div>
          </div>
        </div>							
      </div>
    </div>
  </div>
</div>

<div class="row mt-2">
  <div class="col-lg-3 col-12">
    <a href="#" class="box pull-up">
      <div class="box-body">
        <div class="d-flex align-items-center">
          <div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">											
            <span class="fs-30 icon-Bulb1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
          </div>
          <div class="ms-15">											
            <h5 class="mb-0">Triwulan I</h5>
            <p class="text-fade fs-12 mb-0">Kinerja</p>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-between mt-20">
          <div class="w-p70">
            <div class="progress progress-sm mb-0">
              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
              </div>
            </div>
          </div>
          <div>
            <div>100%</div>
          </div>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-3 col-12">
    <a href="#" class="box pull-up">
      <div class="box-body">
        <div class="d-flex align-items-center">
          <div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">											
            <span class="fs-30 icon-Pen-tool-vector"><span class="path1"></span><span class="path2"></span></span>
          </div>
          <div class="ms-15">											
            <h5 class="mb-0">Triwulan II</h5>
            <p class="text-fade fs-12 mb-0">Kinerja</p>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-between mt-20">
          <div class="w-p70">
            <div class="progress progress-sm mb-0">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
              </div>
            </div>
          </div>
          <div>
            <div>100%</div>
          </div>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-3 col-12">
    <a href="#" class="box pull-up">
      <div class="box-body">
        <div class="d-flex align-items-center">
          <div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">											
            <span class="fs-30 icon-Chat-check"><span class="path1"></span><span class="path2"></span></span>
          </div>
          <div class="ms-15">											
            <h5 class="mb-0">Triwulan III</h5>
            <p class="text-fade fs-12 mb-0">Kinerja</p>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-between mt-20">
          <div class="w-p70">
            <div class="progress progress-sm mb-0">
              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
              </div>
            </div>
          </div>
          <div>
            <div>100%</div>
          </div>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-3 col-12">
    <a href="#" class="box pull-up">
      <div class="box-body">
        <div class="d-flex align-items-center">
          <div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">											
            <span class="fs-30 icon-Chat-check"><span class="path1"></span><span class="path2"></span></span>
          </div>
          <div class="ms-15">											
            <h5 class="mb-0">Triwulan IV</h5>
            <p class="text-fade fs-12 mb-0">Kinerja</p>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-between mt-20">
          <div class="w-p70">
            <div class="progress progress-sm mb-0">
              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
              </div>
            </div>
          </div>
          <div>
            <div>100%</div>
          </div>
        </div>
      </div>
    </a>
  </div>
</div>

<div class="box">
  <div class="box-header with-border">						
    <h4 class="box-title"><b>Indikator Utama</b></h4>
    <h6 class="box-subtitle">SKPD : {{ $nama_skpd->nama_skpd }}</h6>
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="bg-gradient-primary-dark text-white text-center">
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
              <button type="button" class="waves-effect waves-light btn btn-primary-light btn-circle" data-bs-toggle="modal" data-bs-target="#modalTambah" onclick="ubahData('{{ $indikator->id }}', '{{ $indikator->indikator }}', '{{ $indikator->id_urusan }}')"><span class="fa fa-plus-circle fs-18"><span class="path1"></span><span class="path2"></span></span></button>
              <a href="{{ route('hapus-indikator', $indikator->id) }}" class="waves-effect waves-light btn btn-danger-light btn-circle" onclick="if (confirm('Apakah Anda yakin untuk menghapus?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><span class="fa fa-trash fs-18"><span class="path1"></span><span class="path2"></span></span></a>
            </td>
            @endif
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="modal modal-left fade" id="modalTambah" tabindex="-1">
  <div class="modal-dialog">
     <form class="modal-content" action="{{ route('tambah-indikator') }}" method="POST">
        @csrf
        <div class="modal-header">
           <h5 class="modal-title">Tambah Indikator</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
            <textarea type="text" class="form-control" name="nama_indikator" id="nama_indikator" placeholder="Isikan nama indikator" rows="8" required></textarea>
          </div>
        </div>
        <div class="modal-footer modal-footer-uniform">
           <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Tutup</button>
           <button type="submit" class="btn btn-primary float-end"><i class="ti-save-alt"></i> Simpan</button>
        </div>
     </form>
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