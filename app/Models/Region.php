<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    protected $fillable = ['name'];

    /**
     * @return HasMany<Country, static>
     */
    public function countries(): HasMany
    {
        return $this->hasMany(Country::class);
    }

    /**
     * @return HasMany<Post, static>
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
