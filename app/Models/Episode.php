<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasUuids, HasFactory;
    protected $fillable = [
        'id_judul',
        'name',
        'thumbnail',
        'video_link',
        'resume',
        'tag',
    ];

    public function judul()
    {
        return $this->belongsTo(Judul::class, 'id_judul');
    }
}
