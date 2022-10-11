<html>
<head>
	
</head>
<body>
	<style type="text/css">
		table.gridtable {
			width:100%;
			font-family: Times;
			font-size:12px;
			color:#000000;
			border-width: 1px;
			border-color: #666666;
			border-collapse: collapse;
		}
		table.gridtable th {
			border-width: 1px;
			padding: 8px;
			border-style: solid;
			border-color: #666666;
			background-color: #dedede;
		}
		table.gridtable td {
			border-width: 1px;
			padding: 2px;
			border-style: solid;
			border-color: #666666;
			background-color: #ffffff;
		}
	</style>
	
	<style>
		body, html {
			height: 100%;
			font-family: Tahoma, Verdana, Segoe, sans-serif;
			/* -webkit-print-color-adjust: exact; */
		}
		@page {
			size: 14in 8.3in;
			/*size: 8.5in 13in;*/
			margin: 0;
		}
		.pagenum:before {
			content: counter(page);
		}
		p {
			margin: 0;
		}
		h5 {
			font-weight: normal;
		}
		@media print {
			@page {
				size: landscape;
				size: 14in 8.3in;
				margin: 0;
			}
			html {
				height: auto;
				width: auto;
			}
			thead {display: table-header-group;}
			.header {
				page-break-before: always;
			}
		}
		.footer {
			page-break-after: always;
		}
	</style>
</head>
<body>
	<table border="0" width="100%">
		<tr>
			<td width="100%" align="right">
				<div class="chapter2" style="text-align: right; border-bottom: 0px solid #000000; font-weight: normal; font-size: 10pt"></div>
			</td>
		</tr>
		<tr>
			<td width="100%" align="center">
				<div class="chapter2" style="text-align: center; border-bottom: 0px solid #000000; font-weight: bold; font-size: 10pt">EVALUASI TERHADAP HASIL RKPD<br>PEMERINTAH KABUPATEN JEMBER<br>TAHUN {{date('Y')}} TRIWULAN {{$tw}}</div>
			</td>
		</tr>
	</table>	
	<table class="gridtable">
		<thead>
			<tr>
				<th width="3%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>No</b></span></th>
				<th width="6%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Sasaran</b></span></th>
				<th width="3%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Kode</b></span></th>
				<th width="7%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Urusan/<br>Program/<br>Kegiatan</b></span></th>
				<th width="6%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Indikator Kinerja<br>Program<br>(Outcome)/<br>Kegiatan<br>(Output)</b></span></th>
				<th width="7%" colspan="2" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Target RPJMD <br>Kabupaten/Kota<br>pada<br>Tahun {{date('Y')}}</span></th>
					<th width="8%" colspan="2" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Realisasi<br>Capaian Kinerja<br>RPJMD<br>Kabupaten/Kota<br>sampai dengan<br>RKPD<br>Kabupaten/Kota<br>Tahun {{date('Y')}}</b></span></th>
					<th width="8%" colspan="2" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Target Kinerja<br>dan Anggaran<br>RKPD<br>Kabupaten/Kota<br>Tahun {{date('Y')}}<br>yang dievaluasi</b></span></th>
					<th width="28%" colspan="8" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Realisasi Kinerja<br>pada Triwulan</b></span></th>
					<th width="8%" colspan="2" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Realisasi<br>Capaian Kinerja<br>dan Anggaran<br>RKPD<br>Kabupaten/Kota<br>yang Dievaluasi</b></span></th>
					<th width="5%" colspan="2" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Tingkat<br>Capaian Kinerja<br>dan Realisasi Anggaran<br>RKPD<br>Kabupaten/Kota<br>yang Dievaluasi</b></span></th>
					<th width="7%" colspan="2" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Realisasi<br>Kinerja dan<br>Anggaran<br>RPJMD<br>Kabupaten/Kota<br>s/d Tahun {{date('Y')}}<br></b></span></th>	
					<th width="4%" colspan="2" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Tingkat Capaian<br>Kinerja dan<br>Realisasi<br>Anggaran<br>RPJMD<br>Kabupaten/Kota<br>s/d tahun {{ date('Y') }}<br>(%)</b></span></th>
					<th width="5%" rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Perangkat<br>Daerah<br>Penanggung<br>Jawab</b></span></th>
				</tr>
				<tr>
					<th colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>I</b></span></th>
					<th colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>II</b></span></th>
					<th colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>III</b></span></th>
					<th colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>IV</b></span></th>
				</tr>
				<tr>
					<td rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>1</b></span></td>
					<td rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>2</b></span></td>
					<td rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>3</b></span></td>
					<td rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>4</b></span></td>
					<td rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>5</b></span></td>
					<td colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>6</b></span></td>
					<td colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>7</b></span></td>
					<td colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>8</b></span></td>
					<td width="7%" colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>9</b></span></td>
					<td width="7%" colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>10</b></span></td>
					<td width="7%" colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>11</b></span></td>
					<td width="7%" colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>12</b></span></td>
					<td colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>13</b></span></td>
					<td colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>14=13/8*100</b></span></td>
					<td colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>15=7+13</b></span></td>
					<td colspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>16=14/6x100</b></span></td>
					<td rowspan="2" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>17</b></span></td>
				</tr>
				<tr>
					<td  width="3%" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>K</b></span></td>
					<td  width="5%"  align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Rp</b></span></td>
					<td  width="3%" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>K</b></span></td>
					<td  width="5%"  align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Rp</b></span></td>
					<td  width="3%" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>K</b></span></td>
					<td  width="6%"  align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Rp</b></span></td>
					<td  width="2%" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>K</b></span></td>
					<td  width="5%"  align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Rp</b></span></td>
					<td  width="2%" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>K</b></span></td>
					<td  width="5%"  align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Rp</b></span></td>
					<td  width="2%" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>K</b></span></td>
					<td  width="5%"  align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Rp</b></span></td>
					<td  width="2%" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>K</b></span></td>
					<td  width="5%"  align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Rp</b></span></td>
					<td  width="3%" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>K</b></span></td>
					<td  width="5%"  align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Rp</b></span></td>
					<td  width="2.5%" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>K</b></span></td>
					<td  width="2.5%"  align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Rp</b></span></td>
					<td  width="3%" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>K</b></span></td>
					<td  width="5%"  align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Rp</b></span></td>
					<td  width="3%" align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>K</b></span></td>
					<td  width="3%"  align="center"><span style="font-size: 7pt;font-family:Tahoma;font-weight: normal;"><b>Rp</b></span></td>
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
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{$tmp+=1}}</span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=left><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{$skpd->kode_skpd}}</span></td>
					<td align=left colspan="25"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span>{{$skpd->nama_skpd}}</td>
				</tr>

				@php
					$program = \App\Program::where(['id_skpd' => $skpd->id])->groupBy('id_bidang_urusan')->pluck('id_bidang_urusan');
					$tmp_bidang_urusan = \App\BidangUrusan::whereIn('id', $program)->groupBy('id_urusan')->pluck('id_urusan');
					$data_urusan = \App\Urusan::whereIn('id', $tmp_bidang_urusan)->get();
				@endphp
				
				@foreach($data_urusan as $i => $urusan)
				<tr>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{$tmp+=1}}</span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=left><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{$urusan->kode_urusan}}</span></td>
					<td align=left colspan="25"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{$urusan->nama_urusan}}</span></td>
				</tr>

				@foreach($urusan->BidangUrusan as $bidang)
				@if(isset($bidang->Program[0]) && $bidang->Program[0]->id_skpd == $skpd->id)
				<tr>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{$tmp+=1}}</span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=left><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{$bidang->kode_bidang_urusan}}</span></td>
					<td align=left colspan="25"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{$bidang->nama_bidang_urusan}}</span></td>
				</tr>
				@endif

				@foreach($bidang->Program as $program)
				@if($program->id_skpd == $skpd->id)

				<tr>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $tmp+=1}}</span></td>
					<td align=justify><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=left><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $program->kode_program }}</span></td>
					<td align=left colspan="25"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $program->nama_program }}</span></td>
				</tr>

				@foreach($program->Kegiatan as $kegiatan)
				<tr>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $tmp+=1}}</span></td>
					<td align=justify><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=left><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $kegiatan->kode_kegiatan }}</span></td>
					<td align=left colspan="25"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $kegiatan->nama_kegiatan }}</span></td>
				</tr>

				@foreach($kegiatan->SubKegiatan as $it => $sub_kegiatan)
				@php
					if ($sub_kegiatan->pagu_indikatif_sub_keg_1 != 0) {
						$c_sub_keg += 1;
					}
				@endphp
				@if ($sub_kegiatan->pagu_indikatif_sub_keg_1 != 0)
				<tr>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $tmp+=1}}</span></td>
					<td align=justify><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=left><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $sub_kegiatan->kode_sub_keg }}</span></td>
					<td align=left><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $sub_kegiatan->nama_sub_keg }}</span></td>
					<td align=left><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $sub_kegiatan->indikator_sub_keg }}</span></td>
					<td align="right"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align="right"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align="right"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align="right"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ $target = $sub_kegiatan->target_sub_keg_1 }}</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">@currency( $pagu = $sub_kegiatan->pagu_indikatif_sub_keg_1)</span></td>
					@if($tw == 1)
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() != 0)
						{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() }}
						@endif --}}
						{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_1_1 }}
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first() != 0)
						@currency( $serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first())
						@endif --}}
                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_1_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_2_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_3_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_4_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_5_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_6_1;
                        @endphp
                        @endif
						@currency($serapan1)
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() != 0)
						{{ \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() }}
						@endif --}}
						{{ $sub_kegiatan->realisasi_sub_keg_1_1 }}
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first() != 0)
						@currency(\App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first())
						@endif --}}
                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_1_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_2_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_3_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_4_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_5_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_6_1;
                        @endphp
                        @endif
						@currency($serapan1)
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						@if($realisasi1 == 0 || $target == 0)
						0%
						@else
						@php
							$realisasi_tot += round(($realisasi1)/$target*100, 2);
						@endphp
						{{ round($realisasi1/$target*100, 2) }}%
						{{-- {{ round($realisasi1/$target*100, 2) }}% --}}
						@endif
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						@if($serapan1 == 0 || $pagu == 0)
						0%
						@else
						@php
							$serapan_tot += round(($serapan1)/$pagu*100, 2);	
						@endphp
						{{ round($serapan1/$pagu*100, 2) }}%
						{{-- {{ round($serapan1/$pagu*100, 2) }}% --}}
						@endif
					</span></td>
					@elseif($tw == 2)
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() != 0)
						{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() }}
						@endif --}}
						{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_1_1 }}
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first() != 0)
						@currency( $serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first())
						@endif --}}
                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_1_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_2_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_3_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_4_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_5_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_6_1;
                        @endphp
                        @endif
						@currency($serapan1)
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() != 0)
						{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() }}
						@endif --}}
						{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_1_2 }}
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first() != 0)
						@currency($serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first())
						@endif --}}
                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_1_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_2_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_3_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_4_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_5_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_6_2;
                        @endphp
						@currency($serapan2)
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() != 0)
						{{ \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() }}
						@endif --}}
						{{ $realisasi1+$realisasi2 }}
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first() != 0)
						@currency(\App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first())
						@endif --}}
						@currency($serapan1+$serapan2)
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						@if(($realisasi1+$realisasi2) == 0 || $target == 0)
						0%
						@else
						@php
							$realisasi_tot += round(($realisasi1+$realisasi2)/$target*100, 2);
						@endphp
						{{ round(($realisasi1+$realisasi2)/$target*100, 2) }}%
						{{-- {{ round(($realisasi1+$realisasi2)/$target*100, 2) }}% --}}
						@endif
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						@if(($serapan1+$serapan2) == 0 || $pagu == 0)
						0%
						@else
						@php
							$serapan_tot += round(($serapan1+$serapan2)/$pagu*100, 2);	
						@endphp
						{{ round(($serapan1+$serapan2)/$pagu*100, 2) }}%
						{{-- {{ round(($serapan1+$serapan2)/$pagu*100, 2) }}% --}}
						@endif
					</span></td>
					@elseif($tw == 3)
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() != 0)
						{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() }}
						@endif --}}
						{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_1_1 }}
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first() != 0)
						@currency( $serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first())
						@endif --}}
                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_1_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_2_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_3_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_4_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_5_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_6_1;
                        @endphp
                        @endif
						@currency($serapan1)
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() != 0)
						{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() }}
						@endif --}}
						{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_1_2 }}
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first() != 0)
						@currency($serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first())
						@endif --}}
                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_1_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_2_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_3_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_4_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_5_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_6_2;
                        @endphp
						@currency($serapan2)
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_3')->first() != 0)
						{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_3')->first() }}
						@endif --}}
						{{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_1_3 }}
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_3')->first() != 0)
						@currency($serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_3')->first())
						@endif --}}
                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_1_3;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_2_3;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_3_3;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_4_3;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_5_3;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_6_3;
                        @endphp
						@currency($serapan3)
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_3')->first() != 0)
						{{ \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_3')->first() }}
						@endif --}}
						{{ $realisasi1+$realisasi2+$realisasi3 }}
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_3')->first() != 0)
						@currency(\App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_3')->first())
						@endif --}}
						@currency($serapan1+$serapan2+$serapan3)
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						@if(($realisasi1+$realisasi2+$realisasi3) == 0 || $target == 0)
						0%
						@else
						@php
							$realisasi_tot += round(($realisasi1+$realisasi2+$realisasi3)/$target*100, 2);
						@endphp
						{{ round(($realisasi1+$realisasi2+$realisasi3)/$target*100, 2) }}%
						{{-- {{ round(($realisasi1+$realisasi2+$realisasi3)/$target*100, 2) }}% --}}
						@endif
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						@if(($serapan1+$serapan2+$serapan3) == 0 || $pagu == 0)
						0%
						@else
						@php
							$serapan_tot += round(($serapan1+$serapan2+$serapan3)/$pagu*100, 2);	
						@endphp
						{{ round(($serapan1+$serapan2+$serapan3)/$pagu*100, 2) }}%
						{{-- {{ round(($serapan1+$serapan2+$serapan3)/$pagu*100, 2) }}% --}}
						@endif
					</span></td>
					@elseif($tw == 4)
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() != 0)
						{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_1')->first() }}
						@endif --}}
						{{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_1_1 }}
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first() != 0)
						@currency( $serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_1')->first())
						@endif --}}
                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_1_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_2_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_3_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_4_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_5_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_6_1;
                        @endphp
                        @endif
						@currency($serapan1)
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() != 0)
						{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_2')->first() }}
						@endif --}}
						{{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_1_2 }}
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first() != 0)
						@currency($serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_2')->first())
						@endif --}}
                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_1_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_2_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_3_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_4_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_5_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_6_2;
                        @endphp
						@currency($serapan2)
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_3')->first() != 0)
						{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_3')->first() }}
						@endif --}}
						{{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_1_3 }}
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_3')->first() != 0)
						@currency($serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_3')->first())
						@endif --}}
                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_1_3;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_2_3;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_3_3;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_4_3;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_5_3;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_6_3;
                        @endphp
						@currency($serapan3)
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_4')->first() != 0)
						{{ $realisasi = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_4')->first() }}
						@endif --}}
						{{ $realisasi4 = $sub_kegiatan->realisasi_sub_keg_1_4 }}
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_4')->first() != 0)
						@currency($serapan = \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_4')->first())
						@endif --}}
                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        @php
                            $serapan4 = $sub_kegiatan->serapan_sub_keg_1_4;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        @php
                            $serapan4 = $sub_kegiatan->serapan_sub_keg_2_4;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        @php
                            $serapan4 = $sub_kegiatan->serapan_sub_keg_3_4;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        @php
                            $serapan4 = $sub_kegiatan->serapan_sub_keg_4_4;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        @php
                            $serapan4 = $sub_kegiatan->serapan_sub_keg_5_4;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        @php
                            $serapan4 = $sub_kegiatan->serapan_sub_keg_6_4;
                        @endphp
						@currency($serapan4)
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('realisasi_sub_keg_1_4')->first() != 0)
						{{ 	 }}
						@endif --}}
						{{ $realisasi1+$realisasi2+$realisasi3+$realisasi4 }}
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{-- @if( \App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_4')->first() != 0)
						@currency(\App\DetSubKegiatan::where(['id_sub_keg' => $sub_kegiatan->id])->pluck('serapan_sub_keg_1_4')->first())
						@endif --}}
						@currency($serapan1+$serapan2+$serapan3+$serapan4)
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						@if(($realisasi1+$realisasi2+$realisasi3+$realisasi4) == 0 || $target == 0)
						0%
						@else
						@php
							$realisasi_tot += round(($realisasi1+$realisasi2+$realisasi3+$realisasi4)/$target*100, 2);
						@endphp
						{{ round(($realisasi1+$realisasi2+$realisasi3+$realisasi4)/$target*100, 2) }}%
						{{-- {{ round(($realisasi1+$realisasi2+$realisasi3+$realisasi4)/$target*100, 2) }}% --}}
						@endif
					</span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						@if(($serapan1+$serapan2+$serapan3+$serapan4) == 0 || $pagu == 0)
						0%
						@else
						@php
							$serapan_tot += round(($serapan1+$serapan2+$serapan3+$serapan4)/$pagu*100, 2);	
						@endphp
						{{ round(($serapan1+$serapan2+$serapan3+$serapan4)/$pagu*100, 2) }}%
						{{-- {{ round(($serapan1+$serapan2+$serapan3+$serapan4)/$pagu*100, 2) }}% --}}
						@endif
					</span></td>
					@endif
					@php
					$target = 0; $pagu = 0; 
					@endphp
					
					<td align="center"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align="center"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align="center"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align="center"><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=center><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
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
					<td colspan="19" align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">Rata-rata capaian kinerja (%)</span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ round($realisasi_tot/$c_sub_keg, 2) }}%</span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">{{ round($serapan_tot/$c_sub_keg, 2) }}%</span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=left><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
				</tr>

				<tr>
					<td colspan="19" align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">Predikat Kinerja</span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
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
					</span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
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
					</span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
					<td align=left><span style="font-size: 6pt;font-weight:bold;font-family: Arial;"></span></td>
				</tr>
				
				<tr>
					<td colspan="4" align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">Faktor pendorong keberhasilan:</span></td>
					<td colspan="24" align=left><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{\App\Predikat::where(['id_skpd' => $skpd->id, 'triwulan_predikat' => $tw])->pluck('faktor_pendorong')->first()}}
					</span></td>
				</tr>
				<tr>
					<td colspan="4" align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">Faktor penghambat pencapaian kinerja:</span></td>
					<td colspan="24" align=left><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{\App\Predikat::where(['id_skpd' => $skpd->id, 'triwulan_predikat' => $tw])->pluck('faktor_penghambat')->first()}}
					</span></td>
				</tr>
				<tr>
					<td colspan="4" align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">Tindak lanjut yang diperlukan dalam triwulan berikutnya:</span></td>
					<td colspan="24" align=left><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{\App\Predikat::where(['id_skpd' => $skpd->id, 'triwulan_predikat' => $tw])->pluck('tindak_lanjut_triwulan')->first()}}
					</span></td>
				</tr>
				<tr>
					<td colspan="4" align=right><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">Tindak lanjut yang diperlukan dalam RKPD berikutnya:</span></td>
					<td colspan="24" align=left><span style="font-size: 6pt;font-weight:bold;font-family: Arial;">
						{{\App\Predikat::where(['id_skpd' => $skpd->id, 'triwulan_predikat' => $tw])->pluck('tindak_lanjut_rkpd')->first()}}
					</span></td>
				</tr>
			</tbody>
		</table>
		<br>
		
		<table style="page-break-inside:avoid; page-break-after:auto" border="0" width="60%" align="right">
			<tr>
				<td><span style="font-size: 7pt;font-family: Arial;font-style:normal;font-weight: normal;">Disusun,</span></td><td></td><td><span style="font-size: 7pt;font-family: Arial;font-style:normal;font-weight: normal;">Disetujui,</span></td>
			</tr>
			<tr>
				<td><span style="font-size: 7pt;font-family: Arial;font-style:normal;font-weight: normal;">Jember, {{ \Carbon\Carbon::parse($tgl_susun)->format('d M Y') }}</span></td><td></td><td><span style="font-size: 7pt;font-family: Arial;font-style:normal;font-weight: normal;"></span></td>
			</tr>
			<tr>
				<td><span style="font-size: 7pt;font-family: Arial;font-style:normal;font-weight: normal;">KEPALA BADAN PERENCANAAN DAN PEMBANGUNAN DAERAH</span></td><td></td><td><span style="font-size: 7pt;font-family: Arial;font-style:normal;font-weight: normal;"></span></td>
			</tr>	
			<tr><td colspan="3"></td></tr>
			<tr><td colspan="3"></td></tr>
			<tr><td colspan="3"></td></tr>
			<tr><td colspan="3"></td></tr>
			<tr><td colspan="3"></td></tr>
			<tr><td colspan="3"></td></tr>
			<tr><td colspan="3"></td></tr>
			<tr>
				<td><span style="font-size: 7pt;font-family: Arial;font-style:normal;font-weight: normal;">Drs. HADI MULYONO, M.Si</span></td><td></td><td><span style="font-size: 7pt;font-family: Arial;font-style:normal;font-weight: normal;"></span></td>
			</tr>
			<tr>
				<td><span style="font-size: 7pt;font-family: Arial;font-style:normal;font-weight: normal;">NIP. 19661107 198809 1 001</span></td><td></td><td><span style="font-size: 7pt;font-family: Arial;font-style:normal;font-weight: normal;"></td>
				</tr>
			</table>
		</body>
		</html>