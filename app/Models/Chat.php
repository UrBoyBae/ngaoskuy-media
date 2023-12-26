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
        $this->belongsTo(Question::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
    public function chatdetail()
    {
        $this->hasMany(ChatDetail::class);
    }
}
