<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hospital extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function doctors(): BelongsToMany
    {
        return $this->belongsToMany(Doctor::class, 'doctors_hospitals', 'hospital_id', 'doctor_id');
    }

    public function labs(): BelongsToMany
    {
        return $this->belongsToMany(Lab::class, 'hospitals_labs', 'hospital_id', 'lab_id');
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function specialities(): BelongsToMany
    {
        return $this->belongsToMany(Speciality::class, 'hospitals_specialities', 'hospital_id', 'speciality_id');
    }
}
