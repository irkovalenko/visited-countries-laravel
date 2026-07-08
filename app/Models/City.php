<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    protected $fillable = ['name', 'country_id', 'is_capital'];

    /**
     * @return BelongsTo<Country, static>
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @return HasMany<Post, static>
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
