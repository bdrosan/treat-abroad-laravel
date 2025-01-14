<?php

namespace App\Observers;

use App\Models\Doctor;
use App\Services\DumpDBService;
use Illuminate\Support\Facades\Log;

class DoctorObserver
{
    /**
     * Handle the Doctor "created" event.
     */
    public function created(Doctor $Doctor): void
    {
        Log::alert("Doctor Created");

        try {

            DumpDBService::dumpOncePerDay(
                env("DB_DATABASE"),
                env("DB_USERNAME"),
                env("DB_PASSWORD")
            );
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
        }

        print_r("Doctor Created");
    }

    /**
     * Handle the Doctor "updated" event.
     */
    public function updated(Doctor $Doctor): void
    {
        // ...
    }

    /**
     * Handle the Doctor "deleted" event.
     */
    public function deleted(Doctor $Doctor): void
    {
        // ...
    }

    /**
     * Handle the Doctor "restored" event.
     */
    public function restored(Doctor $Doctor): void
    {
        // ...
    }

    /**
     * Handle the Doctor "forceDeleted" event.
     */
    public function forceDeleted(Doctor $Doctor): void
    {
        // ...
    }
}
