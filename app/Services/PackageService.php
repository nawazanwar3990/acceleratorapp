<?php

namespace App\Services;

use App\Enum\KeyWordEnum;
use App\Models\PackageManagement\Duration;
use App\Models\PackageManagement\Module;
use App\Models\PackageManagement\Package;
use Illuminate\Database\Eloquent\Collection;
use PhpParser\Lexer\TokenEmulator\KeywordEmulator;

class PackageService
{
    public static function get_vendor_packages(): Collection|array
    {
        return Package::with('modules')->where('created_by', '1')->get();
    }

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
