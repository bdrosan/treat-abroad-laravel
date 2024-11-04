<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Doctor extends Model
{
    use HasFactory;

    protected $guarded = [];


    /** Accessors **/
    public function getNameAttribute(): string
    {
        return $this->firstname . " " . $this->lastname;
    }

    /**
     * @return BelongsToMany
     */
    public function specialities(): belongsToMany
    {
        return $this->belongsToMany(Speciality::class, 'doctors_specialties', 'doctor_id', 'speciality_id');
    }


    /**
     * @return BelongsToMany
     */
    public function hospitals(): BelongsToMany
    {
        return $this->belongsToMany(Hospital::class, 'doctors_hospitals', 'doctor_id', 'hospital_id');
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class, 'doctors_languages', 'doctor_id', 'language_id');
    }
}
