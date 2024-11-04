<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class DoctorLanguage extends Model
{
    use HasFactory;
    protected $table = 'doctors_languages';
    protected $guarded = [];


    public function doctors(): BelongsToMany
    {
        return $this->belongsToMany(Doctor::class, 'doctors_languages');
    }
}
