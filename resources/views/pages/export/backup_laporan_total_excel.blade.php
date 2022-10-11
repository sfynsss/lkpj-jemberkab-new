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
			@if ()
				
			@endif
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