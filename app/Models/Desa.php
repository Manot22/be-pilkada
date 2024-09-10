<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;

    protected $table = 'desa';

    protected $fillable = [
        'nama_desa',
    ];

    public function Kecamatan()
    {
        return $this->belongsToMany(Kecamatan::class, 'kecamatan_desa');
    }

    public function Tps()
    {
        return $this->belongsToMany(Tps::class, 'desa_tps');
    }
}
