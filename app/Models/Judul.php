<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judul extends Model
{
    use HasUuids, HasFactory;

    protected $table = 'judul';

    protected $fillable = [
        'id_subbab',
        'name',
    ];
    public function subbab()
    {
        $this->belongsTo(SubBab::class);
    }
    public function episode()
    {
        $this->hasMany(Episode::class);
    }
}
