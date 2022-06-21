<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class DeviceLocationPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DEVICE_LOCATION;
}
