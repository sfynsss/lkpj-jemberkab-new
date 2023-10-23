@extends('layouts.app')

@section('content')

@include('alert')
<div class="row">
  <div class="col-12">
    <div class="box">
      <div class="box-body bg-img" style="background-image: url(../images/bg-5.png);" data-overlay-light="9">
        <div class="d-lg-flex align-items-center justify-content-between">
          <div class="d-md-flex align-items-center mb-30 mb-lg-0 w-p100">
            <img src="{{ asset('LKPJ/images/svg-icon/color-svg/custom-14.svg') }}" class="img-fluid max-w-150" alt="" />
            <div class="ms-30">
              <h3 class="mb-10"><b>Bab. I Capaian Kinerja</b></h3>
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

<div class="row">
  <div class="col-12">
    <div class="box">
      <div class="box-header with-border">						
        <h4 class="box-title"><b>Capaian Kinerja</b></h4>
        <h6 class="box-subtitle">SKPD : {{ $nama_skpd->nama_skpd }}</h6>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead class="bg-gradient-primary-dark text-white text-center">
                  <tr class="text-center">
                    <th>No</th>
                    <th class="text-left">Uraian</th>
                    <th>Satuan</th>
                    <th>2021</th>
                    <th>2022</th>
                    <th>2023</th>
                    <th>2024</th>
                    <th>2025</th>
                    @if (Auth::user()->hak_akses != 'BIDANG')
                    <th>Action</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i => $indikator)
                  <tr>
                    <td class="text-center">{{ $i+1 }}</td>
                    <td class="text-left">{{ $indikator->indikator }}</td>     
                    <td class="text-center">{{ $indikator->satuan }}</td>                 
                    <td class="text-center">{{ $indikator->capaian_1 }}</td>
                    <td class="text-center">{{ $indikator->capaian_2 }}</td>
                    <td class="text-center">{{ $indikator->capaian_3 }}</td>
                    <td class="text-center">{{ $indikator->capaian_4 }}</td>
                    <td class="text-center">{{ $indikator->capaian_5 }}</td>
                    @if (Auth::user()->hak_akses != 'BIDANG')
                    <td class="text-center">
                      <a href="{{ route('edit-capaian', $indikator->id) }}" class="waves-effect waves-light btn btn-primary-light btn-circle" title="Ubah"><span class="fa fa-edit fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                      <a href="{{ route('hapus-capaian', $indikator->id) }}" class="waves-effect waves-light btn btn-danger-light btn-circle" title="Hapus" onclick="if (confirm('Apakah Anda yakin untuk menghapus?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><span class="fa fa-trash fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                    </td>
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
</div>

@endsection