<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BeanieVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'beanie_id',
        'notes',
        'image'
    ];

    public function Beanie():BelongsTo
    {
        return $this->belongsTo(Beanie::class);
    }
}
