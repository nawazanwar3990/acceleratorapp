<?php

namespace App\Services\Accounts;

use App\Models\Accounts\VoucherPrefix;
use App\Services\RealEstate\BuildingService;

class VoucherService
{
    public static function getNextVoucherNo($type) {
        $getNumber = VoucherPrefix::whereType($type)->where('building_id', BuildingService::getBuildingId())->first();

        if (!is_null($getNumber)) {
            return $getNumber->prefix . "-" . str_pad($getNumber->number,5,'0',STR_PAD_LEFT);
        }
        return strtoupper($type) . "-" . mt_rand(11111, 99999);
    }

    public static function updateNumber($type) {
        $getNumber = VoucherPrefix::whereType($type)->where('building_id', BuildingService::getBuildingId())->first();

        if (!is_null($getNumber)) {
            VoucherPrefix::whereType($type)->where('building_id', BuildingService::getBuildingId())
                ->update(["number" => ((int)$getNumber->number + 1)]);
        }
    }
}
