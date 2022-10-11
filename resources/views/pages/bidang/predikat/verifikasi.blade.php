@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Predikat Triwulan {{ $triwulan }}</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Predikat</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar SKPD</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Predikat per Triwulan</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <h4 class="text-dark font-weight-bold">Form Verifikasi Capaian : </h4>
          <form action="{{ route('predikat-update-bidang') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" class="form-control" name="id" value="{{ $predikat->id }}" hidden>
            <div class="form-group row">
              <label class="col-lg-2 col-form-label">Predikat Kinerja (%)</label>
              <div class="col-lg-2">
                <input type="text" name="capaian_kinerja" class="form-control" 
                @if ($triwulan == 1)
                  value="{{ $ps_kinerja1 }}"
                @elseif ($triwulan == 2)
                  value="{{ $ps_kinerja2 }}"
                @elseif ($triwulan == 3)    
                  value="{{ $ps_kinerja3 }}"
                @endif
                  value="{{ $ps_kinerja4 }}"
                readonly>
              </div>
              <div class="col-lg-8">
                <input type="text" name="predikat_kinerja" class="form-control" 
                @if ($triwulan == 1)
                  value="{{ $pr_kinerja1 }}"
                @elseif ($triwulan == 2)
                  value="{{ $pr_kinerja2 }}"
                @elseif ($triwulan == 3)    
                  value="{{ $pr_kinerja3 }}"
                @endif
                  value="{{ $pr_kinerja4 }}"
                readonly>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-2 col-form-label">Predikat Anggaran (%)</label>
              <div class="col-lg-2">
                <input type="text" name="capaian_anggaran" class="form-control" 
                @if ($triwulan == 1)
                  value="{{ $ps_anggaran1 }}"
                @elseif ($triwulan == 2)
                  value="{{ $ps_anggaran2 }}"
                @elseif ($triwulan == 3)    
                  value="{{ $ps_anggaran3 }}"
                @endif
                  value="{{ $ps_anggaran4 }}"
                readonly>
              </div>
              <div class="col-lg-8">
                <input type="text" name="predikat_anggaran" class="form-control" 
                @if ($triwulan == 1)
                  value="{{ $pr_anggaran1 }}"
                @elseif ($triwulan == 2)
                  value="{{ $pr_anggaran2 }}"
                @elseif ($triwulan == 3)    
                  value="{{ $pr_anggaran3 }}"
                @endif
                  value="{{ $pr_anggaran4 }}"
                readonly>
              </div>
            </div>
            <hr>
            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Faktor Pendorong</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" value="{{ $predikat->faktor_pendorong }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Faktor Penghambat</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" value="{{ $predikat->faktor_penghambat }}" readonly>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Tindak Lanjut Triwulan</label>
                <div class="col-lg-10">
                    <input type="text" name="tindak_lanjut_triwulan" class="form-control" value="{{ $predikat->tindak_lanjut_triwulan }}" placeholder="Tulis tindak lanjut triwulan dari Bidang terhadap capaian triwulan">
                    @error('tindak_lanjut_triwulan')<span><code>{{ $message }}</code></span>@enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-form-label">Tindak Lanjut RKPD</label>
                  <div class="col-lg-10">
                    <input type="text" name="tindak_lanjut_rkpd" class="form-control" value="{{ $predikat->tindak_lanjut_rkpd }}" placeholder="Tulis tindak lanjut RKPD dari Bidang terhadap capaian triwulan">
                    @error('tindak_lanjut_rkpd')<span><code>{{ $message }}</code></span>@enderror
                </div>
            </div>
            <hr>
            <div class="mt-2 float-right">
              <a href="{{ url()->previous() }}" class="btn btn-light mr-2">Batal</a>
              <button type="submit" class="btn btn-primary mr-2">Simpan</button>
            </div>
            
          </form>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
              <div class="d-lg-flex align-items-center">
                <h3 class="text-dark font-weight-bold mb-2">Tabel Sub-Kegiatan pada Triwulan ke {{ $triwulan }}</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped" >
              <thead>
                <tr>
                  <th><b>No.</b></th>
                  <th><b>Kode</b></th>
                  <th><b>Nama Sub-Kegiatan</b></th>
                  <th><b>Target</b></th>
                  <th><b>Realisasi</b></th>
                  <th><b>Kinerja</b></th>
                  <th><b>Masalah</b></th>
                  <th><b>Solusi</b></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($sub_keg as $v_data)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $v_data->kode_sub_keg }}</td>
                  <td>{{ $v_data->nama_sub_keg }}</td>
                  @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                  <td>{{ $v_data->target_sub_keg_1 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                  <td>{{ $v_data->target_sub_keg_2 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                  <td>{{ $v_data->target_sub_keg_3 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                  <td>{{ $v_data->target_sub_keg_4 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                  <td>{{ $v_data->target_sub_keg_5 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                  <td>{{ $v_data->target_sub_keg_6 }}</td>
                  @endif
                @if($triwulan == 1)
                  @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                  <td>{{ $v_data->realisasi_sub_keg_1_1 }}</td>
                  <td>{{ $v_data->kinerja_sub_keg_1_1 }}</td>
                  <td>{{ $v_data->masalah_sub_keg_1_1 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_1_1 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                  <td>{{ $v_data->realisasi_sub_keg_2_1 }}</td>
                  <td>{{ $v_data->kinerja_sub_keg_2_1 }}</td>
                  <td>{{ $v_data->masalah_sub_keg_2_1 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_2_1 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                  <td>{{ $v_data->realisasi_sub_keg_3_1 }}</td>
                  <td>{{ $v_data->kinerja_sub_keg_3_1 }}</td>
                  <td>{{ $v_data->masalah_sub_keg_3_1 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_3_1 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                  <td>{{ $v_data->realisasi_sub_keg_4_1 }}</td>
                  <td>{{ $v_data->kinerja_sub_keg_4_1 }}</td>
                  <td>{{ $v_data->masalah_sub_keg_4_1 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_4_1 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                  <td>{{ $v_data->realisasi_sub_keg_5_1 }}</td>
                  <td>{{ $v_data->kinerja_sub_keg_5_1 }}</td>
                  <td>{{ $v_data->masalah_sub_keg_5_1 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_5_1 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                  <td>{{ $v_data->realisasi_sub_keg_6_1 }}</td>
                  <td>{{ $v_data->kinerja_sub_keg_6_1 }}</td>
                  <td>{{ $v_data->masalah_sub_keg_6_1 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_6_1 }}</td>
                  @endif
                @elseif($triwulan == 2)
                  @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                  <td>{{ $v_data->realisasi_sub_keg_1_2 + $v_data->realisasi_sub_keg_1_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_1_2 + $v_data->kinerja_sub_keg_1_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_1_2 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_1_2 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                  <td>{{ $v_data->realisasi_sub_keg_2_2 + $v_data->realisasi_sub_keg_2_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_2_2 + $v_data->kinerja_sub_keg_2_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_2_2 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_2_2 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                  <td>{{ $v_data->realisasi_sub_keg_3_2 + $v_data->realisasi_sub_keg_3_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_3_2 + $v_data->kinerja_sub_keg_3_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_3_2 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_3_2 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                  <td>{{ $v_data->realisasi_sub_keg_4_2 + $v_data->realisasi_sub_keg_4_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_4_2 + $v_data->kinerja_sub_keg_4_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_4_2 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_4_2 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                  <td>{{ $v_data->realisasi_sub_keg_5_2 + $v_data->realisasi_sub_keg_5_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_5_2 + $v_data->kinerja_sub_keg_5_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_5_2 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_5_2 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                  <td>{{ $v_data->realisasi_sub_keg_6_2 + $v_data->realisasi_sub_keg_6_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_6_2 + $v_data->kinerja_sub_keg_6_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_6_2 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_6_2 }}</td>
                  @endif
                @elseif($triwulan == 3)
                  @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                  <td>{{ $v_data->realisasi_sub_keg_1_3 + $v_data->realisasi_sub_keg_1_2 + $v_data->realisasi_sub_keg_1_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_1_3 + $v_data->kinerja_sub_keg_1_2 + $v_data->kinerja_sub_keg_1_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_1_3 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_1_3 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                  <td>{{ $v_data->realisasi_sub_keg_2_3 + $v_data->realisasi_sub_keg_2_2 + $v_data->realisasi_sub_keg_2_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_2_3 + $v_data->kinerja_sub_keg_2_2 + $v_data->kinerja_sub_keg_2_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_2_3 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_2_3 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                  <td>{{ $v_data->realisasi_sub_keg_3_3 + $v_data->realisasi_sub_keg_3_2 + $v_data->realisasi_sub_keg_3_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_3_3 + $v_data->kinerja_sub_keg_3_2 + $v_data->kinerja_sub_keg_3_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_3_3 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_3_3 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                  <td>{{ $v_data->realisasi_sub_keg_4_3 + $v_data->realisasi_sub_keg_4_2 + $v_data->realisasi_sub_keg_4_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_4_3 + $v_data->kinerja_sub_keg_4_2 + $v_data->kinerja_sub_keg_4_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_4_3 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_4_3 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                  <td>{{ $v_data->realisasi_sub_keg_5_3 + $v_data->realisasi_sub_keg_5_2 + $v_data->realisasi_sub_keg_5_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_5_3 + $v_data->kinerja_sub_keg_5_2 + $v_data->kinerja_sub_keg_5_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_5_3 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_5_3 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                  <td>{{ $v_data->realisasi_sub_keg_6_3 + $v_data->realisasi_sub_keg_6_2 + $v_data->realisasi_sub_keg_6_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_6_3 + $v_data->kinerja_sub_keg_6_2 + $v_data->kinerja_sub_keg_6_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_6_3 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_6_3 }}</td>
                  @endif
                @elseif($triwulan == 4)
                  @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                  <td>{{ $v_data->realisasi_sub_keg_1_4 + $v_data->realisasi_sub_keg_1_3 + $v_data->realisasi_sub_keg_1_2 + $v_data->realisasi_sub_keg_1_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_1_4 + $v_data->kinerja_sub_keg_1_3 + $v_data->kinerja_sub_keg_1_2 + $v_data->kinerja_sub_keg_1_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_1_4 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_1_4 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                  <td>{{ $v_data->realisasi_sub_keg_2_4 + $v_data->realisasi_sub_keg_2_3 + $v_data->realisasi_sub_keg_2_2 + $v_data->realisasi_sub_keg_2_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_2_4 + $v_data->kinerja_sub_keg_2_3 + $v_data->kinerja_sub_keg_2_2 + $v_data->kinerja_sub_keg_2_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_2_4 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_2_4 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                  <td>{{ $v_data->realisasi_sub_keg_3_4 + $v_data->realisasi_sub_keg_3_3 + $v_data->realisasi_sub_keg_3_2 + $v_data->realisasi_sub_keg_3_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_3_4 + $v_data->kinerja_sub_keg_3_3 + $v_data->kinerja_sub_keg_3_2 + $v_data->kinerja_sub_keg_3_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_3_4 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_3_4 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                  <td>{{ $v_data->realisasi_sub_keg_4_4 + $v_data->realisasi_sub_keg_4_3 + $v_data->realisasi_sub_keg_4_2 + $v_data->realisasi_sub_keg_4_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_4_4 + $v_data->kinerja_sub_keg_4_3 + $v_data->kinerja_sub_keg_4_2 + $v_data->kinerja_sub_keg_4_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_4_4 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_4_4 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                  <td>{{ $v_data->realisasi_sub_keg_5_4 + $v_data->realisasi_sub_keg_5_3 + $v_data->realisasi_sub_keg_5_2 + $v_data->realisasi_sub_keg_5_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_5_4 + $v_data->kinerja_sub_keg_5_3 + $v_data->kinerja_sub_keg_5_2 + $v_data->kinerja_sub_keg_5_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_5_4 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_5_4 }}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                  <td>{{ $v_data->realisasi_sub_keg_6_4 + $v_data->realisasi_sub_keg_6_3 + $v_data->realisasi_sub_keg_6_2 + $v_data->realisasi_sub_keg_6_1 }}</td>
                  <td>{{ round(($v_data->kinerja_sub_keg_6_4 + $v_data->kinerja_sub_keg_6_3 + $v_data->kinerja_sub_keg_6_2 + $v_data->kinerja_sub_keg_6_1), 2) }}</td>
                  <td>{{ $v_data->masalah_sub_keg_6_4 }}</td>
                  <td>{{ $v_data->solusi_sub_keg_6_4 }}</td>
                  @endif
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

@endsection