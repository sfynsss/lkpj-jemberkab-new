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
              <h3 class="mb-10">Kategori Capaian : <b>{{ $kategori->nama_kategori }}</b></h3>
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
          <h4 class="box-title"></h4>
          <ul class="box-controls pull-right d-md-flex d-none">
            <button class="btn btn-primary btn-sm px-4 py-2" data-bs-toggle="modal" data-bs-target=".modal-tambah-data"><i class="fa fas fa-plus-circle"></i> Tambah Data</button>
          </ul>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table class="table table-hover table-bordered">
                  <thead class="bg-gradient-primary-dark text-white text-center">
                      <th>No</th>
                      <th>Nama Data</th>
                      <th>2019</th>
                      <th>2020</th>
                      <th>2021</th>
                      <th>2022</th>
                      <th>2023</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                  </thead>
                  <tbody>
                    @forelse ($data as $dt)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td>{{ $dt->nama_data }}</td>
                      <td class="text-center">{{ $dt->th_2019 }}</td>
                      <td class="text-center">{{ $dt->th_2020 }}</td>
                      <td class="text-center">{{ $dt->th_2021 }}</td>
                      <td class="text-center">{{ $dt->th_2022 }}</td>
                      <td class="text-center">{{ $dt->th_2023 }}</td>
                      <td>{{ $dt->keterangan }}</td>
                      <td class="text-center">
                        <button class="btn btn-warning btn-sm px-4 py-2" data-bs-toggle="modal" data-bs-target=".modal-ubah-data" onclick="insertText('{{ $dt->id }}', '{{ $dt->nama_data }}', '{{ $dt->th_2019 }}', '{{ $dt->th_2020 }}', '{{ $dt->th_2021 }}', '{{ $dt->th_2022 }}', '{{ $dt->th_2023 }}', '{{ $dt->keterangan }}');"><i class="fa fas fa-edit"></i> Ubah</button>
                        <a href="{{ route('capaian-pembangunan-data-delete', $dt->id) }}" class="btn btn-danger-light btn-sm" title="Hapus" onclick="if (confirm('Apakah Anda yakin untuk menghapus?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><span class="fa fa-trash fs-18"></span> Hapus</a>
                      </td>
                    </tr>
                    @empty                        
                    <tr>
                      <td class="text-center" colspan="9"><i>Data tidak tersedia</i></td>
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

<div class="modal fade modal-tambah-data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <form class="modal-content" action="{{ route('capaian-pembangunan-data-store') }}" method="POST">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Form Tambah Data Capaian Pembangunan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @csrf
        <div class="form-group">
          <label class="form-label">Nama Data</label>
          <input type="text" class="form-control" id="nama_data" name="nama_data" placeholder="Tuliksan nama data ..." required>
          <input type="text" class="form-control" id="id_kategori" name="id_kategori" value="{{ $kategori->id }}" hidden required>
        </div>
        <div class="row form-group">
          <div class="col-md-4">
            <label class="form-label">Tahun 2019</label>
            <input type="number" class="form-control" id="th_2019" name="th_2019" min="0" step=".01" value="0" placeholder="Isikan capaian ..." >
          </div>
          <div class="col-md-4">
            <label class="form-label">Tahun 2020</label>
            <input type="number" class="form-control" id="th_2020" name="th_2020" min="0" step=".01" value="0" placeholder="Isikan capaian ..." >
          </div>
          <div class="col-md-4">
            <label class="form-label">Tahun 2021</label>
            <input type="number" class="form-control" id="th_2021" name="th_2021" min="0" step=".01" value="0" placeholder="Isikan capaian ..." >
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-4">
            <label class="form-label">Tahun 2022</label>
            <input type="number" class="form-control" id="th_2022" name="th_2022" min="0" step=".01" value="0" placeholder="Isikan capaian ..." >
          </div>
          <div class="col-md-4">
            <label class="form-label">Tahun 2023</label>
            <input type="number" class="form-control" id="th_2023" name="th_2023" min="0" step=".01" value="0" placeholder="Isikan capaian ..." >
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">Keterangan</label>
          <textarea name="keterangan" class="form-control" name="keterangan" placeholder="Tulis keterangan bila ada .."></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary float-end">Simpan Data</button>
        <button type="button" class="btn btn-light float-end" data-bs-dismiss="modal">Tutup</button>
      </div>
    </form>
  </div>
</div>

<div class="modal fade modal-ubah-data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <form class="modal-content" action="{{ route('capaian-pembangunan-data-update') }}" method="POST">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Form Ubah Data Capaian Pembangunan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @csrf
        <div class="form-group">
          <label class="form-label">Nama Data</label>
          <input type="number" class="form-control" id="id_data" name="id_data" hidden required>
          <input type="text" class="form-control" id="id_kategori" name="id_kategori" value="{{ $kategori->id }}" hidden required>
          <input type="text" class="form-control" id="nama_data_ubah" name="nama_data_ubah" placeholder="Tuliksan nama data ..." required>
        </div>
        <div class="row form-group">
          <div class="col-md-4">
            <label class="form-label">Tahun 2019</label>
            <input type="number" class="form-control" id="th_2019_ubah" name="th_2019_ubah" min="0" step=".01" placeholder="Isikan capaian ..." >
          </div>
          <div class="col-md-4">
            <label class="form-label">Tahun 2020</label>
            <input type="number" class="form-control" id="th_2020_ubah" name="th_2020_ubah" min="0" step=".01" placeholder="Isikan capaian ..." >
          </div>
          <div class="col-md-4">
            <label class="form-label">Tahun 2021</label>
            <input type="number" class="form-control" id="th_2021_ubah" name="th_2021_ubah" min="0" step=".01" placeholder="Isikan capaian ..." >
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-4">
            <label class="form-label">Tahun 2022</label>
            <input type="number" class="form-control" id="th_2022_ubah" name="th_2022_ubah" min="0" step=".01" placeholder="Isikan capaian ..." >
          </div>
          <div class="col-md-4">
            <label class="form-label">Tahun 2023</label>
            <input type="number" class="form-control" id="th_2023_ubah" name="th_2023_ubah" min="0" step=".01" placeholder="Isikan capaian ..." >
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">Keterangan</label>
          <textarea class="form-control" name="keterangan_ubah" id="keterangan_ubah" placeholder="Tulis keterangan bila ada .."></textarea>
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
  function insertText($a, $b, $c, $d, $e, $f, $g, $h)
  {
    document.getElementById('id_data').value = $a;
    document.getElementById('nama_data_ubah').value = $b;
    document.getElementById('th_2019_ubah').value = $c;
    document.getElementById('th_2020_ubah').value = $d;
    document.getElementById('th_2021_ubah').value = $e;
    document.getElementById('th_2022_ubah').value = $f;
    document.getElementById('th_2023_ubah').value = $g;
    document.getElementById('keterangan_ubah').value = $h;
  }
</script>

@endsection