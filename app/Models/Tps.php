<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tps extends Model
{
    use HasFactory;

    protected $table = 'tps';

    protected $fillable = [
        'paslon_id',
        'suara',
    ];

    public function Desa()
    {
        return $this->belongsToMany(Desa::class, 'desa_tps');
    }
}
