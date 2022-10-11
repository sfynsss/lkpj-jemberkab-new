<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['id_skpd'=>1, 'nama'=>'Admin OPD', 'username'=>'101001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>2, 'nama'=>'Admin OPD', 'username'=>'102001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>3, 'nama'=>'Admin OPD', 'username'=>'102002', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>4, 'nama'=>'Admin OPD', 'username'=>'102003', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>5, 'nama'=>'Admin OPD', 'username'=>'102004', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>6, 'nama'=>'Admin OPD', 'username'=>'103001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>7, 'nama'=>'Admin OPD', 'username'=>'103101', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>8, 'nama'=>'Admin OPD', 'username'=>'105001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>9, 'nama'=>'Admin OPD', 'username'=>'105401', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>10, 'nama'=>'Admin OPD', 'username'=>'106001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>11, 'nama'=>'Admin OPD', 'username'=>'207001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>12, 'nama'=>'Admin OPD', 'username'=>'208201', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>13, 'nama'=>'Admin OPD', 'username'=>'209301', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>14, 'nama'=>'Admin OPD', 'username'=>'211001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>15, 'nama'=>'Admin OPD', 'username'=>'212001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>16, 'nama'=>'Admin OPD', 'username'=>'213001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>17, 'nama'=>'Admin OPD', 'username'=>'215001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>18, 'nama'=>'Admin OPD', 'username'=>'216201', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>19, 'nama'=>'Admin OPD', 'username'=>'217001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>20, 'nama'=>'Admin OPD', 'username'=>'218201', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>21, 'nama'=>'Admin OPD', 'username'=>'219001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>22, 'nama'=>'Admin OPD', 'username'=>'222301', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>23, 'nama'=>'Admin OPD', 'username'=>'223201', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>24, 'nama'=>'Admin OPD', 'username'=>'325001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>25, 'nama'=>'Admin OPD', 'username'=>'327001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>26, 'nama'=>'Admin OPD', 'username'=>'331301', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>27, 'nama'=>'Admin OPD', 'username'=>'401001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>28, 'nama'=>'Admin OPD', 'username'=>'401003', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>29, 'nama'=>'Admin OPD', 'username'=>'401033', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>30, 'nama'=>'Admin OPD', 'username'=>'401004', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>31, 'nama'=>'Admin OPD', 'username'=>'401007', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>32, 'nama'=>'Admin OPD', 'username'=>'401008', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>33, 'nama'=>'Admin OPD', 'username'=>'401302', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>34, 'nama'=>'Admin OPD', 'username'=>'402001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>35, 'nama'=>'Admin OPD', 'username'=>'501401', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>36, 'nama'=>'Admin OPD', 'username'=>'501501', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>38, 'nama'=>'Admin OPD', 'username'=>'502001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>39, 'nama'=>'Admin OPD', 'username'=>'502002', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>40, 'nama'=>'Admin OPD', 'username'=>'503501', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>41, 'nama'=>'Admin OPD', 'username'=>'601001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>42, 'nama'=>'Admin OPD', 'username'=>'701001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>43, 'nama'=>'Admin OPD', 'username'=>'701010', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>44, 'nama'=>'Admin OPD', 'username'=>'701011', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>45, 'nama'=>'Admin OPD', 'username'=>'701012', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>46, 'nama'=>'Admin OPD', 'username'=>'701013', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>47, 'nama'=>'Admin OPD', 'username'=>'701014', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>48, 'nama'=>'Admin OPD', 'username'=>'701015', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>49, 'nama'=>'Admin OPD', 'username'=>'701016', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>50, 'nama'=>'Admin OPD', 'username'=>'701017', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>51, 'nama'=>'Admin OPD', 'username'=>'701018', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>52, 'nama'=>'Admin OPD', 'username'=>'701002', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>53, 'nama'=>'Admin OPD', 'username'=>'701019', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>54, 'nama'=>'Admin OPD', 'username'=>'701020', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>55, 'nama'=>'Admin OPD', 'username'=>'701021', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>56, 'nama'=>'Admin OPD', 'username'=>'701022', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>57, 'nama'=>'Admin OPD', 'username'=>'701023', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>58, 'nama'=>'Admin OPD', 'username'=>'701024', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>59, 'nama'=>'Admin OPD', 'username'=>'701025', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>60, 'nama'=>'Admin OPD', 'username'=>'701026', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>61, 'nama'=>'Admin OPD', 'username'=>'701027', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>62, 'nama'=>'Admin OPD', 'username'=>'701028', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>63, 'nama'=>'Admin OPD', 'username'=>'701029', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>64, 'nama'=>'Admin OPD', 'username'=>'701003', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>65, 'nama'=>'Admin OPD', 'username'=>'701030', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>66, 'nama'=>'Admin OPD', 'username'=>'701031', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>67, 'nama'=>'Admin OPD', 'username'=>'701004', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>68, 'nama'=>'Admin OPD', 'username'=>'701005', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>69, 'nama'=>'Admin OPD', 'username'=>'701006', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>70, 'nama'=>'Admin OPD', 'username'=>'701007', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>71, 'nama'=>'Admin OPD', 'username'=>'701008', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>72, 'nama'=>'Admin OPD', 'username'=>'701009', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>73, 'nama'=>'Admin OPD', 'username'=>'801001', 'password'=>Hash::make('12345'), 'hak_akses'=>'OPD'],
            ['id_skpd'=>888, 'nama'=>'Bidang Sosbud', 'username'=>'sosbud_bappeda', 'password'=>Hash::make('sosbud123!'), 'hak_akses'=>'BIDANG'],
            ['id_skpd'=>888, 'nama'=>'Bidang Ekonomi', 'username'=>'ekonomi_bappeda', 'password'=>Hash::make('ekonomi123!'), 'hak_akses'=>'BIDANG'],
            ['id_skpd'=>888, 'nama'=>'Bidang Praswil', 'username'=>'praswil_bappeda', 'password'=>Hash::make('praswil123!'), 'hak_akses'=>'BIDANG'],
            ['id_skpd'=>999, 'nama'=>'Admin SIPPD', 'username'=>'bappeda1', 'password'=>Hash::make('68118'), 'hak_akses'=>'ADMIN'],
            ['id_skpd'=>999, 'nama'=>'Admin SIPPD', 'username'=>'bappeda2', 'password'=>Hash::make('68118'), 'hak_akses'=>'ADMIN'],
            ['id_skpd'=>999, 'nama'=>'Admin SIPPD', 'username'=>'bappeda3', 'password'=>Hash::make('68118'), 'hak_akses'=>'ADMIN']
        ];

        DB::table('users')->insert($users);
        $this->command->info('Tabel User telah diisi!');
    }
}
