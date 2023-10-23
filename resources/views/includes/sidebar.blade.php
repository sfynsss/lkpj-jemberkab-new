<aside class="main-sidebar">
   <section class="sidebar position-relative">
      <div class="multinav">
         <div class="multinav-scroll" style="height: 100%;">
            <ul class="sidebar-menu" data-widget="tree">
               <li class="header">Menu</li>
               <li><a href="{{ route('home') }}"><i class="fa fa-home"><span class="path1"></span><span class="path2"></span></i>Dashboard</a></li>
               <li class="header">Pengelolaan Laporan</li>
               <li class="treeview">
                  <a href="#">
                  <i span class="fa fa-check-square-o"><span class="path1"></span><span class="path2"></span></i>
                  <span>Lampiran. I</span>
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
                  <i span class="fa fa-object-group"><span class="path1"></span><span class="path2"></span></i>
                  <span>Lampiran. II</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="{{ route('program-unggulan') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Program Unggulan</a></li>
                  </ul>
               </li>
               <li class="treeview">
                  <a href="#">
                  <i span class="fa fa-inbox"><span class="path1"></span><span class="path2"></span></i>
                  <span>Lampiran. III</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     @if (Auth::user()->hak_akses == 'ADMIN')
                     <li><a href="{{ route('urusan') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Master Urusan</a></li>
                     @endif
                     <li><a href="{{ route('opd-indikatorutama') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Indikator Utama</a></li>
                     <li><a href="{{ route('opd-capaianutama') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Capaian Kinerja Utama</a></li>
                  </ul>
               </li>
               @if(Auth::user()->hak_akses == "ADMIN")
               <li class="treeview">
                  <a href="#">
                  <i span class="fa fa-pencil-square"><span class="path1"></span><span class="path2"></span></i>
                  <span>Lampiran. IV</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="{{ route('penutup-opd') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Penutup OPD</a></li>
                     @if (Auth::user()->hak_akses == 'ADMIN')
                     <li><a href="{{ route('penutup-admin') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Penutup Admin</a></li>
                     @endif
                  </ul>
               </li>
               @endif
               <li class="header">Laporan</li>
               <li class="treeview">
                  <a href="#">
                  <i span class="fa fa-book"><span class="path1"></span><span class="path2"></span></i>
                  <span>Laporan</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                  </span>
                  </a>
                  <ul class="treeview-menu">
                     @if(Auth::user()->hak_akses == "ADMIN")
                     <li><a href="{{ route('opd', 'printcover') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cover</a></li>
                     <li><a href="{{ route('opd', 'katapengantar') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Kata Pengantar</a></li>
                     @endif
                     <li><a href="{{ route('opd', 'bab1') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lampiran I</a></li>
                     <li><a href="{{ route('opd', 'bab2') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lampiran II</a></li>
                     @if(Auth::user()->hak_akses == "ADMIN")
                     <li><a href="{{ route('bab2-total') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lampiran II Total</a></li>
                     <li><a href="{{ route('bab2-excel') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lampiran II Excel</a></li>
                     @endif
                     <li><a href="{{ route('opd', 'bab3') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lampiran III</a></li>
                     @if(Auth::user()->hak_akses == "ADMIN")
                     <li><a href="{{ route('opd', 'bab4') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lampiran IV</a></li>
                     @endif
                  </ul>
               </li>
               @if (Auth::user()->hak_akses == 'ADMIN')
               <li class="header">Pengaturan</li>
               <li><a href="{{ route('setting-bab3') }}"><i class="fa fa-cog"><span class="path1"></span><span class="path2"></span></i>Pengaturan LKPJ</a></li>
               @endif
            </ul>
         </div>
      </div>
   </section>
   <div class="sidebar-footer">
      <a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
   </div>
</aside>


{{-- Data Statistik :
Indikator Kependudukan Kabupaten Jember Tahun 2017-2021
Jumlah Penduduk, Luas Wilayah dan Kepadatan Penduduk per Kecamatan di Kabupaten Jember Tahun 2021
PDRB Menurut Lapangan Usaha Kabupaten Jember Atas Dasar Harga Konstan Tahun 2017-2021 (dalam Milliar Rupiah)
PDRB Menurut Lapangan Usaha Kabupaten Jember Atas Dasar Harga Berlaku Tahun 2017-2021 (dalam Milliar Rupiah)
Laju Pertumbuhan PDRB Atas Dasar PDHK 2010 Menurut Lapangan Usaha (persen) Tahun 2017 - 2021
Perkembangan Indikator Makro Ekonomi Kabupaten Jember Tahun 2017 - 2021

Penjabaran APBD :
Anggaran dan Realisasi Pendapatan Kabupaten Jember Tahun Anggaran 2021
Anggaran dan Realisasi Belanja Daerah Kabupaten Jember Tahun Anggaran 2021
Anggaran dan Realisasi Pembiayaan Daerah Kabupaten Jember Tahun Anggaran 2021
   Pajak Daerah
   Retribusi Daerah
   Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan
   Lain-lain PAD yang Sah
Anggaran dan Realisasi Pendapatan Transfer Pemerintah Pusat Kabupaten Jember Tahun Anggaran 2021
Anggaran dan Realisasi Pendapatan Dana Transfer Umum - Dana Bagi Hasil (DBH) Kabupaten Jember Tahun Anggaran 2021
Anggaran dan Realisasi Dana Alokasi Umum Kabupaten Jember Tahun Anggaran 2021
Anggaran dan Realisasi Dana Transfer Khusus - Dana Alokasi Khusus (DAK) Kabupaten Jember Tahun Anggaran 2021
Anggaran dan Realisasi Transfer Antar Daerah Kabupaten Jember Tahun Anggaran 2021
Anggaran dan Realisasi Pendapatan Bagi Hasil Kabupaten Jember Tahun Anggaran 2021
Anggaran dan Realisasi Lain-Lain Pendapatan Daerah yang Sah Kabupaten Jember Tahun Anggaran 2021
Anggaran dan Realisasi Belanja Daerah Kabupaten Jember Tahun Anggaran 2021
Anggaran dan Realisasi Pembiayaan Daerah Kabupaten Jember Tahun Anggaran 2021
Perkembangan APBD Kabupaten Jember Tahun Anggaran 2017 - 2021 --}}


