<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class workouts extends Model
{
    protected $fillable = 
        [
            'name',
            'description',
        ];   

    public function exercises(): BelongsToMany
    {
        return $this->belongsToMany(exercises::class);
    }    
}
