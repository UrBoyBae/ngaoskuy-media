<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailUser extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'id_user',
        'name',
        'profile_link',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
