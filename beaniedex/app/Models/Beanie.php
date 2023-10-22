<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Beanie extends Model
{
    use HasFactory;

    public function productLine(): BelongsTo
    {
        return $this->belongsTo(ProductLine::class);
    }
}
