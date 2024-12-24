<?php

namespace App\Services;

use Spatie\DbDumper\Databases\MySql;

class DumpDBService
{
    public static function dumpOncePerDay($database, $username, $password): void
    {
        $dumpFilename = "database-backup-" . date("d-m-y") . ".sql";

        self::dump(
            $database,
            $username,
            $password,
            $dumpFilename
        );
    }

    public static function dump($database, $username, $password, $dumpFilename = 'dump.sql'): void
    {
        MySql::create()
            ->setDbName($database)
            ->setUserName($username)
            ->setPassword($password)
            ->dumpToFile($dumpFilename);
    }
}