<?php

use Illuminate\Database\Seeder;

class UserAksesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 1,
            'aksi' => 'show_dashboard',
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 2,
            'aksi' => 'registrasi_pasien',
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 3,
            'aksi' => null,
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 4,
            'aksi' => null,
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 5,
            'aksi' => null,
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 6,
            'aksi' => null,
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 7,
            'aksi' => null,
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 8,
            'aksi' => 'show_pasien_rawat',
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 9,
            'aksi' => 'show_pasien_keluar',
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 10,
            'aksi' => 'show_ruang',
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 11,
            'aksi' => 'show_tindakan',
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 12,
            'aksi' => 'show_pasien',
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 13,
            'aksi' => 'show_tindakan_rawat_jalan',
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 14,
            'aksi' => 'show_transaksi_rawat_inap',
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 15,
            'aksi' => 'show_transaksi_rawat_jalan',
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 16,
            'aksi' => 'show_penyakit',
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 17,
            'aksi' => 'show_obat',
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 18,
            'aksi' => 'show_resep',
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 19,
            'aksi' => 'show_role',
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 20,
            'aksi' => 'show_user',
            'status' => 1,
        ]);

        DB::table('user_akses')->insert([
            'id_role' => 1,
            'id_menu' => 21,
            'aksi' => 'edit_password',
            'status' => 1,
        ]);
    }
}
