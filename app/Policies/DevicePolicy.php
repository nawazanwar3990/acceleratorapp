<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class DevicePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DEVICE;
}
