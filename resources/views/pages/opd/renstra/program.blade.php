@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">RENSTRA</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">RENSTRA</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>

      <li class="nav-item">Daftar Program</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-12">
              <div class="d-lg-flex align-items-center">
                <h3 class="text-dark font-weight-bold mb-2">Pilih Program</h3>
              </div>
              <h3 class="text-dark font-weight-bold mb-2">SKPD : {{ $nama }}</h3>
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
                  <th><b>Program</b></th>
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                @php($i = 1)
                @foreach($data as $data)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$data->kode_program}}</td>
                  <td class="text-left">{{$data->nama_program}}</td>
                  <td>
                    {{-- <a href="{{ route('rpjm-ubah', $data->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-pen btn-icon-prepend mr-2"></i>Ubah Data</a> --}}
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"                            
                    onclick="insertText(
                      '{{$data->nama_program}}',
                      '{{$data->indikator_program}}',
                      '{{$data->target_program1}}',
                      '{{$data->pagu_indikatif_program1}}',
                      '{{$data->prakiraan_maju_program1}}',
                      '{{$data->target_program2}}',
                      '{{$data->pagu_indikatif_program2}}',
                      '{{$data->prakiraan_maju_program2}}',
                      '{{$data->target_program3}}',
                      '{{$data->pagu_indikatif_program3}}',
                      '{{$data->prakiraan_maju_program3}}',
                      '{{$data->target_program4}}',
                      '{{$data->pagu_indikatif_program4}}',
                      '{{$data->prakiraan_maju_program4}}',
                      '{{$data->target_program5}}',
                      '{{$data->pagu_indikatif_program5}}',
                      '{{$data->prakiraan_maju_program5}}',
                      '{{$data->target_program6}}',
                      '{{$data->pagu_indikatif_program6}}',
                      '{{$data->prakiraan_maju_program6}}',
                      )"><i class="fas fa-eye btn-icon-prepend mr-2"></i>
                    </button>
                    <a href="{{ route('renstra-kegiatan-opd', $data->id) }}" class="btn btn-primary" ><i class="fas fa-clipboard-check btn-icon-prepend mr-2"></i>Kegiatan</a>
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



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian Program</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-bordered" width="100%" cellspacing="0">
            <tbody>
              <tr>
                  <th>Nama Program</th>
                  <td id="nama_program"></td>
              </tr>
              <tr>
                  <th>Indikator Kegiatan</th>
                  <td id="indikator_program"></td>
              </tr>
              <tr>
                <th colspan="2" class="text-center">Tahun 2021</th>
              </tr>
              <tr>
                  <th>Target</th>
                  <td id="target_program1"></td>
              </tr>
              <tr>
                  <th>Pagu Anggaran</th>
                  <td id="pagu_indikatif_program1"></td>
              </tr>
              <tr>
                <th>Prakiraan Maju</th>
                <td id="prakiraan_maju_program1"></td>
              </tr>
              <tr>
                <th colspan="2" class="text-center">Tahun 2022</th>
              </tr>
              <tr>
                  <th>Target</th>
                  <td id="target_program2"></td>
              </tr>
              <tr>
                  <th>Pagu Anggaran</th>
                  <td id="pagu_indikatif_program2"></td>
              </tr>
              <tr>
                <th>Prakiraan Maju</th>
                <td id="prakiraan_maju_program2"></td>
              </tr>
              <tr>
                <th colspan="2" class="text-center">Tahun 2023</th>
              </tr>
              <tr>
                  <th>Target</th>
                  <td id="target_program3"></td>
              </tr>
              <tr>
                  <th>Pagu Anggaran</th>
                  <td id="pagu_indikatif_program3"></td>
              </tr>
              <tr>
                <th>Prakiraan Maju</th>
                <td id="prakiraan_maju_program3"></td>
              </tr>
              <tr>
                <th colspan="2" class="text-center">Tahun 2024</th>
              </tr>
              <tr>
                  <th>Target</th>
                  <td id="target_program4"></td>
              </tr>
              <tr>
                  <th>Pagu Anggaran</th>
                  <td id="pagu_indikatif_program4"></td>
              </tr>
              <tr>
                <th>Prakiraan Maju</th>
                <td id="prakiraan_maju_program4"></td>
              </tr>
              <tr>
                <th colspan="2" class="text-center">Tahun 2025</th>
              </tr>
              <tr>
                  <th>Target</th>
                  <td id="target_program5"></td>
              </tr>
              <tr>
                  <th>Pagu Anggaran</th>
                  <td id="pagu_indikatif_program5"></td>
              </tr>
              <tr>
                <th>Prakiraan Maju</th>
                <td id="prakiraan_maju_program5"></td>
              </tr>
              <tr>
                <th colspan="2" class="text-center">Tahun 2026</th>
              </tr>
              <tr>
                  <th>Target</th>
                  <td id="target_program6"></td>
              </tr>
              <tr>
                  <th>Pagu Anggaran</th>
                  <td id="pagu_indikatif_program6"></td>
              </tr>
              <tr>
                <th>Prakiraan Maju</th>
                <td id="prakiraan_maju_program6"></td>
              </tr>
            </tbody>
          </table>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<script>
  function insertText ($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o, $p, $q, $r, $s, $t) {
      document.getElementById('nama_program').innerHTML = $a;
      document.getElementById('indikator_program').innerHTML = $b;
      document.getElementById('target_program1').innerHTML = $c;
      document.getElementById('pagu_indikatif_program1').innerHTML = $d;
      document.getElementById('prakiraan_maju_program1').innerHTML = $e;
      document.getElementById('target_program2').innerHTML = $f;
      document.getElementById('pagu_indikatif_program2').innerHTML = $g;
      document.getElementById('prakiraan_maju_program2').innerHTML = $h;
      document.getElementById('target_program3').innerHTML = $i;
      document.getElementById('pagu_indikatif_program3').innerHTML = $i;
      document.getElementById('prakiraan_maju_program3').innerHTML = $j;
      document.getElementById('target_program4').innerHTML = $k;
      document.getElementById('pagu_indikatif_program4').innerHTML = $l;
      document.getElementById('prakiraan_maju_program4').innerHTML = $m;
      document.getElementById('target_program5').innerHTML = $o;
      document.getElementById('pagu_indikatif_program5').innerHTML = $p;
      document.getElementById('prakiraan_maju_program5').innerHTML = $q;
      document.getElementById('target_program6').innerHTML = $r;
      document.getElementById('pagu_indikatif_program6').innerHTML = $s;
      document.getElementById('prakiraan_maju_program6').innerHTML = $t;
  }
  </script>

@endsection