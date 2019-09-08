<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table = 'daftar';

    public function pasien
    {
        return $this->hasOne(Pasien::class, 'id', 'id_pasien');
    }

    public function poli
    {
        return $this->hasOne(Poli::class, 'id', 'id_poli');
    }

    public function rolePembayaran
    {
        return $this->hasOne(RolePembayaran::class, 'id', 'id_rolepembayaran');
    }
}
