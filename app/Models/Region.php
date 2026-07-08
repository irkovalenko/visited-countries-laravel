<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    protected $fillable = ['name'];

    public function countries(): HasMany
    {
        return $this->hasMany(Country::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
