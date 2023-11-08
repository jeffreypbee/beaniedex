<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SwingTag extends Model
{
    use HasFactory;

    public function productLine(): BelongsTo {
        return $this->belongsTo(ProductLine::class);
    }

    public function beanies(): BelongsToMany
    {
        return $this->belongsToMany(Beanie::class);
    }
}
