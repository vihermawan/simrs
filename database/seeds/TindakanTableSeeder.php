<?php

use Illuminate\Database\Seeder;

class TindakanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tindakan')->insert([
            'nama_tindakan' => 'Operasi Plastik',
            'harga' => 99999999,
        ]);

        DB::table('tindakan')->insert([
            'nama_tindakan' => 'Periksa Tekanan Darah',
            'harga' => 20000,
        ]);
    }
}
