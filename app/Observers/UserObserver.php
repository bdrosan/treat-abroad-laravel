<?php

namespace App\Observers;

use App\Models\User;
use App\Services\DumpDBService;
use Illuminate\Support\Facades\Log;

class UserObserver
{
    public function created(User $user): void
    {
        Log::alert("User Created");

        try {
            DumpDBService::dump(
                env("DB_DATABASE"),
                env("DB_USERNAME"),
                env("DB_PASSWORD"),
                "database-backup.sql"
            );
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
        }

        print_r("User Created");
    }
}
