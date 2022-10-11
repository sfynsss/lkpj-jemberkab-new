@extends('layouts.app')

@section('content')

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Selamat datang, </h2>
				<h5 class="text-white op-7 mb-2">Sistem Informasi Pengendalian Pembangunan Daerah Kab. Jember</h5>
			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row mt--2">
		<div class="col-6">
			<div class="card full-height">
				<div class="card-body">
					<div class="card-title">Target dan Realiasi Anggaran</div>
					<p>Target dan Realisasi Triwulan I - IV</p>
					<div class="row py-3">
						<div class="col-md-12">
							<div id="chart-container">
								<canvas id="totalIncomeChart"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
@endsection