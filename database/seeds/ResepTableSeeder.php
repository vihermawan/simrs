<?php

use Illuminate\Database\Seeder;

class ResepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resep')->insert([
            'id_obat' => 1,
            'jumlah' => 1,
        ]);

        DB::table('resep')->insert([
            'id_obat' => 2,
            'jumlah' => 2,
        ]);
    }
}
