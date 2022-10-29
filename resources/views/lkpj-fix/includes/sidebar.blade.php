<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
        <ul id="sidebarnav">
          <li class="sidebar-item">
            <a class="sidebar-link sidebar-link" href="{{ route('home-lkpj') }}" aria-expanded="false">
              <i data-feather="home" class="feather-icon"></i>
              <span class="hide-menu">Beranda</span>
            </a>
          </li>
          <li class="list-divider"></li>
          <li class="nav-small-cap">
            <span class="hide-menu">Pengelolaan Laporan</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <i data-feather="file-text" class="feather-icon"></i>
              <span class="hide-menu">BAB I</span>
            </a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
              <li class="sidebar-item">
                <a href="{{ route('opd-indikator') }}" class="sidebar-link">
                  <span class="hide-menu"> Indikator Kinerja </span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('opd-capaian') }}" class="sidebar-link">
                  <span class="hide-menu"> Capaian Kinerja </span>
                </a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <i data-feather="file-text" class="feather-icon"></i>
              <span class="hide-menu">BAB II</span>
            </a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
              <li class="sidebar-item">
                <a href="{{ route('opd-pks') }}" class="sidebar-link">
                  <span class="hide-menu"> Program/Kegiatan/SubKegiatan </span>
                </a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <i data-feather="grid" class="feather-icon"></i>
              <span class="hide-menu">BAB III</span>
            </a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
              <li class="sidebar-item">
                <a href="{{ route('urusan') }}" class="sidebar-link">
                  <span class="hide-menu"> Master Urusan </span>
                </a>
              </li>
              {{-- <li class="sidebar-item">
                <a href="{{ route('opd-suburusan') }}" class="sidebar-link">
                  <span class="hide-menu"> Sub Urusan </span>
                </a>
              </li> --}}
              <li class="sidebar-item">
                <a href="{{ route('opd-indikatorutama') }}" class="sidebar-link">
                  <span class="hide-menu"> Indikator Utama </span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('opd-capaianutama') }}" class="sidebar-link">
                  <span class="hide-menu"> Capaian Kinerja Utama </span>
                </a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <i data-feather="bar-chart" class="feather-icon"></i>
              <span class="hide-menu">BAB IV</span>
            </a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
              <li class="sidebar-item">
                <a href="{{ route('penutup-opd') }}" class="sidebar-link">
                  <span class="hide-menu">Penutup OPD</span>
                </a>
              </li>
              @if (Auth::user()->hak_akses == 'ADMIN')
              <li class="sidebar-item">
                <a href="{{ route('penutup-admin') }}" class="sidebar-link">
                  <span class="hide-menu">Penutup Admin</span>
                </a>
              </li>
              @endif
            </ul>
          </li>
          <li class="list-divider"></li>
          <li class="nav-small-cap">
            <span class="hide-menu">Laporan</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <i data-feather="box" class="feather-icon"></i>
              @if (Auth::user()->hak_akses == 'ADMIN')
              <span class="hide-menu">Laporan OPD </span>    
              @elseif (Auth::user()->hak_akses == 'OPD')
              <span class="hide-menu">Laporan</span>
              @endif
            </a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
              <li class="sidebar-item">
                <a href="{{ route('opd', 'printcover') }}" class="sidebar-link">
                  <span class="hide-menu"> Cover </span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('opd', 'katapengantar') }}" class="sidebar-link">
                  <span class="hide-menu"> Kata Pengantar </span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('opd', 'bab1') }}" class="sidebar-link">
                  <span class="hide-menu">Bab I</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('opd', 'bab2') }}" class="sidebar-link">
                  <span class="hide-menu">Bab II</span>
                </a>
              </li>
              @if(Auth::user()->hak_akses == "ADMIN")
              <li class="sidebar-item">
                <a href="{{ route('bab2-total') }}" class="sidebar-link">
                  <span class="hide-menu">Bab II Total</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('bab2-excel') }}" class="sidebar-link">
                  <span class="hide-menu">Bab II Excel</span>
                </a>
              </li>
              @endif
              <li class="sidebar-item">
                <a href="{{ route('opd', 'bab3') }}" class="sidebar-link">
                  <span class="hide-menu">Bab III</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('opd', 'bab4') }}" class="sidebar-link">
                  <span class="hide-menu">Bab IV</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="list-divider"></li>
          <li class="nav-small-cap">
            <span class="hide-menu">SIPPD</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link sidebar-link" href="{{ route('home') }}" aria-expanded="false">
              <i data-feather="home" class="feather-icon"></i>
              <span class="hide-menu">SIPPD</span>
            </a>
          </li>
          @if (Auth::user()->hak_akses == 'ADMIN')
          <li class="list-divider"></li>
          <li class="nav-small-cap">
            <span class="hide-menu">Pengaturan</span>
          </li>
          <li class="sidebar-item">
          <a class="sidebar-link sidebar-link" href="{{ route('setting-bab3') }}" aria-expanded="false">
              <i data-feather="home" class="feather-icon"></i>
              <span class="hide-menu">Pengaturan LKPJ</span>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
  <!-- ============================================================== -->
  <!-- End Left Sidebar - style you can find in sidebar.scss  -->
  <!-- ============================================================== -->
<!-- partial:partials/_sidebar.html -->

