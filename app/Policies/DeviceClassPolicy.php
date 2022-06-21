<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class DeviceClassPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DEVICE_CLASS;
}
