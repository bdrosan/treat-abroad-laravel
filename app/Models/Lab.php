<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lab extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function hospitals(): BelongsToMany
    {
        return $this->belongsToMany(Hospital::class, 'hospitals_labs', 'lab_id', 'hospital_id');
    }
}
