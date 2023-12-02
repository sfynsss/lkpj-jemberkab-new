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
              <h3 class="mb-10"><b>Capaian Pembangunan</b></h3>
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
            <button class="btn btn-primary btn-sm px-4 py-2" data-bs-toggle="modal" data-bs-target=".modal-tambah-kategori"><i class="fa fas fa-plus-circle"></i> Tambah Kategori</button>
            <a href="{{ route('capaian-pembangunan-export') }}" target="_blank" class="btn btn-danger btn-sm px-4 py-2 me-2"><i class="fa fas fa-file"></i> Export PDF</a>
          </ul>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table class="table table-hover table-bordered no-wrap">
                  <thead class="bg-gradient-primary-dark text-white text-center">
                      <th>No</th>
                      <th>Kategori</th>
                      <th>Aksi</th>
                  </thead>
                  <tbody>
                    @forelse ($data as $dt)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td>{{ $dt->nama_kategori }}</td>
                      <td class="text-center">
                        <a href="{{ route('capaian-pembangunan-show', $dt->id) }}" class="btn btn-primary btn-sm"><i class="fas fa fa-plus-circle me-2"></i>Isi Data</a>
                        <button class="btn btn-warning btn-sm px-4 py-2" data-bs-toggle="modal" data-bs-target=".modal-ubah-kategori" onclick="insertText('{{ $dt->id }}', '{{ $dt->nama_kategori }}');"><i class="fa fas fa-edit"></i> Ubah</button>
                        <a href="{{ route('capaian-pembangunan-kategori-delete', $dt->id) }}" class="btn btn-danger-light btn-sm" title="Hapus" onclick="if (confirm('Apakah Anda yakin untuk menghapus?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><span class="fa fa-trash fs-18"></span> Hapus</a>
                      </td>
                    </tr>
                    @empty                        
                    <tr>
                      <td class="text-center" colspan="3"><i>Data tidak tersedia</i></td>
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

<div class="modal fade modal-tambah-kategori" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered">
    <form class="modal-content" action="{{ route('capaian-pembangunan-kategori-store') }}" method="POST">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Form Tambah Kategori Capaian Pembangunan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @csrf
        <div class="form-group">
          <label class="form-label">Nama Kategori</label>
          <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Tuliksan nama kategori ..." required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary float-end">Simpan Data</button>
        <button type="button" class="btn btn-light float-end" data-bs-dismiss="modal">Tutup</button>
      </div>
    </form>
  </div>
</div>

<div class="modal fade modal-ubah-kategori" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered">
    <form class="modal-content" action="{{ route('capaian-pembangunan-kategori-update') }}" method="POST">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Form Ubah Kategori Capaian Pembangunan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @csrf
        <div class="form-group">
          <label class="form-label">Nama Kategori</label>
          <input type="number" class="form-control" id="id_kategori_ubah" name="id_kategori_ubah" required hidden>
          <input type="text" class="form-control" id="nama_kategori_ubah" name="nama_kategori_ubah" placeholder="Tuliksan nama kategori ..." required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary float-end">Simpan Data</button>
        <button type="button" class="btn btn-light float-end" data-bs-dismiss="modal">Tutup</button>
      </div>
    </form>
  </div>
</div>

<script>
  function insertText($a, $b)
  {
    document.getElementById('id_kategori_ubah').value = $a;
    document.getElementById('nama_kategori_ubah').value = $b;
  }
</script>

@endsection