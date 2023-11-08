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
              <h3 class="mb-10"><b>Jumlah Penduduk, Luas Wilayah, dan Kepadatan Penduduk <br> per Kecamatan di Kabupaten Jember</b></h3>
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
          <h4 class="box-title">Tahun : <b>{{ date('Y') }}</b></h4>
          <ul class="box-controls pull-right d-md-flex d-none">
            <button class="btn btn-primary btn-sm px-4 py-2" data-bs-toggle="modal" data-bs-target=".modal-tambah-kebijakan">Filter Tahun</button>
          </ul>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                  <thead class="bg-gradient-primary-dark text-white text-center">
                      <th>No</th>
                      <th>Kecamatan</th>
                      <th>Jumlah Penduduk</th>
                      <th>Persentase <br> Terhadap Total</th>
                      <th>Luas</th>
                      <th>Kepadatan Penduduk</th>
                  </thead>
                  <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-left">{{ $dt->nama }}</td>
                            @foreach ($dt->JumlahPenduduk as $jml)
                                @if ($jml->tahun == 2023)
                                    <td class="text-center">{{ $jml->jumlah }}</td>
                                    <td class="text-center">{{ $jml->prosentase }}</td>
                                    <td class="text-center">{{ $jml->luas }}</td>
                                    <td class="text-center">{{ $jml->kepadatan }}</td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                    {{-- @forelse ($data as $dt)
                      <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $dt->nama_kebijakan }}</td>
                        <td>{{ $dt->dasar_hukum }}</td>
                        <td>{{ $dt->penyelesaian }}</td>
                        <td class="text-center">
                          <button class="waves-effect waves-warning btn btn-warning-light btn-circle" data-bs-toggle="modal" data-bs-target=".modal-ubah-kebijakan" onclick="insertTextKebijakan('{{ $dt->id }}', '{{ $dt->nama_kebijakan }}', '{{ $dt->dasar_hukum }}', '{{ $dt->penyelesaian }}');"><span class="fa fa-edit fs-18"></span></button>
                          <a href="{{ route('kebijakan-strategis-delete', $dt->id) }}" class="waves-effect waves-light btn btn-danger-light btn-circle" title="Hapus" onclick="if (confirm('Apakah Anda yakin untuk menghapus?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><span class="fa fa-trash fs-18"></span></a>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td class="text-center" colspan="5"><i>Tidak ada data</i></td>
                      </tr>
                    @endforelse --}}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection