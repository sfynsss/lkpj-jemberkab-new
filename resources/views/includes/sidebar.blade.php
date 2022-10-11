		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						{{-- @if(Auth::user()->hak_akses != "OPD")
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset('backend/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
						</div>
						@endif --}}
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{Auth::user()->nama}}
									<span class="user-level">{{Auth::user()->hak_akses}}</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>
							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">Profil {{Auth::user()->hak_akses}}</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							@if(Auth::user()->hak_akses == 'ADMIN')
							<a href="{{ url('/') }}" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
							@elseif(Auth::user()->hak_akses == 'BIDANG')
							<a href="{{ url('/dashboard-bidang') }}" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
							@else
							<a href="{{ url('/dashboard-opd') }}" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
							@endif
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu Utama</h4>
						</li>
						@if(Auth::user()->hak_akses == 'ADMIN')
						<li class="nav-item">
							<a data-toggle="collapse" href="#master">
								<i class="fas fa-th-list"></i>
								<p>Master</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="master">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{ route('skpd', 'all') }}">
											<span class="sub-item">SKPD</span>
										</a>
									</li>
									<li>
										<a href="{{ route('urusan') }}">
											<span class="sub-item">Urusan</span>
										</a>
									</li>
									<li>
										<a href="{{ route('bidang') }}">
											<span class="sub-item">Bidang Urusan</span>
										</a>
									</li>
									<li>
										<a href="{{ route('skpd', 'program') }}">
											<span class="sub-item">Program</span>
										</a>
									</li>
									<li>
										<a href="{{ route('skpd', 'kegiatan') }}">
											<span class="sub-item">Kegiatan</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						@endif
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Data</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									@if(Auth::user()->hak_akses == 'ADMIN')
									<li>
										<a href="{{ route('skpd', 'rpjmd') }}">
											<span class="sub-item">RPJMD</span>
										</a>
									</li>
									<li>
										<a href="{{ route('skpd', 'renstra') }}">
											<span class="sub-item">RENSTRA</span>
										</a>
									</li>
									<li>
										<a href="{{ route('skpd', 'rkpd') }}">
											<span class="sub-item">RKPD</span>
										</a>
									</li>
									<li>
										<a href="{{ route('skpd', 'sippd') }}">
											<span class="sub-item">SIPPD</span>
										</a>
									</li>
									<li>
										<a href="{{ route('sasaran-skpd') }}">
											<span class="sub-item">Sasaran</span>
										</a>
									</li>
									<li>
										<a href="{{ route('prioritas-skpd') }}">
											<span class="sub-item">Prioritas Nasional</span>
										</a>
									</li>
									@elseif(Auth::user()->hak_akses == 'BIDANG')
									<li>
										<a href="{{ route('skpd-rpjmd-bidang') }}">
											<span class="sub-item">RPJMD</span>
										</a>
									</li>
									<li>
										<a href="{{ route('skpd-renstra-bidang') }}">
											<span class="sub-item">RENSTRA</span>
										</a>
									</li>
									<li>
										<a href="{{ route('skpd-rkpd-bidang') }}">
											<span class="sub-item">RKPD</span>
										</a>
									</li>
									<li>
										<a href="{{ route('skpd-sippd-bidang') }}">
											<span class="sub-item">SIPPD</span>
										</a>
									</li>
									@else
									<li>
										<a href="{{ route('rpjmd-program-opd') }}">
											<span class="sub-item">RPJMD</span>
										</a>
									</li>
									<li>
										<a href="{{ route('renstra-program-opd') }}">
											<span class="sub-item">RENSTRA</span>
										</a>
									</li>
									<li>
										<a href="{{ route('rkpd-program-opd') }}">
											<span class="sub-item">RKPD</span>
										</a>
									</li>
									{{-- <li>
										<a href="{{ route('sippd-program-opd') }}">
											<span class="sub-item">SIPPD</span>
										</a>
									</li> --}}
									<li>
										<a href="{{ route('skpd', 'sippd') }}">
											<span class="sub-item">SIPPD</span>
										</a>
									</li>
									<li>
										<a href="{{ route('kinerja-program-opd') }}">
											<span class="sub-item">Kinerja</span>
										</a>
									</li>
									<li>
										<a href="{{ route('sasaran-opd') }}">
											<span class="sub-item">Sasaran</span>
										</a>
									</li>
									<li>
										<a href="{{ route('prioritas-program-opd') }}">
											<span class="sub-item">Prioritas Nasional</span>
										</a>
									</li>
									@endif
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-chart-bar"></i>
								<p>Predikat</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										@if(Auth::user()->hak_akses == 'ADMIN')
										<a href="{{ route('predikat') }}">
											<span class="sub-item">Predikat</span>
										</a>
										<li>
											<a href="{{ route('predikat-total') }}">
												<span class="sub-item">Predikat Total</span>
											</a>
										</li>
										<li>
											<a href="{{ route('predikat-total-skpd') }}">
												<span class="sub-item">Predikat Total SKPD</span>
											</a>
										</li>
										@elseif(Auth::user()->hak_akses == 'BIDANG')
										<a href="{{ route('skpd-predikat-bidang') }}">
											<span class="sub-item">Predikat</span>
										</a>
										@else
										<a href="{{ route('predikat-opd') }}">
											<span class="sub-item">Predikat OPD</span>
										</a>
										@endif
									</li>

								</ul>
							</div>
						</li>
						{{-- <li class="nav-item">
							<a href="widgets.html">
								<i class="fas fa-desktop"></i>
								<p>SDG's</p>
							</a>
						</li> --}}
						{{-- <li class="nav-item">
							<a href="widgets.html">
								<i class="fas fa-sync-alt"></i>
								<p>Sinkronisasi Target</p>
							</a>
						</li> --}}
						{{-- <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Pengaturan</h4>
						</li> --}}
						<!-- <li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-th-list"></i>
								<p>Konfigurasi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="tables/tables.html">
											<span class="sub-item">Data Upload</span>
										</a>
									</li>
									<li>
										<a href="tables/datatables.html">
											<span class="sub-item">Program</span>
										</a>
									</li>
									<li>
										<a href="tables/datatables.html">
											<span class="sub-item">Kegiatan</span>
										</a>
									</li>
								</ul>
							</div>
						</li> -->
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-user-tie"></i>
								<p>User</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									@if(Auth::user()->hak_akses == "ADMIN")
									<li>
										<a href="{{ route('skpd', 'user') }}">
											<span class="sub-item">User</span>
										</a>
									</li>
									<li>
										<a href="{{ route('user-bidang') }}">
											<span class="sub-item">User Bidang</span>
										</a>
									</li>
									<li>
										<a href="tables/datatables.html">
											<span class="sub-item">User Inspektorat</span>
										</a>
									</li>
									@elseif(Auth::user()->hak_akses == "BIDANG")
									<li>
										<a href="{{ route('edit-user-bidang', Auth::user()->id) }}">
											<span class="sub-item">User</span>
										</a>
									</li>
									@else
									<li>
										<a href="{{ route('edit-user-opd', Auth::user()->id) }}">
											<span class="sub-item">User</span>
										</a>
									</li>
									@endif
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="{{ route('home-lkpj') }}">
								<i class="fa fa-check-square"></i>
								<p>LKPJ</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Laporan</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#charts">
								<i class="far fa-file-alt"></i>
								<p>Rekap Laporan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="charts">
								<ul class="nav nav-collapse">
									@if(Auth::user()->hak_akses == 'ADMIN')
									<li>
										<a href="{{ route('laporan-urusan') }}">
											<span class="sub-item">Laporan per Urusan</span>
										</a>
									</li>
									<li>
										<a href="{{ route('laporan-total') }}">
											<span class="sub-item">Laporan Total</span>
										</a>
									</li>
									<li>
										<a href="{{ route('laporan-prioritas-nasional') }}">
											<span class="sub-item">Prioritas Nasional</span>
										</a>
									</li>
									<li>
										<a href="{{ route('laporan-organisasi-opd') }}">
											<span class="sub-item">Laporan Organisasi</span>
										</a>
									</li>
									<li>
										<a href="{{ route('laporan-lokasi') }}">
											<span class="sub-item">Lap. Lokasi Kegiatan</span>
										</a>
									</li>
									<!-- <li>
										<a href="{{ route('laporan-kinerja') }}">
											<span class="sub-item">Lap. Kinerja per OPD</span>
										</a>
									</li> -->
									<li>
										<a href="{{ route('laporan-kinerja-urusan') }}">
											<span class="sub-item">Lap. Kinerja per Urusan</span>
										</a>
									</li>
									@elseif(Auth::user()->hak_akses == 'OPD')
									<li>
										<a href="{{ route('laporan-konsistensi') }}">
											<span class="sub-item">Laporan Konsistensi</span>
										</a>
									</li>
									@else

									@endif
									
								</ul>
							</div>
						</li>
						@if(Auth::user()->hak_akses == 'ADMIN')
						<li class="nav-item">
							<a href="{{ route('skpd', 'data') }}">
								<i class="fa fa-upload"></i>
								<p>Data Upload</p>
							</a>
						</li>
						@endif
						
						@if(Auth::user()->hak_akses == 'OPD')
						<li class="nav-item">
							<a href="{{ route('upload-laporan-opd') }}">
								<i class="fa fa-upload"></i>
								<p>Upload Laporan</p>
							</a>
						</li>
						@endif
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->