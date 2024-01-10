<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bab extends Model
{
    use HasUuids, HasFactory;
    protected $table = 'bab';
    protected $fillable = [
        'id_kitab',
        'name',
    ];
    public function kitab()
    {
        return $this->belongsTo(Kitab::class, 'id_kitab');
    }
    public function subbab()
    {
        return $this->hasMany(Subbab::class, 'id_bab');
    }
}
