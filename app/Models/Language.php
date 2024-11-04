<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Language extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function doctors(): BelongsToMany
    {
        return $this->belongsToMany(Doctor::class, 'doctors_languages');
    }
}
