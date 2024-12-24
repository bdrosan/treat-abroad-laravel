<?php

namespace App\Models;

use App\Observers\DoctorObserver;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

#[ObservedBy([DoctorObserver::class])]
class Doctor extends Model
{
    use HasFactory;
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

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


    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
