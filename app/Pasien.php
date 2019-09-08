<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';

    public function role
    {
        return $this->hasOne(Role::class, 'id', 'id_role');
    }
}
