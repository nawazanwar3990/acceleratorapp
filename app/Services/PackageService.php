<?php

namespace App\Services;

use App\Enum\KeyWordEnum;
use App\Models\Duration;
use App\Models\Module;
use App\Models\Package;
use Illuminate\Database\Eloquent\Collection;

class PackageService
{
    public static function list_packages(): Collection|array
    {
        return Package::with('services')->get();
    }

    public static function pluck_duration()
    {
        return Duration::pluck('name', 'id');
    }

    public static function pluck_module_for_super()
    {
        return Module::whereIn('name', [
            KeyWordEnum::INCUBATOR,
            KeyWordEnum::FREELANCER,
            KeyWordEnum::SERVICE_PROVIDER,
            KeyWordEnum::INVESTOR
        ])->pluck('name', 'id');
    }

}
