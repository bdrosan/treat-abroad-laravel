<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Speciality extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'specialties';


    public function doctors(): BelongsToMany
    {
        return $this->belongsToMany(Doctor::class, 'doctors_specialties', 'speciality_id', 'doctor_id');
    }
}
