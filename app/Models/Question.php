<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasUuids, HasFactory;
    protected $fillable = [
        'id_user',
        'id_episode',
        'subject',
        'question',
        'tipe',
        'status',
    ];

    public function user()
    {
        $this->hasOne(User::class);
    }
    public function episode()
    {
        $this->hasOne(Episode::class);
    }
}
