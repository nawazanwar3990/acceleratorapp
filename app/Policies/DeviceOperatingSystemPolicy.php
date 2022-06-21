<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class DeviceOperatingSystemPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DEVICE_OPERATING_SYSTEM;
}
