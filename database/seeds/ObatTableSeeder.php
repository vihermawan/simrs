<?php

use Illuminate\Database\Seeder;

class ObatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('obat')->insert([
            'nama' => 'Dekongestan',
            'jenis_obat' => 'tablet',
            'dosis' => '5-7 kali sehari',
            'harga' => 5000,
        ]);

        DB::table('obat')->insert([
            'nama' => 'Naproxen',
            'jenis_obat' => 'sirup',
            'dosis' => '3-4 kali sehari',
            'harga' => 25000,
        ]);
    }
}
