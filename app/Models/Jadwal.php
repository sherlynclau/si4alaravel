<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal'; //nama tabel

    protected $fillable = [
        'tahun_akademik', 'kode_smt', 'kelas', 'mata_kuliah_id', 'dosen_id', 'sesi_id'
    ];

    public function sesi()
    {
        return $this->belongsTo(Sesi::class, 'sesi_id', 'id'); //relasi ke tabel sesi
        //belongsTo : 1 jadwal hanya 1 sesi
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'mata_kuliah_id', 'id'); //relasi ke tabel matakuliah
        //belongsTo : 1 jadwal hanya 1 matakuliah
    }

    public function dosen()
    {
        return $this->belongsTo(User::class, 'dosen_id', 'id'); //relasi ke tabel dosen
        //belongsTo : 1 jadwal hanya 1 dosen
    }
}
