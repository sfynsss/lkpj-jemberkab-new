<aside class="main-sidebar">
   <!-- sidebar-->
   <section class="sidebar position-relative">
      <div class="multinav">
         <div class="multinav-scroll" style="height: 100%;">
            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">
               <li class="header">Menu</li>
               <li><a href="{{ route('home-lkpj') }}"><i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>Dashboard</a></li>
               <li class="header">Pengelolaan Laporan</li>
               <li class="treeview">
                  <a href="#">
                  <i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
                  <span>Bab. I</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="{{ route('opd-indikator') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Indikator Kinerja</a></li>
                     <li><a href="{{ route('opd-capaian') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Capaian Kinerja</a></li>
                  </ul>
               </li>
               <li class="treeview">
                  <a href="#">
                  <i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
                  <span>Bab. II</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="{{ route('opd-pks') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Program, Kegiatan, Sub-Kegiatan</a></li>
                  </ul>
               </li>
               <li class="treeview">
                  <a href="#">
                  <i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
                  <span>Bab. III</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="{{ route('urusan') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Master Urusan</a></li>
                     <li><a href="{{ route('opd-indikatorutama') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Indikator Utama</a></li>
                     <li><a href="{{ route('opd-capaianutama') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Capaian Kinerja Utama</a></li>
                  </ul>
               </li>
               <li class="treeview">
                  <a href="#">
                  <i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
                  <span>Bab. IV</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="{{ route('penutup-opd') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Penutup OPD</a></li>
                  </ul>
               </li>
               <li class="header">Laporan</li>
               <li class="treeview">
                  <a href="#">
                  <i span class="fa fa-file-text"><span class="path1"></span><span class="path2"></span></i>
                  <span>Laporan</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="{{ route('opd', 'printcover') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cover</a></li>
                     <li><a href="{{ route('opd', 'katapengantar') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Kata Pengantar</a></li>
                     <li><a href="{{ route('opd', 'bab1') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bab I</a></li>
                     <li><a href="{{ route('opd', 'bab2') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bab II</a></li>
                     <li><a href="{{ route('opd', 'bab3') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bab III</a></li>
                     <li><a href="{{ route('opd', 'bab4') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bab IV</a></li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>
   </section>
   <div class="sidebar-footer">
      <a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
   </div>
</aside>