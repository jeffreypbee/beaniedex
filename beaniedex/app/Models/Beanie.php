<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
        'image',
        'number',
        'version'
    ];

    public function productLine(): BelongsTo
    {
        return $this->belongsTo(ProductLine::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function scopeFilter($query, array $filters) {
        if ($filters['search'] ?? false) {
            $searchTerm = '%' . request('search') . '%';
            $query->where('name', 'like', $searchTerm)->
            orWhere('species', 'like', $searchTerm)->
            orWhere('notes', 'like', $searchTerm);
        }

        if ($filters['species'] ?? false) {
            $query->where('species', 'like', request('species'));
        }
    }
}
