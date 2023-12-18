<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function mapels(){
        return $this->belongsToMany(Mapel::class, 'presensis', 'id_kelas', 'id_mapel');
    }

    public function siswas(){
        return $this->hasMany(Siswa::class, 'id_kelas', 'id');
    }
}
