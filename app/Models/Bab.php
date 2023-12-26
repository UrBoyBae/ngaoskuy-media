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
        $this->belongsTo(Kitab::class);
    }
    public function subbab()
    {
        $this->hasMany(Subbab::class);
    }
}
