<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    protected $table = 'sesi'; //nama tabel

    protected $fillable = [
        'nama',
    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'sesi_id', 'id'); 
    }
}
    