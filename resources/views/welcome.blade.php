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
		<div class="col-md-6">
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
		<div class="col-md-6">
			<div class="card full-height">
				<div class="card-body">
					<div class="card-title">OPD Realisasi Tertinggi</div>
					<p>Dinas Pendidikan</p>
					<div class="row py-3">
						<div class="col-md-12">
							<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
								<div class="px-2 pb-2 pb-md-0 text-center">
									<div id="circles-1"></div>
									<h6 class="fw-bold mt-3 mb-0">Target I - IV</h6>
								</div>
								<div class="px-2 pb-2 pb-md-0 text-center">
									<div id="circles-2"></div>
									<h6 class="fw-bold mt-3 mb-0">Realisasi I - IV</h6>
								</div>
								<div class="px-2 pb-2 pb-md-0 text-center">
									<div id="circles-3"></div>
									<h6 class="fw-bold mt-3 mb-0">Prosentase (%)</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-lg-3">
			<div class="card p-3">
				<div class="d-flex align-items-center">
					<span class="stamp stamp-md bg-secondary mr-3">
						<i class="fa fa-dollar-sign"></i>
					</span>
					<div>
						<h5 class="mb-1"><b><a href="#">Total SKPD</a></b></h5>
						<small class="text-muted">{{ \App\Skpd::all()->count() }} SKPD</small>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-3">
			<div class="card p-3">
				<div class="d-flex align-items-center">
					<span class="stamp stamp-md bg-success mr-3">
						<i class="fa fa-shopping-cart"></i>
					</span>
					<div>
						<h5 class="mb-1"><b><a href="#">Total Program</a></b></h5>
						<small class="text-muted">{{ \App\Program::all()->count() }} Program</small>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-3">
			<div class="card p-3">
				<div class="d-flex align-items-center">
					<span class="stamp stamp-md bg-danger mr-3">
						<i class="fa fa-users"></i>
					</span>
					<div>
						<h5 class="mb-1"><b><a href="#">Total Kegiatan</a></b></h5>
						<small class="text-muted">{{ \App\Kegiatan::all()->count() }} Kegiatan</small>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-3">
			<div class="card p-3">
				<div class="d-flex align-items-center">
					<span class="stamp stamp-md bg-warning mr-3">
						<i class="fa fa-comment-alt"></i>
					</span>
					<div>
						<h5 class="mb-1"><b><a href="#">Total Sub-Kegiatan</a></b></h5>
						<small class="text-muted">{{ \App\SubKegiatan::all()->count() }} Sub-Kegiatan</small>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
@endsection