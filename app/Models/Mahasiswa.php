<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa'; //nama tabel
    protected $fillable = ['npm', 'nama', 'jk', 'tempat_lahir', 'tanggal_lahir', 'asal_sma', 'prodi_id', 'foto'];

    public function prodi() 
    {
        return $this->belongsTo(Prodi::class, 'prodi_id', 'id'); //relasi ke tabel prodi
        //belongsTo : 1 mhs hanya 1 prodi
    }
}