<?php

namespace App\Services\RealEstate;

use App\Models\FixedAssets\AssetsLocation;
use App\Models\FixedAssets\AssetsUnit;

class FixedAssetsService
{
    public static function AssetsUnitDropDown()
    {
        return AssetsUnit::pluck('name','id');
    }

    public static function AssetsLocationDropDown()
    {
        return AssetsLocation::pluck('name','id');
    }

}
