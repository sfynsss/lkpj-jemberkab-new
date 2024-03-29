<?php

Route::get('/', function () {
    return redirect('login');
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::middleware(['auth'])
->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('program-unggulan', 'ProgramUnggulanController@index')->name('program-unggulan');
    Route::get('program-unggulan-show/{id}', 'ProgramUnggulanController@show')->name('program-unggulan-show');
    Route::post('program-unggulan-update', 'ProgramUnggulanController@update')->name('program-unggulan-update');
    Route::get('program-unggulan-export', 'ProgramUnggulanController@export')->name('program-unggulan-export');

});

Route::middleware(['auth', 'authbidang'])
->group(function(){
    Route::get('/dashboard-bidang', 'BidangController@index')->name('dashboard-bidang');

    
});

Route::middleware(['auth', 'authopd'])
->group(function(){
    Route::get('/dashboard-opd', 'OPDController@index')->name('dashboard-opd');

   
});

Route::middleware(['auth'])
->group(function(){
    Route::get('/dashboard-bidang', 'BidangController@index')->name('dashboard-bidang');

    Route::get('/home-lkpj', 'LKPJ\HomeController@index')->name('home-lkpj');
    Route::get('/program-lkpj/{skpd}', 'LKPJ\HomeController@program')->name('program-lkpj');
    Route::get('/verif-lkpj/{skpd}', 'LKPJ\HomeController@verif')->name('verif-lkpj');
    Route::get('/kegiatan-lkpj/{id_program}', 'LKPJ\HomeController@kegiatan')->name('kegiatan-lkpj');
    Route::get('/sub-kegiatan-lkpj/{id_kegiatan}', 'LKPJ\HomeController@sub_kegiatan')->name('sub-kegiatan-lkpj');

    /* <------ BAB I ------> */

    Route::get('bab1/indikator/opd', 'LKPJ\Bab1Controller@opdIndikator')->name('opd-indikator');
    Route::get('bab1/indikator/program', 'LKPJ\Bab1Controller@opdProgram')->name('opd-program');

    Route::get('getDataKegiatan/{id}', 'LKPJ\Bab1Controller@getKegiatan');
    Route::get('getDataSubKegiatan/{id}', 'LKPJ\Bab1Controller@getSubKegiatan');

    Route::get('bab1/indikator/sub-kegiatan', 'LKPJ\Bab1Controller@opdSubKegiatan')->name('opd-sub-kegiatan');
    Route::get('bab1/indikator/{id}', 'LKPJ\Bab1Controller@indexIndikator')->name('indikator');
    Route::post('bab1/indikator/tambah', 'LKPJ\Bab1Controller@tambahIndikator')->name('tambah-indikator');
    Route::get('bab1/indikator/hapus/{id}', 'LKPJ\Bab1Controller@hapusIndikator')->name('hapus-indikator');

    Route::get('bab1/capaian/opd', 'LKPJ\Bab1Controller@opdCapaian')->name('opd-capaian');
    Route::get('bab1/capaian/{id}', 'LKPJ\Bab1Controller@indexCapaian')->name('capaian');
    Route::get('bab1/capaian/{id}/tambah', 'LKPJ\Bab1Controller@createCapaian')->name('tambah-capaian');
    Route::get('bab1/capaian/{id}/edit', 'LKPJ\Bab1Controller@editCapaian')->name('edit-capaian');
    Route::get('bab1/capaian/{id}/hapus', 'LKPJ\Bab1Controller@hapusCapaian')->name('hapus-capaian');

    Route::get('getDataIndikator/{urusan}/{skpd}', 'LKPJ\Bab1Controller@getDataIndikator');
    Route::post('bab1/indikator/tambah-detail', 'LKPJ\Bab1Controller@tambahIndikatorDetail')->name('tambah-indikator-detail');
    Route::post('bab1/indikator/edit-detail', 'LKPJ\Bab1Controller@editIndikatorDetail')->name('edit-indikator-detail');

    /* <------ BAB II ------> */

    Route::get('bab2/pks/opd', 'LKPJ\Bab2Controller@opdPKS')->name('opd-pks');
    Route::get('bab2/pks/program/{id}', 'LKPJ\Bab2Controller@programPKS')->name('program-pks');
    Route::post('bab2/ubah-indikator-program', 'LKPJ\Bab2Controller@updateProgram')->name('ubah-indikator-program');
    Route::get('bab2/pks/kegiatan/{id}', 'LKPJ\Bab2Controller@kegiatanPKS')->name('kegiatan-pks');
    Route::post('bab2/ubah-indikator-kegiatan', 'LKPJ\Bab2Controller@updateKegiatan')->name('ubah-indikator-kegiatan');
    Route::get('bab2/pks/subkegiatan/{id}', 'LKPJ\Bab2Controller@subkegiatanPKS')->name('subkegiatan-pks');
    Route::get('bab2/pks/detail/{id}', 'LKPJ\Bab2Controller@detail')->name('detail-pks');
    Route::post('bab2/update-sub-kegiatan', 'LKPJ\Bab2Controller@update')->name('update-sub-kegiatan');

    /* <------ BAB III ------> */

    Route::get('bab3/urusan', 'LKPJ\Bab3Controller@urusan')->name('urusan');
    Route::get('bab3/sub-urusan/{id}', 'LKPJ\Bab3Controller@subUrusan')->name('sub-urusan');

    Route::get('bab3/indikatorutama/opd', 'LKPJ\Bab3Controller@opdIndikatorUtama')->name('opd-indikatorutama');
    Route::get('bab3/capaianutama/opd', 'LKPJ\Bab3Controller@opdCapaianUtama')->name('opd-capaianutama');

    Route::get('bab3/indikatorutama/index/{id}', 'LKPJ\Bab3Controller@indexIndikatorUtama')->name('indikatorutama');
    Route::get('bab3/capaianutama/index/{id}', 'LKPJ\Bab3Controller@indexCapaianUtama')->name('capaianutama');

    Route::get('getBidangUrusan/{id}', 'LKPJ\Bab3Controller@getBidangUrusan');
    Route::post('bab3/indikatorutama/tambah', 'LKPJ\Bab3Controller@tambahIndikatorUtama')->name('tambah-indikator-utama');
    Route::get('bab3/indikator/hapus/{id}', 'LKPJ\Bab3Controller@hapusIndikatorUtama')->name('hapus-indikator-utama');

    // Route::get('bab3/mastersub/mastersub', 'LKPJ\Bab3Controller@indexMasterSub')->name('mastersub');
    // Route::get('bab3/mastersub/suburusan', 'LKPJ\Bab3Controller@indexSubUrusan')->name('suburusan');
    // Route::get('bab3/mastersub/suburusan/suburusanutama', 'LKPJ\Bab3Controller@suburusanUtama')->name('suburusanutama');
    // Route::get('bab3/mastersub/suburusan/suburusanmaster', 'LKPJ\Bab3Controller@suburusanMaster')->name('suburusanmaster');

    Route::get('bab3/capaianutama/create/{id}', 'LKPJ\Bab3Controller@createCapaianUtama')->name('create-capaianutama');
    Route::get('bab3/capaianutama/edit/{id}', 'LKPJ\Bab3Controller@editCapaianUtama')->name('edit-capaianutama');
    Route::post('bab3/capaianutama/update', 'LKPJ\Bab3Controller@updateCapaianUtama')->name('edit-indikator-utama');
    Route::post('bab3/indikatorutama/tambah-detail', 'LKPJ\Bab3Controller@tambahIndikatorUtamaDetail')->name('tambah-indikator-utama-detail');
    Route::get('getDataIndikatorUtama/{urusan}/{skpd}', 'LKPJ\Bab3Controller@getDataIndikatorUtama');

    /* <------ BAB IV ------> */

    Route::get('bab4/penutupopd', 'LKPJ\Bab4Controller@penutupOPD')->name('penutup-opd');
    Route::get('bab4/penutup/{id}', 'LKPJ\Bab4Controller@penutup')->name('penutup');
    Route::post('bab4/penutupopd/update', 'LKPJ\Bab4Controller@updatePenutupOPD')->name('update-penutup-opd');
    Route::get('bab4/penutupadmin', 'LKPJ\Bab4Controller@penutupAdmin')->name('penutup-admin');
    Route::post('bab4/penutupadmin/update', 'LKPJ\Bab4Controller@updatePenutupAdmin')->name('update-penutup-admin');

    /* <------ Laporan OPD III ------> */

    Route::get('laporan/opd/{id}', 'LKPJ\LaporanOPDController@opd')->name('opd');
    Route::get('laporan/katapengantar/{id}', 'LKPJ\LaporanOPDController@kataPengantar')->name('katapengantar');
    Route::get('laporan/bab1/{id}', 'LKPJ\LaporanOPDController@bab1')->name('bab1');
    Route::get('laporan/bab2/{id}', 'LKPJ\LaporanOPDController@bab2')->name('bab2');
    Route::get('laporan/bab2-total', 'LKPJ\LaporanOPDController@bab2_total')->name('bab2-total');
    Route::get('laporan/bab2-excel', 'LKPJ\LaporanOPDController@bab2_excel')->name('bab2-excel');
    Route::get('laporan/bab3/{id}', 'LKPJ\LaporanOPDController@bab3')->name('bab3');
    Route::get('laporan/bab4/{id}', 'LKPJ\LaporanOPDController@bab4')->name('bab4');
    Route::get('laporan/printcover/{id}', 'LKPJ\LaporanOPDController@printCover')->name('printcover');

    Route::get('setting-bab3', 'LKPJ\SettingLKPJController@verifBab3')->name('setting-bab3');
    Route::post('update-verif-bab3', 'LKPJ\SettingLKPJController@updateVerifBab3')->name('update-verif-bab3');

    Route::get('kebijakan-strategis', 'KebijakanStrategisController@index')->name('kebijakan-strategis');
    Route::post('kebijakan-strategis-store', 'KebijakanStrategisController@store')->name('kebijakan-strategis-store');
    Route::post('kebijakan-strategis-update', 'KebijakanStrategisController@update')->name('kebijakan-strategis-update');
    Route::get('kebijakan-strategis-delete/{id}', 'KebijakanStrategisController@delete')->name('kebijakan-strategis-delete');
    Route::get('kebijakan-strategis-export', 'KebijakanStrategisController@export')->name('kebijakan-strategis-export');

    Route::get('rekomendasi-dprd', 'RekomendasiDPRDController@index')->name('rekomendasi-dprd');

    Route::get('capaian-ikd', 'CapaianIKDController@index')->name('capaian-ikd');
    Route::get('capaian-ikd-export', 'CapaianIKDController@export')->name('capaian-ikd-export');
    Route::get('capaian-ikd-admin/{skpd}', 'CapaianIKDController@indexAdmin')->name('capaian-ikd-admin');

    Route::get('tugas-pembantuan', 'TugasPembantuanController@index')->name('tugas-pembantuan');

    Route::get('capaian-pembangunan', 'CapaianPembangunanController@index')->name('capaian-pembangunan');
    Route::get('capaian-pembangunan-show/{id}', 'CapaianPembangunanController@show')->name('capaian-pembangunan-show');
    Route::post('capaian-pembangunan-kategori-store', 'CapaianPembangunanController@storeKategori')->name('capaian-pembangunan-kategori-store');
    Route::post('capaian-pembangunan-kategori-update', 'CapaianPembangunanController@updateKategori')->name('capaian-pembangunan-kategori-update');
    Route::get('capaian-pembangunan-kategori-delete/{id}', 'CapaianPembangunanController@deleteKategori')->name('capaian-pembangunan-kategori-delete');
    Route::post('capaian-pembangunan-data-store', 'CapaianPembangunanController@storeData')->name('capaian-pembangunan-data-store');
    Route::post('capaian-pembangunan-data-update', 'CapaianPembangunanController@updateData')->name('capaian-pembangunan-data-update');
    Route::get('capaian-pembangunan-data-delete/{id}', 'CapaianPembangunanController@deleteData')->name('capaian-pembangunan-data-delete');
    Route::get('capaian-pembangunan-export', 'CapaianPembangunanController@export')->name('capaian-pembangunan-export');
    Route::get('capaian-pembangunan-admin/{id}', 'CapaianPembangunanController@indexAdmin')->name('capaian-pembangunan-admin');

    Route::get('indikator-kependudukan', 'IndikatorKependudukanController@index')->name('indikator-kependudukan');
    Route::post('indikator-kependudukan-update', 'IndikatorKependudukanController@update')->name('indikator-kependudukan-update');

    Route::get('jumlah-penduduk', 'JumlahPendudukController@index')->name('jumlah-penduduk');
    Route::post('jumlah-penduduk-update', 'JumlahPendudukController@update')->name('jumlah-penduduk-update');

    Route::get('tugas-pembantuan', 'TugasPembantuanController@index')->name('tugas-pembantuan');
    Route::get('tugas-pembantuan-create', 'TugasPembantuanController@create')->name('tugas-pembantuan-create');
    Route::get('tugas-pembantuan-edit/{id}', 'TugasPembantuanController@edit')->name('tugas-pembantuan-edit');
    Route::post('tugas-pembantuan-store', 'TugasPembantuanController@store')->name('tugas-pembantuan-store');
    Route::post('tugas-pembantuan-update', 'TugasPembantuanController@update')->name('tugas-pembantuan-update');
    Route::get('tugas-pembantuan-delete/{id}', 'TugasPembantuanController@delete')->name('tugas-pembantuan-delete');
    Route::get('tugas-pembantuan-export', 'TugasPembantuanController@export')->name('tugas-pembantuan-export');

    Route::get('perkembangan-apbd', 'PerkembanganAPBDController@index')->name('perkembangan-apbd');

    Route::get('laporan-kategori', 'LaporanStatistikPenjabaranController@index')->name('laporan-kategori');
    Route::post('laporan-kategori-update', 'LaporanStatistikPenjabaranController@updateKategori')->name('laporan-kategori-update');
    Route::get('laporan-statistik-detail/{id}', 'LaporanStatistikPenjabaranController@statistikShow')->name('laporan-statistik-detail');
    Route::post('laporan-statistik-update', 'LaporanStatistikPenjabaranController@statistikUpdate')->name('laporan-statistik-update');

    Route::get('laporan-penjabaran-detail/{id}/{th}', 'LaporanStatistikPenjabaranController@penjabaranShow')->name('laporan-penjabaran-detail');
    Route::post('laporan-penjabaran-update', 'LaporanStatistikPenjabaranController@penjabaranUpdate')->name('laporan-penjabaran-update');

    Route::get('laporan-kebencanaan', 'LaporanKebencanaanController@index')->name('laporan-kebencanaan');
    Route::post('laporan-kebencanaan-store', 'LaporanKebencanaanController@store')->name('laporan-kebencanaan-store');
    Route::post('laporan-kebencanaan-update', 'LaporanKebencanaanController@update')->name('laporan-kebencanaan-update');
    Route::get('laporan-kebencanaan-delete/{id}', 'LaporanKebencanaanController@delete')->name('laporan-kebencanaan-delete');
    
});




Route::get('clear', function()
{
    \Artisan::call('optimize:clear');
});
