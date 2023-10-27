<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Beanie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'species',
        'product_line_id',
        'birthday',
        'release_date',
        'retired_date',
        'poem',
        'notes',
        'image'
    ];

    public function productLine(): BelongsTo
    {
        return $this->belongsTo(ProductLine::class);
    }

    public function variants(): HasMany
    {
        return $this->hasMany(BeanieVariant::class);
    }
}
