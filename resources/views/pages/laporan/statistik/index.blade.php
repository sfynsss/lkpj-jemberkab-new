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
              <h5 class="mb-10">Kategori Laporan : </h5>
              <h4 class="mb-10"><b>{{ $data[0]->Kategori->nama_kategori }} {{ $data[0]->Kategori->keterangan }}</b></h4>
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
        <div class="box-body">
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table class="table table-striped table-bordered no-wrap">
                  <thead class="bg-gradient-primary-dark text-white text-center">
                      <th>No</th>
                      <th>Uraian</th>
                      <th>2017</th>
                      <th>2018</th>
                      <th>2019</th>
                      <th>2020</th>
                      <th>2021</th>
                      <th>2022</th>
                      <th>2023</th>
                      <th>Aksi</th>
                  </thead>
                  <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td class="text-center">{{ $dt->kode_data }}</td>
                            <td class="text-left">{{ $dt->nama_data }}</td>
                            <td class="text-center">{{ $dt->th_2017 }}</td>
                            <td class="text-center">{{ $dt->th_2018 }}</td>
                            <td class="text-center">{{ $dt->th_2019 }}</td>
                            <td class="text-center">{{ $dt->th_2020 }}</td>
                            <td class="text-center">{{ $dt->th_2021 }}</td>
                            <td class="text-center">{{ $dt->th_2022 }}</td>
                            <td class="text-center">{{ $dt->th_2023 }}</td>
                            <td class="text-center">
                              <button class="waves-effect waves-warning btn btn-warning btn-circle btn-sm" 
                                data-bs-toggle="modal" data-bs-target=".modal-ubah-statistik" 
                                onclick="insertTextStatistik('{{ $dt->id }}', '{{ $dt->nama_data }}', 
                                '{{ $dt->th_2017 }}', '{{ $dt->th_2018 }}',
                                '{{ $dt->th_2019 }}', '{{ $dt->th_2020 }}',
                                '{{ $dt->th_2021 }}', '{{ $dt->th_2022 }}',
                                '{{ $dt->th_2023 }}');">
                                <span class="fa fa-edit fs-18"></span>
                              </button>
                            </td>
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

<div class="modal fade modal-ubah-statistik" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <form class="modal-content" action="{{ route('laporan-statistik-update') }}" method="POST">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Form Ubah Data Statistik</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @csrf
        <input type="number" id="id_statistik" name="id_statistik" required hidden>
        <div class="form-group">
          <label class="form-label">Nama Data</label>
          <input type="text" class="form-control" id="nama_data" readonly>
        </div>
        <div class="row form-group">
          <div class="col-md-4">
            <label class="form-label">Tahun 2017</label>
            <input type="number" class="form-control" id="th_2017" name="th_2017" min="0" step=".01">
          </div>
          <div class="col-md-4">
            <label class="form-label">Tahun 2018</label>
            <input type="number" class="form-control" id="th_2018" name="th_2018" min="0" step=".01">
          </div>
          <div class="col-md-4">
            <label class="form-label">Tahun 2019</label>
            <input type="number" class="form-control" id="th_2019" name="th_2019" min="0" step=".01">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-4">
            <label class="form-label">Tahun 2020</label>
            <input type="number" class="form-control" id="th_2020" name="th_2020" min="0" step=".01">
          </div>
          <div class="col-md-4">
            <label class="form-label">Tahun 2021</label>
            <input type="number" class="form-control" id="th_2021" name="th_2021" min="0" step=".01">
          </div>
          <div class="col-md-4">
            <label class="form-label">Tahun 2022</label>
            <input type="number" class="form-control" id="th_2022" name="th_2022" min="0" step=".01">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-4">
            <label class="form-label">Tahun 2023</label>
            <input type="number" class="form-control" id="th_2023" name="th_2023" min="0" step=".01">
          </div>
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
  function insertTextStatistik($a,$b,$c,$d, $e,$f,$g,$h,$i)
  {
      document.getElementById('id_statistik').value = $a;
      document.getElementById('nama_data').value = $b;
      document.getElementById('th_2017').value = $c;
      document.getElementById('th_2018').value = $d;
      document.getElementById('th_2019').value = $e;
      document.getElementById('th_2020').value = $f;
      document.getElementById('th_2021').value = $g;
      document.getElementById('th_2022').value = $h;
      document.getElementById('th_2023').value = $i;
  }
</script>
  

@endsection