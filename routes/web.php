<?php

Route::get('/', function () {
    return redirect('login');
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('xnt', 'TestController@index'); 
Route::get('xnt2', 'TestController@index2');
Route::get('testingtotal/{id}', 'TestController@testingTotal')->name('testingtotal');
Route::get('cobasasaran', 'TestController@cobaSasaran'); 
Route::get('updateTahunAktif/{tahun}', 'HomeController@updateTahunAktif');

Route::middleware(['auth', 'authadmin'])
->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/testPrint', 'HomeController@testPrint')->name('testPrint');

//SKPD
    Route::get('/skpd/{i}', 'Master\SKPDController@listSKPD')->name('skpd');
    Route::post('/import-skpd', 'Master\SKPDController@importSKPD')->name('import-skpd');
    Route::post('/simpan-skpd', 'Master\SKPDController@simpanSKPD')->name('simpan-skpd');
    Route::post('/ubah-skpd', 'Master\SKPDController@ubahSKPD')->name('ubah-skpd');
    Route::get('/hapus-skpd', 'Master\SKPDController@hapusSKPD')->name('hapus-skpd');

//Urusan
    Route::get('/urusan', 'Master\UrusanController@listUrusan')->name('urusan');
    Route::post('/import-urusan', 'Master\UrusanController@importUrusan')->name('import-urusan');
    Route::post('/simpan-urusan', 'Master\UrusanController@simpanUrusan')->name('simpan-urusan');
    Route::post('/ubah-urusan', 'Master\UrusanController@ubahUrusan')->name('ubah-urusan');
    Route::get('/hapus-urusan/{i}', 'Master\UrusanController@hapusUrusan')->name('hapus-urusan');

//Bidang Urusan
    Route::get('/bidang-urusan', 'Master\BidangController@index')->name('bidang');
    Route::post('/simpan-bidang', 'Master\BidangController@simpanBidang')->name('simpan-bidang');
    Route::post('/ubah-bidang', 'Master\BidangController@ubahBidang')->name('ubah-bidang');
    Route::get('/hapus-bidang/{i}', 'Master\BidangController@hapusBidang')->name('hapus-bidang');

//Program
    Route::get('/program/{i}', 'Master\ProgramController@index')->name('program');
    Route::post('/simpan-program', 'Master\ProgramController@simpanProgram')->name('simpan-program');
    Route::post('/ubah-program', 'Master\ProgramController@ubahProgram')->name('ubah-program');
    Route::get('/hapus-program/{i}', 'Master\ProgramController@hapusProgram')->name('hapus-program');

//Kegiatan
    Route::get('/program-kegiatan/{i}', 'Master\KegiatanController@index')->name('program-kegiatan');
    Route::get('/kegiatan/{i}', 'Master\KegiatanController@listKegiatan')->name('kegiatan');
    Route::post('/simpan-kegiatan', 'Master\KegiatanController@simpanKegiatan')->name('simpan-kegiatan');
    Route::post('/ubah-kegiatan', 'Master\KegiatanController@ubahKegiatan')->name('ubah-kegiatan');
    Route::get('/hapus-kegiatan/{i}', 'Master\KegiatanController@hapusKegiatan')->name('hapus-kegiatan');

//Sub-Kegiatan
    Route::get('/list-subkegiatan/{i}', 'Master\SubKegiatanController@index')->name('list-subkegiatan');
    Route::post('/simpan-subkegiatan', 'Master\SubKegiatanController@simpanSubKegiatan')->name('simpan-subkegiatan');
    Route::post('/ubah-subkegiatan', 'Master\SubKegiatanController@ubahSubKegiatan')->name('ubah-subkegiatan');
    Route::get('/hapus-subkegiatan/{i}', 'Master\SubKegiatanController@hapusSubKegiatan')->name('hapus-subkegiatan');

//Menu RPJMD
    Route::get('/rpjmd-program/{i}', 'Admin\RPJMDController@rpjm')->name('rpjmd-program');
    Route::get('/rpjmd-ubah/{i}', 'Admin\RPJMDController@ubahRPJM')->name('rpjm-ubah');
    Route::post('/rpjmd-simpan/{i}', 'Admin\RPJMDController@simpanRPJM')->name('rpjm-simpan');

//Menu RENSTRA
    Route::get('/renstra-program/{i}', 'Admin\RenstraController@program')->name('renstra-program');
    Route::get('/renstra-kegiatan/{i}', 'Admin\RenstraController@kegiatan')->name('renstra-kegiatan');
    Route::get('/renstra-ubah/{i}', 'Admin\RenstraController@ubahRENSTRA')->name('renstra-ubah');
    Route::get('/renstra-subkegiatan/{i}', 'Admin\RenstraController@subkegiatan')->name('renstra-subkegiatan');
    Route::get('/renstra-ubah-subkegiatan/{i}', 'Admin\RenstraController@ubahSubkegiatanRENSTRA')->name('renstra-ubah-subkegiatan');
    Route::post('/renstra-simpan-subkegiatan/{i}', 'Admin\RenstraController@simpanSubkegiatanRENSTRA')->name('renstra-simpan-subkegiatan');

//Menu RKPD
    Route::get('/rkpd-program/{i}', 'Admin\RkpdController@program')->name('rkpd-program');
    Route::get('/rkpd-kegiatan/{i}', 'Admin\RkpdController@kegiatan')->name('rkpd-kegiatan');
    Route::get('/rkpd-subkegiatan/{i}', 'Admin\RkpdController@subkegiatan')->name('rkpd-subkegiatan');
    Route::get('/rkpd-ubah/{i}', 'Admin\RkpdController@ubahRKPD')->name('rkpd-ubah');
    Route::post('/rkpd-simpan/{i}', 'Admin\RKPDController@simpanRKPD')->name('rkpd-simpan');

//Menu SIPPD
    Route::get('/sippd', 'Admin\SIPPDController@index')->name('sippd');
    Route::get('/sippd-program/{i}', 'Admin\SIPPDController@indexProgram')->name('sippd-program');
    Route::get('/sippd-kegiatan/{i}', 'Admin\SIPPDController@indexKegiatan')->name('sippd-kegiatan');
    Route::get('/sippd-subkegiatan/{i}', 'Admin\SIPPDController@indexSubKegiatan')->name('sippd-subkegiatan');
    Route::get('/sippd-edit/{i}', 'Admin\SIPPDController@editSubKegiatan')->name('sippd-edit');
    Route::post('/sippd-simpan/{i}', 'Admin\SIPPDController@simpanSubKegiatan')->name('sippd-simpan');
    // Route::get('/sippd-tambah/{id}', 'Admin\SIPPDController@createSubKegiatan')->name('sippd-tambah');
    // Route::post('/update-subkegiatan', 'Admin\SIPPDController@updateSubKegiatan')->name('update-subkegiatan');

//Menu Sasaran
    Route::get('/sasaran-skpd', 'Admin\SasaranController@listSKPD')->name('sasaran-skpd');
    Route::get('/sasaran', 'Admin\SasaranController@index')->name('sasaran');
    Route::get('/sasaran-tambah', 'Admin\SasaranController@create')->name('tambah-sasaran');
    Route::get('/sasaran-ubah', 'Admin\SasaranController@edit')->name('ubah-sasaran');
    Route::get('/sasaran-program', 'Admin\SasaranController@programSasaran')->name('program-sasaran');
    Route::get('/sasaran-tambah-program', 'Admin\SasaranController@createProgram')->name('tambah-program-sasaran');

//Menu Prioritas
    Route::get('/prioritas-skpd', 'Admin\PrioritasNasionalController@listSKPD')->name('prioritas-skpd');

//Menu Predikat
    Route::get('/predikat', 'Admin\PredikatController@index')->name('predikat');
    Route::get('/predikat-grafik', 'Admin\PredikatController@indexGrafik')->name('predikat-grafik');
    Route::get('/predikat-total', 'Admin\PredikatController@indexTotal')->name('predikat-total');
    Route::get('/predikat-total-skpd', 'Admin\PredikatController@indexTotalSKPD')->name('predikat-total-skpd');

//Menu Laporan
    //Laporan Urusan
    Route::get('/laporan-urusan', 'Admin\LaporanController@laporanUrusan')->name('laporan-urusan');
    Route::get('/pilih-triwulan-urusan/{i}', 'Admin\LaporanController@cetakUrusan')->name('pilih-triwulan-urusan');
    Route::get('/laporan-urusan-cetak/{i}/{tw}', 'Admin\LaporanController@cetakLaporanUrusan')->name('laporan-urusan-cetak');
    //End Of Laporan Urusan

    //Laporan Organisasi
    Route::get('/laporan-organisasi/{id}', 'Admin\LaporanController@laporanOrganisasi')->name('laporan-organisasi');
    Route::get('/laporan-organisasi-opd', 'Admin\LaporanController@organisasiOPD')->name('laporan-organisasi-opd');
    Route::get('/laporan-organisasi-cetak/{i}/{tw}', 'Admin\LaporanController@cetakLaporanOrganisasi')->name('laporan-organisasi-cetak');
    //End Of Laporan Organisasi

    Route::get('/laporan-opd', 'Admin\LaporanController@laporanOPD')->name('laporan-opd');
    Route::get('/laporan-opd-cetak', 'Admin\LaporanController@cetakOPD')->name('laporan-opd-cetak');
    
    Route::get('/laporan-total', 'Admin\LaporanController@laporanTotal')->name('laporan-total');
    Route::post('/laporan-total-cetak/{tw}', 'Admin\LaporanController@cetakLaporanTotalExcel')->name('laporan-total-cetak');
    Route::get('/laporan-prioritas-nasional', 'Admin\LaporanController@prioritasNasional')->name('laporan-prioritas-nasional');
    
    Route::get('/laporan-lokasi', 'Admin\LaporanController@laporanLokasi')->name('laporan-lokasi');
    Route::get('/laporan-lokasi-cetak', 'Admin\LaporanController@cetakLokasi')->name('laporan-lokasi-cetak');
    Route::get('/laporan-kinerja', 'Admin\LaporanController@laporanKinerja')->name('laporan-kinerja');
    Route::get('/laporan-kinerja-urusan', 'Admin\LaporanController@laporanKinerjaUrusan')->name('laporan-kinerja-urusan');

    Route::get('/data-upload/{i}', 'Admin\LaporanController@dataUpload')->name('data-upload');

//Menu User
    Route::get('user-bidang', 'Master\UserController@userBidang')->name('user-bidang');
    Route::get('edit-user/{i}', 'Master\UserController@editUser')->name('edit-user');
    Route::post('simpan-user/{i}', 'Master\UserController@simpanUser')->name('simpan-user');
    Route::get('list-user-bidang', 'Master\UserController@listUserBidang')->name('list-user-bidang');

});

Route::middleware(['auth', 'authbidang'])
->group(function(){
    Route::get('/dashboard-bidang', 'BidangController@index')->name('dashboard-bidang');

    Route::get('/skpd-rpjmd-bidang', 'Bidang\RPJMDController@listSKPD')->name('skpd-rpjmd-bidang');
    Route::get('/skpd-renstra-bidang', 'Bidang\RenstraController@listSKPD')->name('skpd-renstra-bidang');
    Route::get('/skpd-rkpd-bidang', 'Bidang\RKPDBidangController@listSKPD')->name('skpd-rkpd-bidang');
    Route::get('/skpd-sippd-bidang', 'Bidang\SIPPDBidangController@listSKPD')->name('skpd-sippd-bidang');
    Route::get('/skpd-predikat-bidang', 'Bidang\PredikatBidangController@listSKPD')->name('skpd-predikat-bidang');

    Route::get('/rpjmd-bidang/{i}', 'Bidang\RPJMDController@rpjm')->name('rpjmd-bidang');

    Route::get('/renstra-program-bidang/{i}', 'Bidang\RenstraController@program')->name('renstra-program-bidang');
    Route::get('/renstra-kegiatan-bidang/{i}', 'Bidang\RenstraController@kegiatan')->name('renstra-kegiatan-bidang');
    Route::get('/renstra-subkegiatan-bidang/{i}', 'Bidang\RenstraController@subkegiatan')->name('renstra-subkegiatan-bidang');

    Route::get('/rkpd-program-bidang/{i}', 'Bidang\RKPDBidangController@program')->name('rkpd-program-bidang');
    Route::get('/rkpd-kegiatan-bidang/{i}', 'Bidang\RKPDBidangController@kegiatan')->name('rkpd-kegiatan-bidang');
    Route::get('/rkpd-subkegiatan-bidang/{i}', 'Bidang\RKPDBidangController@subkegiatan')->name('rkpd-subkegiatan-bidang');

    Route::get('/sippd-program-bidang/{i}', 'Bidang\SIPPDBidangController@program')->name('sippd-program-bidang');
    Route::get('/sippd-kegiatan-bidang/{i}', 'Bidang\SIPPDBidangController@kegiatan')->name('sippd-kegiatan-bidang');
    Route::get('/sippd-subkegiatan-bidang/{i}', 'Bidang\SIPPDBidangController@subkegiatan')->name('sippd-subkegiatan-bidang');
    Route::get('/sippd-subkegiatan-bidang-edit/{i}', 'Bidang\SIPPDBidangController@edit')->name('sippd-subkegiatan-bidang-edit');
    Route::post('/sippd-subkegiatan-bidang-update/{i}', 'Bidang\SIPPDBidangController@update')->name('sippd-subkegiatan-bidang-update');

    // Route::get('/sippd', 'Admin\SIPPDController@index')->name('sippd');
    // Route::get('/sippd-program/{i}', 'Admin\SIPPDController@indexProgram')->name('sippd-program');
    // Route::get('/sippd-kegiatan/{i}', 'Admin\SIPPDController@indexKegiatan')->name('sippd-kegiatan');
    // Route::get('/sippd-subkegiatan/{i}', 'Admin\SIPPDController@indexSubKegiatan')->name('sippd-subkegiatan');
    // Route::get('/sippd-edit/{i}', 'Admin\SIPPDController@editSubKegiatan')->name('sippd-edit');
    // Route::post('/sippd-simpan/{i}', 'Admin\SIPPDController@simpanSubKegiatan')->name('sippd-simpan');

    Route::get('/predikat-bidang/{i}', 'Bidang\PredikatBidangController@predikat')->name('predikat-bidang');
    Route::get('/predikat-verifikasi-bidang/{id}', 'Bidang\PredikatBidangController@verifikasi')->name('predikat-verifikasi-bidang');
    Route::post('/predikat-update-bidang', 'Bidang\PredikatBidangController@update')->name('predikat-update-bidang');

    Route::get('edit-user-bidang/{i}', 'Bidang\UserController@editUser')->name('edit-user-bidang');
    Route::post('simpan-user-bidang/{i}', 'Bidang\UserController@simpanUser')->name('simpan-user-bidang');

});

Route::middleware(['auth', 'authopd'])
->group(function(){
    Route::get('/dashboard-opd', 'OPDController@index')->name('dashboard-opd');

    Route::get('/rpjmd-program-opd', 'OPD\RPJMDOPDController@program')->name('rpjmd-program-opd');

    Route::get('/renstra-program-opd', 'OPD\RenstraOPDController@program')->name('renstra-program-opd');
    Route::get('/renstra-kegiatan-opd/{i}', 'OPD\RenstraOPDController@kegiatan')->name('renstra-kegiatan-opd');
    Route::get('/renstra-subkegiatan-opd/{i}', 'OPD\RenstraOPDController@subkegiatan')->name('renstra-subkegiatan-opd');

    Route::get('/rkpd-program-opd', 'OPD\RKPDOPDController@program')->name('rkpd-program-opd');
    Route::get('/rkpd-kegiatan-opd/{i}', 'OPD\RKPDOPDController@kegiatan')->name('rkpd-kegiatan-opd');
    Route::get('/rkpd-subkegiatan-opd/{i}', 'OPD\RKPDOPDController@subkegiatan')->name('rkpd-subkegiatan-opd');

    Route::get('/sippd-program-opd', 'OPD\SIPPDOPDController@program')->name('sippd-program-opd');
    Route::get('/sippd-kegiatan-opd/{i}', 'OPD\SIPPDOPDController@kegiatan')->name('sippd-kegiatan-opd');
    Route::get('/sippd-subkegiatan-opd/{i}', 'OPD\SIPPDOPDController@subkegiatan')->name('sippd-subkegiatan-opd');
    Route::get('/sippd-subkegiatan-opd-edit/{i}', 'OPD\SIPPDOPDController@edit')->name('sippd-subkegiatan-opd-edit');
    Route::post('/sippd-subkegiatan-opd-update/{i}', 'OPD\SIPPDOPDController@edit')->name('sippd-subkegiatan-opd-update');

    Route::get('/predikat-opd', 'OPD\PredikatOPDController@predikat')->name('predikat-opd');
    Route::get('/predikat-faktor-opd/{id}', 'OPD\PredikatOPDController@faktor')->name('predikat-faktor-opd');
    Route::post('/predikat-update-opd', 'OPD\PredikatOPDController@update')->name('predikat-update-opd');

    Route::get('test', 'OPD\PredikatOPDController@test')->name('test');

    Route::get('/kinerja-program-opd', 'OPD\KinerjaOPDController@program')->name('kinerja-program-opd');
    Route::get('/kinerja-kegiatan-opd/{i}', 'OPD\KinerjaOPDController@kegiatan')->name('kinerja-kegiatan-opd');
    Route::get('/kinerja-subkegiatan-opd/{i}', 'OPD\KinerjaOPDController@subkegiatan')->name('kinerja-subkegiatan-opd');
    Route::post('/kinerja-program-update', 'OPD\KinerjaOPDController@kinerjaProgram')->name('kinerja-program-update');
    Route::post('/kinerja-kegiatan-update', 'OPD\KinerjaOPDController@kinerjaKegiatan')->name('kinerja-kegiatan-update');

    Route::get('/sasaran-opd', 'OPD\SasaranOPDController@index')->name('sasaran-opd');
    Route::get('/sasaran-create-opd', 'OPD\SasaranOPDController@create')->name('sasaran-create-opd');
    Route::post('/sasaran-store-opd', 'OPD\SasaranOPDController@store')->name('sasaran-store-opd');
    Route::get('/sasaran-edit-opd/{id}', 'OPD\SasaranOPDController@edit')->name('sasaran-edit-opd');
    Route::post('/sasaran-update-opd', 'OPD\SasaranOPDController@update')->name('sasaran-update-opd');
    Route::get('/sasaran-delete-opd/{id}', 'OPD\SasaranOPDController@delete')->name('sasaran-delete-opd');

    Route::get('/sasaran-program-opd/{id}', 'OPD\SasaranOPDController@program')->name('sasaran-program-opd');
    Route::get('/sasaran-program-create-opd', 'OPD\SasaranOPDController@createProgram')->name('sasaran-program-create-opd');
    Route::post('/sasaran-program-store-opd', 'OPD\SasaranOPDController@storeProgram')->name('sasaran-program-store-opd');
    Route::post('/sasaran-program-update-opd', 'OPD\SasaranOPDController@updateProgram')->name('sasaran-program-update-opd');
    Route::get('/sasaran-program-delete-opd/{id}', 'OPD\SasaranOPDController@deleteProgram')->name('sasaran-program-delete-opd');

    Route::get('/prioritas-program-opd', 'OPD\PrinasOPDController@program')->name('prioritas-program-opd');
    Route::get('/prioritas-kegiatan-opd/{i}', 'OPD\PrinasOPDController@kegiatan')->name('prioritas-kegiatan-opd');
    Route::get('/prioritas-subkegiatan-opd/{i}', 'OPD\PrinasOPDController@subkegiatan')->name('prioritas-subkegiatan-opd');
    Route::post('/prioritas-store-opd', 'OPD\PrinasOPDController@storePrioritas')->name('prioritas-store-opd');

    Route::get('edit-user-opda/{i}', 'OPD\UserController@editUser')->name('edit-user-opd');
    Route::post('simpan-user-opda/{i}', 'OPD\UserController@simpanUser')->name('simpan-user-opd');

    Route::get('upload-laporan-opd', 'OPD\LaporanController@index')->name('upload-laporan-opd');
    Route::post('simpan-laporan-opd', 'OPD\LaporanController@store')->name('simpan-laporan-opd');

    Route::get('/laporan-konsistensi', 'OPD\LaporanController@laporanKonsistensi')->name('laporan-konsistensi');
    Route::post('/laporan-konsistensi-cetak/{i}/{tw}', 'OPD\LaporanController@cetakLaporanKonsistensi')->name('laporan-konsistensi-cetak');
});


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
Route::get('laporan/bab3/{id}', 'LKPJ\LaporanOPDController@bab3')->name('bab3');
Route::get('laporan/bab4/{id}', 'LKPJ\LaporanOPDController@bab4')->name('bab4');
Route::get('laporan/printcover/{id}', 'LKPJ\LaporanOPDController@printCover')->name('printcover');

Route::get('setting-bab3', 'LKPJ\SettingLKPJController@verifBab3')->name('setting-bab3');
Route::post('update-verif-bab3', 'LKPJ\SettingLKPJController@updateVerifBab3')->name('update-verif-bab3');

Route::get('clear', function()
{
    \Artisan::call('optimize:clear');
});
