<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'id_role' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Dokter',
            'email' => 'dokter@gmail.com',
            'password' => bcrypt('password'),
            'id_role' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Perawat',
            'email' => 'perawat@gmail.com',
            'password' => bcrypt('password'),
            'id_role' => 3,
        ]);
    }
}
