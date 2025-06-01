<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah'; //nama tabel

    protected $fillable = [
        'kode_mk', 'nama', 'prodi_id'
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id', 'id'); //relasi ke tabel prodi
        //belongsTo : 1 matakuliah hanya 1 prodi
    }
}
