<?php

namespace App\Services;

use App\Enum\KeyWordEnum;
use App\Models\PackageManagement\Duration;
use App\Models\PackageManagement\Module;
use PhpParser\Lexer\TokenEmulator\KeywordEmulator;

class PackageService
{
    public static function pluck_duration()
    {
        return Duration::pluck('name', 'id');
    }

    public static function pluck_module_for_super()
    {
        return Module::whereIn('name', [
                KeyWordEnum::CO_WORKING_SPACE,
                KeyWordEnum::FREELANCER,
                KeyWordEnum::SERVICE_PROVIDER,
                KeyWordEnum::INVESTOR
        ])->pluck('name', 'id');
    }

}
