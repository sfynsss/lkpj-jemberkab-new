<aside class="main-sidebar">
   <section class="sidebar position-relative">
      <div class="multinav">
         <div class="multinav-scroll" style="height: 100%;">
            <ul class="sidebar-menu" data-widget="tree">
               <li class="header">Menu</li>
               <li>
                  <a href="{{ route('home') }}">
                     <i class="fa fa-home"><span class="path1"></span><span class="path2"></span></i>
                     Dashboard
                  </a>
               </li>

               <li class="header">Data Pembangunan</li>
               <li>
                  <a href="#">
                     <i span class="fa fa-check-square-o"><span class="path1"></span><span class="path2"></span></i>
                     Capaian IKD
                  </a>
               </li>
               <li>
                  <a href="#">
                     <i span class="fa fa-university"><span class="path1"></span><span class="path2"></span></i>
                     Capaian Pembangunan
                  </a>
               </li>

               <li class="header">Penyelenggaraan Urusan</li>
               <li>
                  <a href="{{ route('program-unggulan') }}">
                     <i span class="fa fa-check-square-o"><span class="path1"></span><span class="path2"></span></i>
                     Prog/Keg/SubKegiatan
                  </a>
               </li>
               <li>
                  <a href="{{ route('kebijakan-strategis') }}">
                     <i span class="fa fa-star-half-o"><span class="path1"></span><span class="path2"></span></i>
                     Kebijakan Strategis
                  </a>
               </li>
               <li>
                  <a href="#">
                     <i span class="fa fa-university"><span class="path1"></span><span class="path2"></span></i>
                     Rekomendasi DPRD
                  </a>
               </li>
               <li class="header">Lainnya</li>
               {{-- <li><a href="{{ route('program-unggulan') }}"><i span class="fa fa-thumbs-up"><span class="path1"></span><span class="path2"></span></i>Program Unggulan</a></li> --}}
               @if (Auth::user()->skpd_id == 36)
               <li><a href="{{ route('laporan-kategori') }}"><i span class="fa fa-bar-chart"><span class="path1"></span><span class="path2"></span></i>Data Statistik</a></li>                   
               @endif
               @if (Auth::user()->skpd_id == 37)
               <li><a href="{{ route('laporan-kategori') }}"><i span class="fa fa-bar-chart"><span class="path1"></span><span class="path2"></span></i>Data Penjabaran</a></li>                   
               @endif
               <li><a href="#"><i span class="fa fa-universal-access"><span class="path1"></span><span class="path2"></span></i>Tugas Pembantuan</a></li>
               <li><a href="#"><i span class="fa fa-support"><span class="path1"></span><span class="path2"></span></i>Kebencanaan</a></li>

               @if(Auth::user()->hak_akses == "ADMIN")
               <li class="treeview">
                  <a href="#">
                  <i span class="fa fa-pencil-square"><span class="path1"></span><span class="path2"></span></i>
                  <span>Penutup</span>
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

{{-- INSERT INTO `statistik_induk`(`kategori_id`, `kode_data`, `nama_data`, `urutan_data`) VALUES (



1.1 PENDAPATAN ASLI DAERAH (PAD) 0
1.1.1 Pajak Daerah 1
1.1.1 Retribusi Daerah 1
1.1.1 Hasil Pengelolaan Kekayaan Daerah 1

2.1 BELANJA OPERASI 0
2.1.1 Belanja Pegawai 1
2.1.2 Belanja Barang dan Jasa 1
2.1.5 Belanja Hibah 1
2.1.6 Belanja Bantuan Sosial 1

3.1 Penerimaan Pembayaran 0
3.1.1 Sisa Lebih Perhitungan Anggaran Tahun Anggaran Sebelumnya (SILPA) 1
3.1.1 Penerimaan Kembali Pemberian Pinjaman Pengembalian Pokok Dana Bergulir 1

1 Pajak Daerah 1

1 Retribusi Daerah 1

1 Hasil Pengelolaan Kekayaan Darah yang Dipisahkan 1

1 Lain-lain PAD yang Sah 1

1 Dana Transfer Umum-Dana Bagi Hasil (DBH) 1

1 DBH Pajak Bumi dan Bangunan 1
2 DBH PPh Pasal 21 1
3 DBH PPh Pasal 25 dan Pasal 29/WPOPDN 1
4 DBH Cukai Hasil Tembakau (CHT) 1

1 DAU 1
2 Dana Alokasi Umum Tambahan Kelurahan - LRA 1

1 Dana Transfer Khusus - Dana Alokasi Khusus (DAK) Fisik
null DAK Fisik Bidang Jalan Reguler Jalan
null DAK Fisik Bidang Irigasi Penugasan
null DAK Fisik Bidang Kesehatan dan KB Penugasan Keluarga Berencana
null DAK Fisik Bidang Perumahan dan Pemukiman Afirmasi Penyediaan Rumah Khusus

1 Pendapatan Bagi Hasil
2 Bantuan Keuangan

1 Pendapatan Bagi Hasil Pajak Kendaraan Bermotor
2 Pendapatan Bagi Hasil Bea Balik Nama Kendaraan Bermotor
3 Pendapatan Bagi Hasil Pajak Bahan Bakar Kendaraan Bermotor
4 Pendapatan Bagi Hasil Pajak Rokok
5 Pendapatan Bagi Hasil Pajak Air Permukaan

1 Pendapatan Hibah
2 Lain-lain Pendapatan Sesuai dengan Ketentuan Peraturan Perundang-Undangan


null Pendapatan 0
null Pendapatan Asli Daerah 1
null Pendapatan Transfer 1
null Lain-Lain Pendapatan Daerah yang Sah 1 --}}

