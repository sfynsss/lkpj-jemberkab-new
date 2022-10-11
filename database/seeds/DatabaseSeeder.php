<?php

//namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // UserSeeder::class,
            // BidangUrusanSeeder::class,
            // ProgramSeeder::class,
            // SKPDSeeder::class,
            // UrusanSeeder::class,
            // KegiatanSeeder::class,
            // SubKegiatanSeeder::class,
            // DetSubKegiatanSeeder::class,
            // PredikatSeeder::class,
            // PrioritasSeeder::class,
            TestSeeder::class,
        ]);
    }
}
