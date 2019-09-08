<?php

use Illuminate\Database\Seeder;

class RuangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ruang')->insert([
            'id_kelas' => 1,
            'status' => 1,
        ]);

        DB::table('ruang')->insert([
            'id_kelas' => 2,
            'status' => 1,
        ]);

        DB::table('ruang')->insert([
            'id_kelas' => 3,
            'status' => 0,
        ]);
    }
}
