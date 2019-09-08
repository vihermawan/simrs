<?php

use Illuminate\Database\Seeder;

class PemeriksaanHarianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemeriksaan_harian')->insert([
            'deskripsi' => 'ganti infus',
            'tanggal' => '2019-09-08',
        ]);
    }
}
