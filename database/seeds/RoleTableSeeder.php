<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'nama' => 'Admin',
        ]);

        DB::table('role')->insert([
            'nama' => 'Dokter',
        ]);

        DB::table('role')->insert([
            'nama' => 'Perawat',
        ]);

        DB::table('role')->insert([
            'nama' => 'Petugas',
        ]);
    }
}
