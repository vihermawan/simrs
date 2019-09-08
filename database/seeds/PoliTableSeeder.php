<?php

use Illuminate\Database\Seeder;

class PoliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('poli')->insert([
            'nama' => 'Poliklinik Tong Feng',
            'id_user' => 1,
        ]);
    }
}
