<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    protected $fillable = ['name', 'region_id'];

    /**
     * @return BelongsTo<Region, static>
     */
    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    /**
     * @return HasMany<City, static>
     */
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    /**
     * @return HasMany<Post, static>
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function countryFlagUrl(): string
    {
        return "https://flagcdn.com/" . strtolower($this->code) . ".svg";
    }
}
