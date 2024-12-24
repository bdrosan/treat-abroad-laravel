<?php

namespace App\Observers;

use App\Models\Tag;
use App\Services\DumpDBService;
use Illuminate\Support\Facades\Log;

class TagObserver
{
    public function created(Tag $tag): void
    {
        Log::alert("Tag Created");

        try {
            DumpDBService::dump(
                env("DB_DATABASE"),
                env("DB_TagNAME"),
                env("DB_PASSWORD"),
                "database-backup.sql"
            );
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
        }

        print_r("Tag Created");
    }
}
