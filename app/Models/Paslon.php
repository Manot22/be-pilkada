<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paslon extends Model
{
    use HasFactory;

    protected $table = 'paslon';

    protected $fillable = [
        'nama',
        'nomor_urut',
        'image',
        'slogan',
        'partai_id',
    ];

    public function Dapil()
    {
        return $this->belongsToMany(Dapil::class, 'paslon_dapil');
    }

    public function Partai()
    {
        return $this->belongsTo(Partai::class);
    }
}
