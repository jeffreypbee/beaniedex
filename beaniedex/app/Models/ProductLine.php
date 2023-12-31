<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductLine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description',
        'plural',
        'image',
        'color'
    ];

    public function beanies(): HasMany
    {
        return $this->hasMany(Beanie::class);
    }
}
