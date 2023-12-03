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
              <h3 class="mb-10"><b>Tambah Data Tugas Pembantuan</b></h3>
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
             <h4 class="box-title">Form Pengisian Data Tugas Pembantuan</h4>
          </div>
          <form method="POST" action="{{ route('tugas-pembantuan-update') }}">
             @csrf
             <input type="number" name="id_data" value="{{ $data->id }}" hidden>
             <div class="box-body">
                <div class="row">
                   <div class="col-md-12">
                      <div class="form-group">
                         <label class="form-label">Dasar Hukum</label>
                         <input type="text" class="form-control" name="dasar_hukum" value="{{ $data->dasar_hukum }}" placeholder="Tuliskan dasar hukum ..." required>
                      </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label class="form-label">Instansi Pemberi Tugas Pembantuan</label>
                         <input type="text" class="form-control" name="pemberi_tugas" value="{{ $data->pemberi_tugas }}" placeholder="Isi instansi pemberi tugas ..." required>
                      </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label class="form-label">Instansi penerima Tugas Pembantuan</label>
                         <input type="text" class="form-control" name="penerima_tugas" value="{{ $data->penerima_tugas }}" placeholder="Isi instansi penerimat tugas ..." required>
                      </div>
                   </div>
                </div>
                <hr class="my-10">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Kode Fungsi</label>
                            <input type="text" class="form-control" name="kode_fungsi" value="{{ $data->kode_fungsi }}" placeholder="Tuliskan kode fungsi ..." required>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="form-label">Nama Fungsi</label>
                            <input type="text" class="form-control" name="nama_fungsi" value="{{ $data->nama_fungsi }}" placeholder="Tuliskan nama fungsi ..." required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Kode Sub-Fungsi</label>
                            <input type="text" class="form-control" name="kode_subfungsi" value="{{ $data->kode_subfungsi }}" placeholder="Tuliskan kode sub-fungsi ..." required>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="form-label">Nama Sub-Fungsi</label>
                            <input type="text" class="form-control" name="nama_subfungsi" value="{{ $data->nama_subfungsi }}" placeholder="Tuliskan nama sub-fungsi ..." required>
                        </div>
                    </div>
                </div>
                <hr class="my-10">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label">Pilih Sub-Kegiatan Terkait</label>
                            <select name="subkegiatan_id" class="form-select" required>
                              @foreach ($subkegiatan as $sb)
                                  <option value="{{ $sb->id }}" @if($data->subkegiatan_id == $sb->id) selected @endif >{{ $sb->kode_subkegiatan }} - {{ $sb->nama_subkegiatan }}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <hr class="my-10">
                <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
                          <label class="form-label">Jangka Waktu Pelaksanaan/Tahun ke</label>
                          <input type="text" class="form-control" name="waktu_pelaksanaan" value="{{ $data->waktu_pelaksanaan }}" placeholder="Isi jangka waktu ..." required>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
                          <label class="form-label">No SP DIPA</label>
                          <input type="text" class="form-control" name="no_sp_dipa" value="{{ $data->no_sp_dipa }}" placeholder="Isi no SP DIPA ..." required>
                       </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label">Permasalahan</label>
                            <textarea class="form-control" name="permasalahan" placeholder="Tuliskan permasalahan ..." required>{{ $data->permasalahan }}</textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label">Solusi</label>
                            <textarea class="form-control" name="solusi" placeholder="Tuliskan solusi ..." required>{{ $data->solusi }}</textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label">Keterangan</label>
                            <textarea class="form-control" name="keterangan" placeholder="Tuliskan keterangan ..." required>{{ $data->keterangan }}</textarea>
                        </div>
                    </div>
                 </div>
             </div>
             <!-- /.box-body -->
             <div class="box-footer">
                <a href="{{ route('tugas-pembantuan') }}" class="btn btn-warning btn-sm me-1">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">
                   <i class="ti-save-alt me-2"></i> Simpan Data
                </button>
             </div>
          </form>
       </div>
       <!-- /.box -->			
    </div>
 </div>

@endsection