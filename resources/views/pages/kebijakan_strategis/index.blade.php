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
              <h3 class="mb-10"><b>Kebijakan Strategis</b></h3>
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
        <h4 class="box-title">SKPD : <b>{{ Auth::user()->skpd->nama_skpd }}</b></h4>
        <ul class="box-controls pull-right d-md-flex d-none">
          <button class="btn btn-primary btn-sm px-4 py-2" data-bs-toggle="modal" data-bs-target=".modal-tambah-kebijakan">Tambah Data</button>
          <a href="{{ route('kebijakan-strategis-export') }}" class="btn btn-success btn-sm px-4 py-2 me-2"><i class="fa fas fa-print"></i> Cetak Excel</a>
        </ul>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table table-striped table-bordered no-wrap">
                <thead class="bg-gradient-primary-dark text-white text-center">
                    <th>No</th>
                    <th>Kebijakan Strategis (Peraturan / Keputusan Bupati)</th>
                    <th>Dasar Hukum</th>
                    <th>Tujuan / Masalah yang Diselesaikan</th>
                    <th>Sub Kegiatan</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                  @forelse ($data as $dt)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td>{{ $dt->nama_kebijakan }}</td>
                      <td>{{ $dt->dasar_hukum }}</td>
                      <td>{{ $dt->penyelesaian }}</td>
                      <td>{{ $dt->Subkegiatan->nama_subkegiatan }}</td>
                      <td class="text-center">
                        <button class="waves-effect waves-warning btn btn-warning-light btn-circle" data-bs-toggle="modal" data-bs-target=".modal-ubah-kebijakan" onclick="insertTextKebijakan('{{ $dt->id }}', '{{ $dt->nama_kebijakan }}', '{{ $dt->dasar_hukum }}', '{{ $dt->penyelesaian }}');"><span class="fa fa-edit fs-18"></span></button>
                        <a href="{{ route('kebijakan-strategis-delete', $dt->id) }}" class="waves-effect waves-light btn btn-danger-light btn-circle" title="Hapus" onclick="if (confirm('Apakah Anda yakin untuk menghapus?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><span class="fa fa-trash fs-18"></span></a>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td class="text-center" colspan="5"><i>Tidak ada data</i></td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modal-tambah-kebijakan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <form class="modal-content" action="{{ route('kebijakan-strategis-store') }}" method="POST">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Form Tambah Data Kebijakan Strategis</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @csrf
        <div class="form-group">
          <label class="form-label">Kebijakan Strategis (Peraturan / Keputusan Bupati)</label>
          <textarea name="nama_kebijakan" rows="3" class="form-control" required placeholder="Isi dengan Perda/Perbup/kebijakan daerah yang dilaksanakan OPD terkait"></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Dasar Hukum</label>
          <textarea name="dasar_hukum" rows="3" class="form-control" required placeholder="Isi dengan Dasar Hukum (diatas Perda/Perbup ) yang mendasari pelaksanaan kebijakan strategis"></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Tujuan / Masalah yang Diselesaikan</label>
          <textarea name="penyelesaian" rows="3" class="form-control" required placeholder="Isi dengan Tujuan/Masalah yang dapat diselesaikan dari pelaksanaan kebijakan strategis"></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Sub Kegiatan</label>
          <select name="id_subkegiatan" id="id_subkegiatan" class="form-select" required>
            @foreach ($subkegiatan as $sb)  
              <option value="{{ $sb->id }}">{{ $sb->nama_subkegiatan }}</option>
            @endforeach
          </select>
        </div>
      </div>
		  <div class="modal-footer">
        <button type="submit" class="btn btn-primary float-end">Simpan Data</button>
        <button type="button" class="btn btn-light float-end" data-bs-dismiss="modal">Tutup</button>
      </div>
    </form>
  </div>
</div>

<div class="modal fade modal-ubah-kebijakan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <form class="modal-content" action="{{ route('kebijakan-strategis-update') }}" method="POST">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Form Ubah Data Kebijakan Strategis</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @csrf
        <div class="form-group">
          <label class="form-label">Kebijakan Strategis (Peraturan / Keputusan Bupati)</label>
          <input type="number" id="id_kebijakan" name="id_kebijakan" required hidden>
          <textarea name="nama_kebijakan" id="nama_kebijakan" rows="3" class="form-control" required placeholder="Isi dengan Perda/Perbup/kebijakan daerah yang dilaksanakan OPD terkait"></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Dasar Hukum</label>
          <textarea name="dasar_hukum" id="dasar_hukum" rows="3" class="form-control" required placeholder="Isi dengan Dasar Hukum (diatas Perda/Perbup ) yang mendasari pelaksanaan kebijakan strategis"></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Tujuan / Masalah yang Diselesaikan</label>
          <textarea name="penyelesaian" id="penyelesaian" rows="3" class="form-control" required placeholder="Isi dengan Tujuan/Masalah yang dapat diselesaikan dari pelaksanaan kebijakan strategis"></textarea>
        </div>
      </div>
		  <div class="modal-footer">
        <button type="submit" class="btn btn-warning float-end">Ubah Data</button>
        <button type="button" class="btn btn-light float-end" data-bs-dismiss="modal">Tutup</button>
      </div>
    </form>
  </div>
</div>

<script>
    function insertTextKebijakan($a,$b,$c,$d)
    {
        document.getElementById('id_kebijakan').value = $a;
        document.getElementById('nama_kebijakan').value = $b;
        document.getElementById('dasar_hukum').value = $c;
        document.getElementById('penyelesaian').value = $d;
    }
</script>

@endsection