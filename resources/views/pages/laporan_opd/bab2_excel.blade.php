<table style="border: 1px; border-color: black;">
  <thead>
    <tr>
      <th rowspan="2"><b>kode</b></th>
      <th rowspan="2"><b>Program/Kegiatan/SubKegiatan</b></th>
      <th rowspan="2"><b>Indikator Kinerja Program/Kegiatan/SubKegiatan</b></th>
      <th rowspan="1" colspan="2"><b>Target Tahun 2021</b></th>
      <th rowspan="1" colspan="2"><b>Realisasi Tahun 2021</b></th>
      <th rowspan="2"><b>Permasalahan</b></th>
      <th rowspan="2"><b>Solusi</b></th>
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
    @foreach ($skpd->Program as $program)
    @if ($program->id_skpd == $skpd->id)
    <tr>
      <td><b>{{ $program->kode_program }}</b></td>
      <td colspan="8"><b>{{ $program->nama_program }}</b></td>
    </tr>
    @foreach ($program->Kegiatan as $kegiatan)
    <tr>
      <td>{{ $kegiatan->kode_kegiatan }}</td>
      <td colspan="8">{{ $kegiatan->nama_kegiatan }}</td>
    </tr>
    @foreach ($kegiatan->SubKegiatan as $sub_kegiatan)
    @php
      $realisasi = $sub_kegiatan->realisasi_sub_keg_1_1+$sub_kegiatan->realisasi_sub_keg_1_2+$sub_kegiatan->realisasi_sub_keg_1_3+$sub_kegiatan->realisasi_sub_keg_1_4;
      $serapan = $sub_kegiatan->serapan_sub_keg_1_1+$sub_kegiatan->serapan_sub_keg_1_2+$sub_kegiatan->serapan_sub_keg_1_3+$sub_kegiatan->serapan_sub_keg_1_4;
    @endphp
    <tr>
      <td>{{ $sub_kegiatan->kode_sub_keg }}</td>
      <td>{{ $sub_kegiatan->nama_sub_keg }}</td>
      <td>{{ $sub_kegiatan->indikator_sub_keg }}</td>
      <td>{{ $sub_kegiatan->target_sub_keg_1 }}</td>
      <td>Rp. @currency($sub_kegiatan->pagu_indikatif_sub_keg_1)</td>
      <td>{{ $realisasi }}</td>
      <td>Rp. @currency($serapan)</td>
      <td>{{ $sub_kegiatan->masalah_sub_keg_1_4 }}</td>
      <td>{{ $sub_kegiatan->solusi_sub_keg_1_4 }}</td>
    </tr>
    @endforeach
    @endforeach
    @endif
    @endforeach
    @endforeach
  </tbody>
</table>