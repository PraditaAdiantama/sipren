<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function siswas()
    {
        return $this->belongsToMany(Siswa::class, 'det_presensis', 'id_presensi', 'nis_siswa')->withPivot(['keterangan', 'id', 'updated_at']);
    }
}
