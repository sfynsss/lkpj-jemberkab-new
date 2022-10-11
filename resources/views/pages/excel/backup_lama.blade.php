<table style="border: 1px; border-color: black;">
	<thead>
		<tr>
			<td colspan="28" style="text-align: center"><b>EVALUASI TERHADAP HASIL RKPD</b></td>
			
		</tr>
		<tr>
			<td colspan="28" style="text-align: center"><b>PEMERINTAH KABUPATEN JEMBER</b></td>
		</tr>
		<tr>
			<td colspan="28" style="text-align: center"><b>TAHUN 2022 TRIWULAN {{ $tw }}</b></td>
		</tr>
		<tr>
			<td rowspan="2" style="text-align: center"><b>No</b></td>
			<td rowspan="2" style="text-align: center"><b>Sasaran</b></td>
			<td rowspan="2" style="text-align: center"><b>Kode</b></td>
			<td rowspan="2" style="text-align: center"><b>Urusan/<br>Program/<br>Kegiatan</b></td>
			<td rowspan="2" style="text-align: center"><b>Indikator Kinerja<br>Program<br>(Outcome)/<br>Kegiatan<br>(Output)</b></td>
			<td colspan="2" rowspan="2" style="text-align: center"><b>RPJMD <br>Kabupaten/Kota<br>pada<br>Tahun 2026</b></td>
			<td colspan="2" rowspan="2" style="text-align: center"><b>Realisasi<br>Capaian Kinerja<br>RPJMD<br>Kabupaten/Kota<br>sampai dengan<br>RKPD<br>Kabupaten/Kota<br>Tahun 2021</b></td>
			<td colspan="2" rowspan="2" style="text-align: center"><b> Kinerja<br>dan Anggaran<br>RKPD<br>Kabupaten/Kota<br>Tahun {{ Cookie::get('tahun_aktif') }}<br>yang dievaluasi</b></td>
			<td colspan="8" style="text-align: center"><b>Realisasi Kinerja<br>pada Triwulan</b></td>
			<td colspan="2" rowspan="2" style="text-align: center"><b>Realisasi<br>Capaian Kinerja<br>dan Anggaran<br>RKPD<br>Kabupaten/Kota<br>yang Dievaluasi</b></td>
			<td colspan="2" rowspan="2" style="text-align: center"><b>Tingkat<br>Capaian Kinerja<br>dan Realisasi Anggaran<br>RKPD<br>Kabupaten/Kota<br>yang Dievaluasi</b></td>
			<td colspan="2" rowspan="2" style="text-align: center"><b>Realisasi<br>Kinerja dan<br>Anggaran<br>RPJMD<br>Kabupaten/Kota<br>s/d Tahun {{ Cookie::get('tahun_aktif') }}<br></b></td>
			<td colspan="2" rowspan="2" style="text-align: center"><b>Tingkat Capaian<br>Kinerja dan<br>Realisasi<br>Anggaran<br>RPJMD<br>Kabupaten/Kota<br>s/d tahun {{ Cookie::get('tahun_aktif') }}<br>(%)</b></td>
			<td rowspan="2" style="text-align: center"><b>Perangkat<br>Daerah<br>Penanggung<br>Jawab</b></td>
		</tr>
		<tr>
			<th colspan="2" style="text-align: center"><b>I</b></th>
			<th colspan="2" style="text-align: center"><b>II</b></th>
			<th colspan="2" style="text-align: center"><b>III</b></th>
			<th colspan="2" style="text-align: center"><b>IV</b></th>
		</tr>
		<tr>
			<td rowspan="2" style="text-align: center"><b>1</b></td>
			<td rowspan="2" style="text-align: center"><b>2</b></td>
			<td rowspan="2" style="text-align: center"><b>3</b></td>
			<td rowspan="2" style="text-align: center"><b>4</b></td>
			<td rowspan="2" style="text-align: center"><b>5</b></td>
			<td colspan="2" style="text-align: center"><b>6</b></td>
			<td colspan="2" style="text-align: center"><b>7</b></td>
			<td colspan="2" style="text-align: center"><b>8</b></td>
			<td colspan="2" style="text-align: center"><b>9</b></td>
			<td colspan="2" style="text-align: center"><b>10</b></td>
			<td colspan="2" style="text-align: center"><b>11</b></td>
			<td colspan="2" style="text-align: center"><b>12</b></td>
			<td colspan="2" style="text-align: center"><b>13</b></td>
			<td colspan="2" style="text-align: center"><b>14=13/8*100</b></td>
			<td colspan="2" style="text-align: center"><b>15=7+13</b></td>
			<td colspan="2" style="text-align: center"><b>16=14/6x100</b></td>
			<td rowspan="2" style="text-align: center"><b>17</b></td>
		</tr>
		<tr>
			<td><b>K</b></td>
			<td><b>Rp</b></td>
			<td><b>K</b></td>
			<td><b>Rp</b></td>
			<td><b>K</b></td>
			<td><b>Rp</b></td>
			<td><b>K</b></td>
			<td><b>Rp</b></td>
			<td><b>K</b></td>
			<td><b>Rp</b></td>
			<td><b>K</b></td>
			<td><b>Rp</b></td>
			<td><b>K</b></td>
			<td><b>Rp</b></td>
			<td><b>K</b></td>
			<td><b>Rp</b></td>
			<td><b>K</b></td>
			<td><b>Rp</b></td>
			<td><b>K</b></td>
			<td><b>Rp</b></td>
			<td><b>K</b></td>
			<td><b>Rp</b></td>
		</tr>
	</thead>
	<tbody>
		@php
		$tmp = 1; $target = 0; $pagu = 0; $realisasi1 = 0; $serapan1 = 0; $realisasi2 = 0; $serapan2 = 0; $realisasi3 = 0; $serapan3 = 0; $realisasi4 = 0; $serapan4 = 0;
		$realisasi_tot = 0; $serapan_tot = 0; $c_sub_keg = 0;
		@endphp
		@foreach ($skpd as $skpd)
		<!-- urusan -->
		<tr>
			<td>{{$tmp+=1}}</td>
			<td ></td>
			<td >{{$skpd->kode_skpd}}</td>
			<td  colspan="25">{{$skpd->nama_skpd}}</td>
		</tr>

		@php
			$program = \App\Program::where(['id_skpd' => $skpd->id])->groupBy('id_bidang_urusan')->pluck('id_bidang_urusan');
			$tmp_bidang_urusan = \App\BidangUrusan::whereIn('id', $program)->groupBy('id_urusan')->pluck('id_urusan');
			$data_urusan = \App\Urusan::whereIn('id', $tmp_bidang_urusan)->get();
		@endphp
		
		@foreach($data_urusan as $i => $urusan)
		<tr>
			<td>{{$tmp+=1}}</td>
			<td ></td>
			<td >{{$urusan->kode_urusan}}</td>
			<td  colspan="25">{{$urusan->nama_urusan}}</td>
		</tr>

		@foreach($urusan->BidangUrusan as $bidang)
		@if(isset($bidang->Program[0]) && $bidang->Program[0]->id_skpd == $skpd->id)
		<tr>
			<td>{{$tmp+=1}}</td>
			<td ></td>
			<td >{{$bidang->kode_bidang_urusan}}</td>
			<td  colspan="25">{{$bidang->nama_bidang_urusan}}</td>
		</tr>
		@endif

		@foreach($bidang->Program as $program)
		@if($program->id_skpd == $skpd->id)

		<tr>
			<td>{{ $tmp+=1}}</td>
			<td></td>
			<td >{{ $program->kode_program }}</td>
			<td  colspan="25">{{ $program->nama_program }}</td>
		</tr>

		@foreach($program->Kegiatan as $kegiatan)
		<tr>
			<td>{{ $tmp+=1}}</td>
			<td></td>
			<td >{{ $kegiatan->kode_kegiatan }}</td>
			<td  colspan="25">{{ $kegiatan->nama_kegiatan }}</td>
		</tr>

		@foreach($kegiatan->SubKegiatan as $it => $sub_kegiatan)
		@php
		$tmp_pagu = 0;
		if	(substr(Cookie::get('tahun_aktif'), 3) == 1) {
			if ($sub_kegiatan->pagu_indikatif_sub_keg_1 != 0) {
				$c_sub_keg += 1;
			}
			$tmp_pagu = $sub_kegiatan->pagu_indikatif_sub_keg_1;
		} else if	(substr(Cookie::get('tahun_aktif'), 3) == 2) {
			if ($sub_kegiatan->pagu_indikatif_sub_keg_2 != 0) {
				$c_sub_keg += 1;
			}
			$tmp_pagu = $sub_kegiatan->pagu_indikatif_sub_keg_2;
		} else if	(substr(Cookie::get('tahun_aktif'), 3) == 3) {
			if ($sub_kegiatan->pagu_indikatif_sub_keg_3 != 0) {
				$c_sub_keg += 1;
			}
			$tmp_pagu = $sub_kegiatan->pagu_indikatif_sub_keg_3;
		} else if	(substr(Cookie::get('tahun_aktif'), 3) == 4) {
			if ($sub_kegiatan->pagu_indikatif_sub_keg_4 != 0) {
				$c_sub_keg += 1;
			}
			$tmp_pagu = $sub_kegiatan->pagu_indikatif_sub_keg_4;
		} else if	(substr(Cookie::get('tahun_aktif'), 3) == 5) {
			if ($sub_kegiatan->pagu_indikatif_sub_keg_5 != 0) {
				$c_sub_keg += 1;
			}
			$tmp_pagu = $sub_kegiatan->pagu_indikatif_sub_keg_5;
		} else if	(substr(Cookie::get('tahun_aktif'), 3) == 6) {
			if ($sub_kegiatan->pagu_indikatif_sub_keg_6 != 0) {
				$c_sub_keg += 1;
			}
			$tmp_pagu = $sub_kegiatan->pagu_indikatif_sub_keg_6;
		}
		@endphp
		@if ($tmp_pagu != 0)
		<tr>
			<td>{{ $tmp+=1}}</td>
			<td></td>
			<td >{{ $sub_kegiatan->kode_sub_keg }}</td>
			<td >{{ $sub_kegiatan->nama_sub_keg }}</td>
			<td >{{ $sub_kegiatan->indikator_sub_keg }}</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			@if (substr(Cookie::get('tahun_aktif'), 3) == 1)
			<td>{{ $target = $sub_kegiatan->target_sub_keg_1 }}</td>
			<td>@currency( $pagu = $sub_kegiatan->pagu_indikatif_sub_keg_1)</td>
			@elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
			<td>{{ $target = $sub_kegiatan->target_sub_keg_2 }}</td>
			<td>@currency( $pagu = $sub_kegiatan->pagu_indikatif_sub_keg_2)</td>
			@elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
			<td>{{ $target = $sub_kegiatan->target_sub_keg_3 }}</td>
			<td>@currency( $pagu = $sub_kegiatan->pagu_indikatif_sub_keg_3)</td>
			@elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
			<td>{{ $target = $sub_kegiatan->target_sub_keg_4 }}</td>
			<td>@currency( $pagu = $sub_kegiatan->pagu_indikatif_sub_keg_4)</td>
			@elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
			<td>{{ $target = $sub_kegiatan->target_sub_keg_5 }}</td>
			<td>@currency( $pagu = $sub_kegiatan->pagu_indikatif_sub_keg_5)</td>
			@elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
			<td>{{ $target = $sub_kegiatan->target_sub_keg_6 }}</td>
			<td>@currency( $pagu = $sub_kegiatan->pagu_indikatif_sub_keg_6)</td>
			@endif
			@if($tw == 1)
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() != 0)
				{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() }}
				@endif --}}
				@if (substr(Cookie::get('tahun_aktif'), 3) == 1)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_1_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_2_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_3_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_4_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_5_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_6_1 }}
				@endif
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first() != 0)
				@currency( $serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first())
				@endif --}}
				@php
				if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_1_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 2) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_2_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 3) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_3_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 4) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_4_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 5) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_5_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 6) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_6_1;
				}
				
				@endphp
				@currency($serapan1)
			</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() != 0)
				{{ \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() }}
				@endif --}}
				@if (substr(Cookie::get('tahun_aktif'), 3) == 1)
				{{ $sub_kegiatan->realisasi_sub_keg_1_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
				{{ $sub_kegiatan->realisasi_sub_keg_2_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
				{{ $sub_kegiatan->realisasi_sub_keg_3_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
				{{ $sub_kegiatan->realisasi_sub_keg_4_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
				{{ $sub_kegiatan->realisasi_sub_keg_5_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
				{{ $sub_kegiatan->realisasi_sub_keg_6_1 }}
				@endif
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first() != 0)
				@currency(\App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first())
				@endif --}}
				@php
				if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_1_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 2) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_2_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 3) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_3_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 4) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_4_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 5) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_5_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 6) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_6_1;
				}
				@endphp
				@currency($serapan1)
			</td>
			<td>
				@if($realisasi1 == 0 || $target == 0)
				0%
				@else
				@php
				$realisasi_tot += round(($realisasi1)/$target*100, 2);
				@endphp
				{{ round($realisasi1/$target*100, 2) }}%
				{{-- {{ round($realisasi1/$target*100, 2) }}% --}}
				@endif
			</td>
			<td>
				@if($serapan1 == 0 || $pagu == 0)
				0%
				@else
				@php
				$serapan_tot += round(($serapan1)/$pagu*100, 2);	
				@endphp
				{{ round($serapan1/$pagu*100, 2) }}%
				{{-- {{ round($serapan1/$pagu*100, 2) }}% --}}
				@endif
			</td>
			@elseif($tw == 2)
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() != 0)
				{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() }}
				@endif --}}
				@if (substr(Cookie::get('tahun_aktif'), 3) == 1)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_1_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_2_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_3_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_4_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_5_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_6_1 }}
				@endif
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first() != 0)
				@currency( $serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first())
				@endif --}}
				@php
				if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_1_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 2) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_2_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 3) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_3_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 4) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_4_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 5) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_5_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 6) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_6_1;
				}
				@endphp
				@currency($serapan1)
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() != 0)
				{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() }}
				@endif --}}
				@if (substr(Cookie::get('tahun_aktif'), 3) == 1)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_1_2 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_2_2 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_3_2 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_4_2 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_5_2 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_6_2 }}
				@endif
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first() != 0)
				@currency($serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first())
				@endif --}}
				@php
				if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_1_2;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 2) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_2_2;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 3) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_3_2;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 4) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_4_2;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 5) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_5_2;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 6) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_6_2;
				}
				@endphp
				@currency($serapan2)
			</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() != 0)
				{{ \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() }}
				@endif --}}
				{{ $realisasi1+$realisasi2 }}
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first() != 0)
				@currency(\App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first())
				@endif --}}
				@currency($serapan1+$serapan2)
			</td>
			<td>
				@if(($realisasi1+$realisasi2) == 0 || $target == 0)
				0%
				@else
				@php
				$realisasi_tot += round(($realisasi1+$realisasi2)/$target*100, 2);
				@endphp
				{{ round(($realisasi1+$realisasi2)/$target*100, 2) }}%
				{{-- {{ round(($realisasi1+$realisasi2)/$target*100, 2) }}% --}}
				@endif
			</td>
			<td>
				@if(($serapan1+$serapan2) == 0 || $pagu == 0)
				0%
				@else
				@php
				$serapan_tot += round(($serapan1+$serapan2)/$pagu*100, 2);	
				@endphp
				{{ round(($serapan1+$serapan2)/$pagu*100, 2) }}%
				{{-- {{ round(($serapan1+$serapan2)/$pagu*100, 2) }}% --}}
				@endif
			</td>
			@elseif($tw == 3)
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() != 0)
				{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() }}
				@endif --}}
				@if (substr(Cookie::get('tahun_aktif'), 3) == 1)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_1_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_2_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_3_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_4_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_5_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_6_1 }}
				@endif
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first() != 0)
				@currency( $serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first())
				@endif --}}
				@php
				if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_1_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 2) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_2_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 3) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_3_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 4) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_4_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 5) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_5_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 6) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_6_1;
				}
				@endphp
				@currency($serapan1)
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() != 0)
				{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() }}
				@endif --}}
				@if (substr(Cookie::get('tahun_aktif'), 3) == 1)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_1_2 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_2_2 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_3_2 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_4_2 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_5_2 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_6_2 }}
				@endif
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first() != 0)
				@currency($serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first())
				@endif --}}
				@php
				if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_1_2;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 2) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_2_2;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 3) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_3_2;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 4) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_4_2;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 5) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_5_2;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 6) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_6_2;
				}
				@endphp
				@currency($serapan2)
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_3')->first() != 0)
				{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_3')->first() }}
				@endif --}}
				@if (substr(Cookie::get('tahun_aktif'), 3) == 1)
				{{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_1_3 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
				{{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_2_3 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
				{{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_3_3 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
				{{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_4_3 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
				{{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_5_3 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
				{{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_6_3 }}
				@endif
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_3')->first() != 0)
				@currency($serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_3')->first())
				@endif --}}
				@php
				if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
					$serapan3 = $sub_kegiatan->serapan_sub_keg_1_3;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 2) {
					$serapan3 = $sub_kegiatan->serapan_sub_keg_2_3;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 3) {
					$serapan3 = $sub_kegiatan->serapan_sub_keg_3_3;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 4) {
					$serapan3 = $sub_kegiatan->serapan_sub_keg_4_3;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 5) {
					$serapan3 = $sub_kegiatan->serapan_sub_keg_5_3;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 6) {
					$serapan3 = $sub_kegiatan->serapan_sub_keg_6_3;
				}
				@endphp
				@currency($serapan3)
			</td>
			<td></td>
			<td></td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_3')->first() != 0)
				{{ \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_3')->first() }}
				@endif --}}
				{{ $realisasi1+$realisasi2+$realisasi3 }}
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_3')->first() != 0)
				@currency(\App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_3')->first())
				@endif --}}
				@currency($serapan1+$serapan2+$serapan3)
			</td>
			<td>
				@if(($realisasi1+$realisasi2+$realisasi3) == 0 || $target == 0)
				0%
				@else
				@php
				$realisasi_tot += round(($realisasi1+$realisasi2+$realisasi3)/$target*100, 2);
				@endphp
				{{ round(($realisasi1+$realisasi2+$realisasi3)/$target*100, 2) }}%
				{{-- {{ round(($realisasi1+$realisasi2+$realisasi3)/$target*100, 2) }}% --}}
				@endif
			</td>
			<td>
				@if(($serapan1+$serapan2+$serapan3) == 0 || $pagu == 0)
				0%
				@else
				@php
				$serapan_tot += round(($serapan1+$serapan2+$serapan3)/$pagu*100, 2);	
				@endphp
				{{ round(($serapan1+$serapan2+$serapan3)/$pagu*100, 2) }}%
				{{-- {{ round(($serapan1+$serapan2+$serapan3)/$pagu*100, 2) }}% --}}
				@endif
			</td>
			@elseif($tw == 4)
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() != 0)
				{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() }}
				@endif --}}
				@if (substr(Cookie::get('tahun_aktif'), 3) == 1)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_1_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_2_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_3_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_4_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_5_1 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
				{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_6_1 }}
				@endif
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first() != 0)
				@currency( $serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first())
				@endif --}}
				@php
				if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_1_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 2) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_2_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 3) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_3_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 4) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_4_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 5) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_5_1;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 6) {
					$serapan1 = $sub_kegiatan->serapan_sub_keg_6_1;
				}
				@endphp
				@currency($serapan1)
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() != 0)
				{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() }}
				@endif --}}
				@if (substr(Cookie::get('tahun_aktif'), 3) == 1)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_1_2 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_2_2 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_3_2 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_4_2 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_5_2 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
				{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_6_2 }}
				@endif
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first() != 0)
				@currency($serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first())
				@endif --}}
				@php
				if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_1_2;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 2) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_2_2;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 3) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_3_2;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 4) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_4_2;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 5) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_5_2;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 6) {
					$serapan2 = $sub_kegiatan->serapan_sub_keg_6_2;
				}
				@endphp
				@currency($serapan2)
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_3')->first() != 0)
				{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_3')->first() }}
				@endif --}}
				@if (substr(Cookie::get('tahun_aktif'), 3) == 1)
				{{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_1_3 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
				{{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_2_3 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
				{{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_3_3 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
				{{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_4_3 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
				{{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_5_3 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
				{{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_6_3 }}
				@endif
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_3')->first() != 0)
				@currency($serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_3')->first())
				@endif --}}
				@php
				if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
					$serapan3 = $sub_kegiatan->serapan_sub_keg_1_3;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 2) {
					$serapan3 = $sub_kegiatan->serapan_sub_keg_2_3;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 3) {
					$serapan3 = $sub_kegiatan->serapan_sub_keg_3_3;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 4) {
					$serapan3 = $sub_kegiatan->serapan_sub_keg_4_3;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 5) {
					$serapan3 = $sub_kegiatan->serapan_sub_keg_5_3;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 6) {
					$serapan3 = $sub_kegiatan->serapan_sub_keg_6_3;
				}
				@endphp
				@currency($serapan3)
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_4')->first() != 0)
				{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_4')->first() }}
				@endif --}}
				@if (substr(Cookie::get('tahun_aktif'), 3) == 1)
				{{ $realisasi4 = $sub_kegiatan->realisasi_sub_keg_1_4 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
				{{ $realisasi4 = $sub_kegiatan->realisasi_sub_keg_2_4 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
				{{ $realisasi4 = $sub_kegiatan->realisasi_sub_keg_3_4 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
				{{ $realisasi4 = $sub_kegiatan->realisasi_sub_keg_4_4 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
				{{ $realisasi4 = $sub_kegiatan->realisasi_sub_keg_5_4 }}
				@elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
				{{ $realisasi4 = $sub_kegiatan->realisasi_sub_keg_6_4 }}
				@endif
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_4')->first() != 0)
				@currency($serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_4')->first())
				@endif --}}
				@php
				if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
					$serapan4 = $sub_kegiatan->serapan_sub_keg_1_4;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 2) {
					$serapan4 = $sub_kegiatan->serapan_sub_keg_2_4;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 3) {
					$serapan4 = $sub_kegiatan->serapan_sub_keg_3_4;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 4) {
					$serapan4 = $sub_kegiatan->serapan_sub_keg_4_4;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 5) {
					$serapan4 = $sub_kegiatan->serapan_sub_keg_5_4;
				}
				elseif (substr(Cookie::get('tahun_aktif'), 3) == 6) {
					$serapan4 = $sub_kegiatan->serapan_sub_keg_6_4;
				}
				@endphp
				@currency($serapan4)
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_4')->first() != 0)
				{{ \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_4')->first() }}
				@endif --}}
				{{ $realisasi1+$realisasi2+$realisasi3+$realisasi4 }}
			</td>
			<td>
				{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_4')->first() != 0)
				@currency(\App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_4')->first())
				@endif --}}
				@currency($serapan1+$serapan2+$serapan3+$serapan4)
			</td>
			<td>
				@if(($realisasi1+$realisasi2+$realisasi3+$realisasi4) == 0 || $target == 0)
				0%
				@else
				@php
				$realisasi_tot += round(($realisasi1+$realisasi2+$realisasi3+$realisasi4)/$target*100, 2);
				@endphp
				{{ round(($realisasi1+$realisasi2+$realisasi3+$realisasi4)/$target*100, 2) }}%
				{{-- {{ round(($realisasi1+$realisasi2+$realisasi3+$realisasi4)/$target*100, 2) }}% --}}
				@endif
			</td>
			<td>
				@if(($serapan1+$serapan2+$serapan3+$serapan4) == 0 || $pagu == 0)
				0%
				@else
				@php
				$serapan_tot += round(($serapan1+$serapan2+$serapan3+$serapan4)/$pagu*100, 2);	
				@endphp
				{{ round(($serapan1+$serapan2+$serapan3+$serapan4)/$pagu*100, 2) }}%
				{{-- {{ round(($serapan1+$serapan2+$serapan3+$serapan4)/$pagu*100, 2) }}% --}}
				@endif
			</td>
			@endif
			@php
			$target = 0; $pagu = 0; 
			@endphp
			
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		@endif

		@endforeach
		@endforeach
		@endif
		@endforeach
		@endforeach				
		@endforeach
		<!-- end of urusan -->
		@endforeach

		<tr>
			<td colspan="19" >Rata-rata capaian kinerja (%)</td>
			<td ></td>
			<td ></td>
			<td >{{ round($realisasi_tot/$c_sub_keg, 2) }}%</td>
			<td >{{ round($serapan_tot/$c_sub_keg, 2) }}%</td>
			<td ></td>
			<td ></td>
			<td ></td>
			<td ></td>
			<td ></td>
		</tr>

		<tr>
			<td colspan="19" >Predikat Kinerja</td>
			<td ></td>
			<td ></td>
			<td >
			@php
				$tmp_hitung_realisasi = round($realisasi_tot/$c_sub_keg);
			@endphp
			{{-- {{ $tmp_hitung_realisasi }} --}}
			@if ($tmp_hitung_realisasi >= 91)
			Sangat Tinggi
			@elseif ($tmp_hitung_realisasi >= 76 && $tmp_hitung_realisasi <= 90)
			Tinggi
			@elseif ($tmp_hitung_realisasi >= 66 && $tmp_hitung_realisasi <= 75)
			Sedang		
			@elseif ($tmp_hitung_realisasi >= 51 && $tmp_hitung_realisasi <= 65)
			Rendah
			@elseif ($tmp_hitung_realisasi <= 50)
			Sangat Rendah
			@endif
			</td>
			<td >
			@php
				$tmp_hitung_serapan = round($serapan_tot/$c_sub_keg);
			@endphp
			{{-- {{ $tmp_hitung_serapan }} --}}
			@if ($tmp_hitung_serapan >= 91)
			Sangat Tinggi
			@elseif ($tmp_hitung_serapan >= 76 && $tmp_hitung_serapan <= 90)
			Tinggi
			@elseif ($tmp_hitung_serapan >= 66 && $tmp_hitung_serapan <= 75)
			Sedang		
			@elseif ($tmp_hitung_serapan >= 51 && $tmp_hitung_serapan <= 65)
			Rendah
			@elseif ($tmp_hitung_serapan <= 50)
			Sangat Rendah
			@endif
			</td>
			<td ></td>
			<td ></td>
			<td ></td>
			<td ></td>
			<td ></td>
		</tr>
		
		<tr>
			<td colspan="4" >Faktor pendorong keberhasilan:</td>
			<td colspan="24" >
				{{\App\Predikat::where(['id_skpd' => $skpd->id, 'triwulan_predikat' => $tw])->pluck('faktor_pendorong')->first()}}
			</td>
		</tr>
		<tr>
			<td colspan="4" >Faktor penghambat pencapaian kinerja:</td>
			<td colspan="24" >
				{{\App\Predikat::where(['id_skpd' => $skpd->id, 'triwulan_predikat' => $tw])->pluck('faktor_penghambat')->first()}}
			</td>
		</tr>
		<tr>
			<td colspan="4" >Tindak lanjut yang diperlukan dalam triwulan berikutnya:</td>
			<td colspan="24" >
				{{\App\Predikat::where(['id_skpd' => $skpd->id, 'triwulan_predikat' => $tw])->pluck('tindak_lanjut_triwulan')->first()}}
			</td>
		</tr>
		<tr>
			<td colspan="4" >Tindak lanjut yang diperlukan dalam RKPD berikutnya:</td>
			<td colspan="24" >
				{{\App\Predikat::where(['id_skpd' => $skpd->id, 'triwulan_predikat' => $tw])->pluck('tindak_lanjut_rkpd')->first()}}
			</td>
		</tr>
	</tbody>
</table>