<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dapil extends Model
{
    use HasFactory;

    protected $table = 'dapil';

    protected $fillable = [
        'nama_dapil',
    ];

    public function Paslon()
    {
        return $this->belongsToMany(Paslon::class, 'paslon_dapil');
    }

    public function Kecamatan()
    {
        return $this->belongsToMany(Kecamatan::class, 'dapil_kecamatan');
    }
}
