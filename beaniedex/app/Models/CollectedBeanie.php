<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CollectedBeanie extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'beanie_id'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function beanie(): BelongsTo {
        return $this->belongsTo(Beanie::class);
    }
}
