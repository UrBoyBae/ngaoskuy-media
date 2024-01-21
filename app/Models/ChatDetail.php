<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatDetail extends Model
{
    use HasUuids, HasFactory;
    protected $fillable = [
        'id_chat',
        'id_user',
        'isi',
    ];

    public function chat()
    {
        return $this->belongsTo(Chat::class, 'id_chat');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
