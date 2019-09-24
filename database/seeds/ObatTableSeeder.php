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
            'nama_obat' => 'Dekongestan',
            'jenis_obat' => 'tablet',
            'dosis_obat' => '5-7 kali sehari',
            'harga_obat' => 5000,
        ]);

        DB::table('obat')->insert([
            'nama_obat' => 'Naproxen',
            'jenis_obat' => 'sirup',
            'dosis_obat' => '3-4 kali sehari',
            'harga_obat' => 25000,
        ]);
    }
}
