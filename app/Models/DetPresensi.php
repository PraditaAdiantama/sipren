<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetPresensi extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis_siswa', 'nis');
    }

    public function presensi()
    {
        return $this->belongsTo(Presensi::class, 'id_presensi', 'id');
    }
}
