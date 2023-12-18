<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'nis';

    protected $guarded = [
        'id'
    ];

    protected $with = [
        'kelas'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }

    public function presensi()
    {
        return $this->belongsToMany(Presensi::class, 'det_presensis', 'nis_siswa', 'id_presensi');
    }
}
