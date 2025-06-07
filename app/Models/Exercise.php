<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Exercise extends Model
{
    protected $fillable = 
    [
        'name',
        'description',
        'title',
    ];

    public function workouts(): BelongsToMany
    {
        return $this->belongsToMany(Exercise::class);
    }
}
