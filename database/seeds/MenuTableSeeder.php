<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'parent_id' => 0,
            'name' => 'Dashboard',
            'url' => '/dashboard',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 0,
            'name' => 'Pendaftaran',
            'url' => '/pendaftaran',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 0,
            'name' => 'Rawat Inap',
            'url' => '#',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 0,
            'name' => 'Rawat Jalan',
            'url' => '#',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 0,
            'name' => 'Keuangan',
            'url' => '#',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 0,
            'name' => 'Lainnya',
            'url' => '#',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 0,
            'name' => 'Setting',
            'url' => '#',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 3,
            'name' => 'Pasien Rawat',
            'url' => '/pasien-rawat',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 3,
            'name' => 'Pasien Keluar',
            'url' => '/pasien-keluar',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 3,
            'name' => 'Ruang',
            'url' => '/ruang',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 3,
            'name' => 'Tindakan',
            'url' => '/tindakan',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 4,
            'name' => 'Pasien',
            'url' => '/pasien',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 4,
            'name' => 'Tindakan',
            'url' => '/rawat-jalan/tindakan',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 5,
            'name' => 'Rawat Inap',
            'url' => '/transaksi/rawat-inap',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 5,
            'name' => 'Rawat Jalan',
            'url' => '/transaksi/rawat-jalan',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 6,
            'name' => 'Penyakit',
            'url' => '/penyakit',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 6,
            'name' => 'Obat',
            'url' => '/obat',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 6,
            'name' => 'Resep',
            'url' => '/resep',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 7,
            'name' => 'Role',
            'url' => '/role',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 7,
            'name' => 'User',
            'url' => '/user',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 7,
            'name' => 'Edit Password',
            'url' => '/edit-password',
        ]);
    }
}
