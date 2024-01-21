<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chat extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'id_question',
        'id_user',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class,'id_question');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }
    public function chatdetail()
    {
        return $this->hasMany(ChatDetail::class);
    }
}
