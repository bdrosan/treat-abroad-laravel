<?php

namespace App\Observers;

use App\Models\Hospital;
use App\Services\DumpDBService;
use Illuminate\Support\Facades\Log;

class HospitalObserver
{
    public function created(Hospital $hospital): void
    {
        Log::alert("Hospital Created");

        try {
            $dumpFilename = "database-backup-" . date("d/m/y") . ".sql";
            DumpDBService::dump(
                env("DB_DATABASE"),
                env("DB_HospitalNAME"),
                env("DB_PASSWORD"),
                $dumpFilename
            );
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
        }

        print_r("Hospital Created");
    }

}
