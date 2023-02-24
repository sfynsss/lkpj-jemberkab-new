<table style="border: 1px; border-color: black;">
  <thead>
    <tr>
      <th rowspan="2"><b>NO</b></th>
      <th rowspan="2"><b>URUSAN PEMERINTAHAN</b></th>
      <th rowspan="2"><b>OPD PELAKSANA</b></th>
      <th rowspan="2"><b>KEBIJAKAN</b></th>
      <th rowspan="2"><b>URAIAN PROG/KEG</b></th>
      <th rowspan="1" colspan="2"><b>TARGET</b></th>
      <th rowspan="1" colspan="2"><b>REALISASI</b></th>
      <th rowspan="2"><b>PERMASALAHAN</b></th>
      <th rowspan="2"><b>UPAYA MENGATASI PERMASALAHAN</b></th>
      <th rowspan="2"><b>TINJUT REKOMENDASI DPRD</b></th>
    </tr>
    <tr>
      <th colspan="1"><b>Kinerja</b></th>
      <th colspan="1"><b>Rupiah</b></th>
      <th colspan="1"><b>Kinerja</b></th>
      <th colspan="1"><b>Rupiah</b></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $skpd)
    <tr>
      <td class="text-left">{{ $skpd->kode_skpd }}</td>
      <td colspan="11" class="text-left">{{ $skpd->nama_skpd }}</td>
    </tr>
      @php
        $program = \App\Program::where(['id_skpd' => $skpd->id])->groupBy('id_bidang_urusan')->pluck('id_bidang_urusan');
        $tmp_bidang_urusan = \App\BidangUrusan::whereIn('id', $program)->groupBy('id_urusan')->pluck('id_urusan');
        $data_urusan = \App\Urusan::whereIn('id', $tmp_bidang_urusan)->get();
      @endphp
      
      @foreach($data_urusan as $i => $urusan)
      <tr>
        <td class="text-left">{{ $urusan->kode_urusan }}</td>
        <td colspan="11" class="text-left"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $urusan->nama_urusan }}</td>
      </tr>

      @foreach($urusan->BidangUrusan as $bidang)
      @foreach($bidang->Program as $program)
      @if($program->id_skpd == $skpd->id)

      <tr>
        <td class="text-left">{{ $program->kode_program }}</td>
        <td colspan="11" class="text-left"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $program->nama_program }}</td>
      </tr>

      @foreach($program->Kegiatan as $kegiatan)
      <tr>
        <td class="text-left">{{ $kegiatan->kode_kegiatan }}</td>
        <td colspan="11" class="text-left">{{ $kegiatan->nama_kegiatan }}</td>
      </tr>
      @endforeach

      @foreach ($kegiatan->SubKegiatan as $sub_kegiatan)
      @php
      $realisasi = 0;
      $serapan = 0;
      
      if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
        $realisasi = $sub_kegiatan->realisasi_sub_keg_1_1+$sub_kegiatan->realisasi_sub_keg_1_2+$sub_kegiatan->realisasi_sub_keg_1_3+$sub_kegiatan->realisasi_sub_keg_1_4;
        $serapan = $sub_kegiatan->serapan_sub_keg_1_1+$sub_kegiatan->serapan_sub_keg_1_2+$sub_kegiatan->serapan_sub_keg_1_3+$sub_kegiatan->serapan_sub_keg_1_4;
      } else if (substr(Cookie::get('tahun_aktif'), 3) == 2) {
        $realisasi = $sub_kegiatan->realisasi_sub_keg_2_1+$sub_kegiatan->realisasi_sub_keg_2_2+$sub_kegiatan->realisasi_sub_keg_2_3+$sub_kegiatan->realisasi_sub_keg_2_4;
        $serapan = $sub_kegiatan->serapan_sub_keg_2_1+$sub_kegiatan->serapan_sub_keg_2_2+$sub_kegiatan->serapan_sub_keg_2_3+$sub_kegiatan->serapan_sub_keg_2_4;
      } else if (substr(Cookie::get('tahun_aktif'), 3) == 3) {
        $realisasi = $sub_kegiatan->realisasi_sub_keg_3_1+$sub_kegiatan->realisasi_sub_keg_3_2+$sub_kegiatan->realisasi_sub_keg_3_3+$sub_kegiatan->realisasi_sub_keg_3_4;
        $serapan = $sub_kegiatan->serapan_sub_keg_3_1+$sub_kegiatan->serapan_sub_keg_3_2+$sub_kegiatan->serapan_sub_keg_3_3+$sub_kegiatan->serapan_sub_keg_3_4;
      } else if (substr(Cookie::get('tahun_aktif'), 3) == 4) {
        $realisasi = $sub_kegiatan->realisasi_sub_keg_4_1+$sub_kegiatan->realisasi_sub_keg_4_2+$sub_kegiatan->realisasi_sub_keg_4_3+$sub_kegiatan->realisasi_sub_keg_4_4;
        $serapan = $sub_kegiatan->serapan_sub_keg_4_1+$sub_kegiatan->serapan_sub_keg_4_2+$sub_kegiatan->serapan_sub_keg_4_3+$sub_kegiatan->serapan_sub_keg_4_4;
      } else if (substr(Cookie::get('tahun_aktif'), 3) == 5) {
        $realisasi = $sub_kegiatan->realisasi_sub_keg_5_1+$sub_kegiatan->realisasi_sub_keg_5_2+$sub_kegiatan->realisasi_sub_keg_5_3+$sub_kegiatan->realisasi_sub_keg_5_4;
        $serapan = $sub_kegiatan->serapan_sub_keg_5_1+$sub_kegiatan->serapan_sub_keg_5_2+$sub_kegiatan->serapan_sub_keg_5_3+$sub_kegiatan->serapan_sub_keg_5_4;
      } else if (substr(Cookie::get('tahun_aktif'), 3) == 6) {
        $realisasi = $sub_kegiatan->realisasi_sub_keg_6_1+$sub_kegiatan->realisasi_sub_keg_6_2+$sub_kegiatan->realisasi_sub_keg_6_3+$sub_kegiatan->realisasi_sub_keg_6_4;
        $serapan = $sub_kegiatan->serapan_sub_keg_6_1+$sub_kegiatan->serapan_sub_keg_6_2+$sub_kegiatan->serapan_sub_keg_6_3+$sub_kegiatan->serapan_sub_keg_6_4;
      }
      @endphp
      @if($realisasi != 0) 
      <tr>
        <td class="text-left text-top">{{ $sub_kegiatan->kode_sub_keg }}</td>
        <td colspan="2" class="text-left text-top">{{ $sub_kegiatan->nama_sub_keg }}</td>
        <td class="text-left text-top"></td>
        <td class="text-left text-top">{{ $sub_kegiatan->indikator_sub_keg }}</td>
        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
            <td>{{ $sub_kegiatan->target_sub_keg_1 }}</td>
            <td>@currency($sub_kegiatan->pagu_indikatif_sub_keg_1)</td>
            <td>{{ $realisasi }}</td>
            <td>@currency($serapan)</td>
            <td class="text-left text-top">{{ $sub_kegiatan->masalah_sub_keg_1_4 }}</td>
            <td class="text-left text-top">{{ $sub_kegiatan->solusi_sub_keg_1_4 }}</td>
            <td class="text-left text-top"></td>
          @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
            <td>{{ $sub_kegiatan->target_sub_keg_2 }}</td>
            <td>@currency($sub_kegiatan->pagu_indikatif_sub_keg_2)</td>
            <td>{{ $realisasi }}</td>
            <td>@currency($serapan)</td>
            <td class="text-left text-top">{{ $sub_kegiatan->masalah_sub_keg_2_4 }}</td>
            <td class="text-left text-top">{{ $sub_kegiatan->solusi_sub_keg_2_4 }}</td>
            <td class="text-left text-top"></td>
          @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
            <td>{{ $sub_kegiatan->target_sub_keg_3 }}</td>
            <td>@currency($sub_kegiatan->pagu_indikatif_sub_keg_3)</td>
            <td>{{ $realisasi }}</td>
            <td>@currency($serapan)</td>
            <td class="text-left text-top">{{ $sub_kegiatan->masalah_sub_keg_3_4 }}</td>
            <td class="text-left text-top">{{ $sub_kegiatan->solusi_sub_keg_3_4 }}</td>
            <td class="text-left text-top"></td>
          @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
            <td>{{ $sub_kegiatan->target_sub_keg_4 }}</td>
            <td>@currency($sub_kegiatan->pagu_indikatif_sub_keg_4)</td>
            <td>{{ $realisasi }}</td>
            <td>@currency($serapan)</td>
            <td class="text-left text-top">{{ $sub_kegiatan->masalah_sub_keg_4_4 }}</td>
            <td class="text-left text-top">{{ $sub_kegiatan->solusi_sub_keg_4_4 }}</td>
            <td class="text-left text-top"></td>
          @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
            <td>{{ $sub_kegiatan->target_sub_keg_5 }}</td>
            <td>@currency($sub_kegiatan->pagu_indikatif_sub_keg_5)</td>
            <td>{{ $realisasi }}</td>
            <td>@currency($serapan)</td>
            <td class="text-left text-top">{{ $sub_kegiatan->masalah_sub_keg_5_4 }}</td>
            <td class="text-left text-top">{{ $sub_kegiatan->solusi_sub_keg_5_4 }}</td>
            <td class="text-left text-top"></td>
          @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
            <td>{{ $sub_kegiatan->target_sub_keg_6 }}</td>
            <td>@currency($sub_kegiatan->pagu_indikatif_sub_keg_6)</td>
            <td>{{ $realisasi }}</td>
            <td>@currency($serapan)</td>
            <td class="text-left text-top">{{ $sub_kegiatan->masalah_sub_keg_6_4 }}</td>
            <td class="text-left text-top">{{ $sub_kegiatan->solusi_sub_keg_6_4 }}</td>
            <td class="text-left text-top"></td>
          @endif
    </tr>
      @endif
      @endforeach
    @endif
    @endforeach
    @endforeach
    @endforeach
    @endforeach
  </tbody>
</table>