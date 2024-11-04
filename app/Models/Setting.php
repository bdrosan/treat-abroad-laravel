<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Request;

class Setting extends Model
{
    use HasFactory;
    protected $guarded = [];



    public static function key(string $key): ?String
    {
        return Setting::where("key", $key)->first()?->value ?? null;
    }
}
