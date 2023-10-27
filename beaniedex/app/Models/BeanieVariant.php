<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BeanieVariant extends Model
{
    use HasFactory;

    public function Beanie():BelongsTo
    {
        return $this->belongsTo(Beanie::class);
    }
}
