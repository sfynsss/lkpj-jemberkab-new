@extends('layouts.app')

@section('content')

@include('pages.opd.rkpd.detail_subkegiatan')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">RKPD</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">RKPD</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>

      <li class="nav-item">Daftar Program</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar Sub-Kegiatan</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-12">
              <div class="d-lg-flex align-items-center">
                <h3 class="text-dark font-weight-bold mb-2">Daftar Sub Kegiatan Tahun <span class="badge badge-primary">{{ Cookie::get('tahun_aktif') }}</span></h3>
              </div>
              <h3 class="text-dark font-weight-bold mb-2">Program : {{ $data[0]->nama_program }}</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover" >
              <thead>
                <tr>
                  <th><b>No.</b></th>
                  <th><b>Kode</b></th>
                  <th><b>Nama Sub-Kegiatan</b></th>
                  <th><b>Pagu Anggaran</b></th>
                  <th><b>Prakiraan Maju</b></th>
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                @php($i = 1)
                @foreach($data as $program)
                @foreach($program->Kegiatan as $kegiatan)
                @foreach($kegiatan->SubKegiatan as $sub)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$sub->kode_sub_keg}}</td>
                  <td class="text-left">{{$sub->nama_sub_keg}}</td>
                  @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                  <td class="text-left">{{$sub->pagu_indikatif_sub_keg_1}}</td>
                  <td class="text-left">{{$sub->prakiraan_maju_sub_keg_1}}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                  <td class="text-left">{{$sub->pagu_indikatif_sub_keg_2}}</td>
                  <td class="text-left">{{$sub->prakiraan_maju_sub_keg_2}}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                  <td class="text-left">{{$sub->pagu_indikatif_sub_keg_3}}</td>
                  <td class="text-left">{{$sub->prakiraan_maju_sub_keg_3}}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                  <td class="text-left">{{$sub->pagu_indikatif_sub_keg_4}}</td>
                  <td class="text-left">{{$sub->prakiraan_maju_sub_keg_4}}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                  <td class="text-left">{{$sub->pagu_indikatif_sub_keg_5}}</td>
                  <td class="text-left">{{$sub->prakiraan_maju_sub_keg_5}}</td>
                  @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                  <td class="text-left">{{$sub->pagu_indikatif_sub_keg_6}}</td>
                  <td class="text-left">{{$sub->prakiraan_maju_sub_keg_6}}</td>
                  @endif
                  <td class="text-center">
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal"                            
                    onclick="insertText(
                      @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                      '{{$sub->nama_sub_keg}}',
                      '{{$sub->indikator_sub_keg}}',
                      '{{$sub->target_sub_keg_1}}',
                      '{{$sub->pagu_indikatif_sub_keg_1}}',
                      '{{$sub->prakiraan_maju_sub_keg_1}}',
                      '{{$sub->kinerja_sub_keg_1_1}}',
                      '{{$sub->realisasi_sub_keg_1_1}}',
                      '{{$sub->serapan_sub_keg_1_1}}',
                      '{{$sub->masalah_sub_keg_1_1}}',
                      '{{$sub->solusi_sub_keg_1_1}}',
                      '{{$sub->papbd_sub_keg}}',
                      '{{$sub->prioritas_nasional}}'
                      @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                      '{{$sub->nama_sub_keg}}',
                      '{{$sub->indikator_sub_keg}}',
                      '{{$sub->target_sub_keg_2}}',
                      '{{$sub->pagu_indikatif_sub_keg_2}}',
                      '{{$sub->prakiraan_maju_sub_keg_2}}',
                      '{{$sub->kinerja_sub_keg_2_1}}',
                      '{{$sub->realisasi_sub_keg_2_1}}',
                      '{{$sub->serapan_sub_keg_2_1}}',
                      '{{$sub->masalah_sub_keg_2_1}}',
                      '{{$sub->solusi_sub_keg_2_1}}',
                      '{{$sub->papbd_sub_keg}}',
                      '{{$sub->prioritas_nasional}}'
                      @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                      '{{$sub->nama_sub_keg}}',
                      '{{$sub->indikator_sub_keg}}',
                      '{{$sub->target_sub_keg_3}}',
                      '{{$sub->pagu_indikatif_sub_keg_3}}',
                      '{{$sub->prakiraan_maju_sub_keg_3}}',
                      '{{$sub->kinerja_sub_keg_3_1}}',
                      '{{$sub->realisasi_sub_keg_3_1}}',
                      '{{$sub->serapan_sub_keg_3_1}}',
                      '{{$sub->masalah_sub_keg_3_1}}',
                      '{{$sub->solusi_sub_keg_3_1}}',
                      '{{$sub->papbd_sub_keg}}',
                      '{{$sub->prioritas_nasional}}'
                      @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                      '{{$sub->nama_sub_keg}}',
                      '{{$sub->indikator_sub_keg}}',
                      '{{$sub->target_sub_keg_4}}',
                      '{{$sub->pagu_indikatif_sub_keg_4}}',
                      '{{$sub->prakiraan_maju_sub_keg_4}}',
                      '{{$sub->kinerja_sub_keg_4_1}}',
                      '{{$sub->realisasi_sub_keg_4_1}}',
                      '{{$sub->serapan_sub_keg_4_1}}',
                      '{{$sub->masalah_sub_keg_4_1}}',
                      '{{$sub->solusi_sub_keg_4_1}}',
                      '{{$sub->papbd_sub_keg}}',
                      '{{$sub->prioritas_nasional}}'
                      @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                      '{{$sub->nama_sub_keg}}',
                      '{{$sub->indikator_sub_keg}}',
                      '{{$sub->target_sub_keg_5}}',
                      '{{$sub->pagu_indikatif_sub_keg_5}}',
                      '{{$sub->prakiraan_maju_sub_keg_5}}',
                      '{{$sub->kinerja_sub_keg_5_1}}',
                      '{{$sub->realisasi_sub_keg_5_1}}',
                      '{{$sub->serapan_sub_keg_5_1}}',
                      '{{$sub->masalah_sub_keg_5_1}}',
                      '{{$sub->solusi_sub_keg_5_1}}',
                      '{{$sub->papbd_sub_keg}}',
                      '{{$sub->prioritas_nasional}}'
                      @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                      '{{$sub->nama_sub_keg}}',
                      '{{$sub->indikator_sub_keg}}',
                      '{{$sub->target_sub_keg_6}}',
                      '{{$sub->pagu_indikatif_sub_keg_6}}',
                      '{{$sub->prakiraan_maju_sub_keg_6}}',
                      '{{$sub->kinerja_sub_keg_6_1}}',
                      '{{$sub->realisasi_sub_keg_6_1}}',
                      '{{$sub->serapan_sub_keg_6_1}}',
                      '{{$sub->masalah_sub_keg_6_1}}',
                      '{{$sub->solusi_sub_keg_6_1}}',
                      '{{$sub->papbd_sub_keg}}',
                      '{{$sub->prioritas_nasional}}'
                      @endif
                      )"><i class="fas fa-eye btn-icon-prepend mr-2"></i> Lihat Rincian
                    </button>
                  </td>
                </tr>
                @endforeach
                @endforeach
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