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
            'icon' => 'icon-home2',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 0,
            'name' => 'Pendaftaran',
            'url' => '/pendaftaran',
            'icon' => 'icon-pencil5',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 0,
            'name' => 'Rawat Inap',
            'url' => '#',
            'icon' => ' icon-bed2',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 0,
            'name' => 'Rawat Jalan',
            'url' => '#',
            'icon' => 'icon-accessibility2',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 0,
            'name' => 'Keuangan',
            'url' => '#',
            'icon' => 'icon-coins',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 0,
            'name' => 'Lainnya',
            'url' => '#',
            'icon' => 'icon-list-unordered',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 0,
            'name' => 'Setting',
            'url' => '#',
            'icon' => 'icon-cog',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 3,
            'name' => 'Pasien Rawat',
            'url' => '/pasien-rawat',
            'icon' => 'icon-enter3 ',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 3,
            'name' => 'Pasien Keluar',
            'url' => '/pasien-keluar',
            'icon' => 'icon-exit3',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 3,
            'name' => 'Ruang',
            'url' => '/ruang',
            'icon' => 'icon-map',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 3,
            'name' => 'Tindakan',
            'url' => '/rawat-inap/tindakan',
            'icon' => 'icon-select2',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 4,
            'name' => 'Pasien',
            'url' => '/pasien',
            'icon' => '',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 4,
            'name' => 'Tindakan',
            'url' => '/rawat-jalan/tindakan',
            'icon' => '',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 5,
            'name' => 'Transaksi Inap',
            'url' => '/transaksi-inap',
            'icon' => '',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 5,
            'name' => 'Transaksi Jalan',
            'url' => '/transaksi-jalan',
            'icon' => '',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 6,
            'name' => 'Penyakit',
            'url' => '/penyakit',
            'icon' => 'icon-snowflake ',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 6,
            'name' => 'Obat',
            'url' => '/obat',
            'icon' => 'icon-aid-kit',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 6,
            'name' => 'Resep',
            'url' => '/resep',
            'icon' => 'icon-clipboard3 ',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 7,
            'name' => 'Role',
            'url' => '/role',
            'icon' => ' icon-file-media ',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 7,
            'name' => 'User',
            'url' => '/user',
            'icon' => ' icon-user ',
        ]);

        DB::table('menu')->insert([
            'parent_id' => 7,
            'name' => 'Edit Password',
            'url' => '/edit-password',
            'icon' => 'icon-lock',
        ]);
    }
}
