<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBab extends Model
{
    use HasUuids, HasFactory;
    protected $table = 'subbab';
    protected $fillable = [
        'id_bab',
        'name',
    ];
    public function bab()
    {
        $this->belongsTo(Bab::class);
    }
}
