<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';

    protected $fillable = [
        'nama_kecamatan',
    ];

    public function Dapil()
    {
        return $this->belongsToMany(Dapil::class, 'dapil_kecamatan');
    }

    public function Desa()
    {
        return $this->belongsToMany(Desa::class, 'kecamatan_desa');
    }
}
