<?php

use Illuminate\Database\Seeder;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'nama' => 'Reguler',
        ]);

        DB::table('kelas')->insert([
            'nama' => 'BPJS',
        ]);

        DB::table('kelas')->insert([
            'nama' => 'VVIP',
        ]);
    }
}
