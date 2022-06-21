<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class DeviceTypePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DEVICE_TYPE;
}
