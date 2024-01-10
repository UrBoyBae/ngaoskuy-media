<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitab extends Model
{
    use HasUuids, HasFactory;
    protected $table = 'kitab';
    protected $fillable = [
        'name',
        'description',
    ];
    public function bab()
    {
        return $this->hasMany(Bab::class, 'id_kitab');
    }
}
