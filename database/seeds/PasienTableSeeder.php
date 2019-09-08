<?php

use Illuminate\Database\Seeder;

class PasienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pasien')->insert([
            'nama' => 'Eby',
            'tanggal_kunjungan' => '2019-09-08',
            'jam' => '09:56:00',
            'id_role' => 5,
            'jenis_kelamin' => 'L',
            'alamat' => 'Jakarta',
            'desa' => 'Kemang',
            'kecamatan' => 'Mampang Prapatan',
            'kabupaten' => 'Jakarta Selatan',
            'provinsi' => 'DKI Jakarta',
            'agama' => 'mayoritas',
            'golongan_darah' => 'AB',
            'pendidikan' => 'Sarjana',
            'asuransi' => null,
            'tempat_lahir' => 'Jakarta',
        ]);

        DB::table('pasien')->insert([
            'nama' => 'Angel',
            'tanggal_kunjungan' => '2019-09-08',
            'jam' => '09:56:00',
            'id_role' => 5,
            'jenis_kelamin' => 'P',
            'alamat' => 'Jakarta',
            'desa' => 'Kemang',
            'kecamatan' => 'Mampang Prapatan',
            'kabupaten' => 'Jakarta Selatan',
            'provinsi' => 'DKI Jakarta',
            'agama' => 'minoritas',
            'golongan_darah' => 'A',
            'pendidikan' => 'Sarjana',
            'asuransi' => null,
            'tempat_lahir' => 'Jakarta',
        ]);
    }
}
