<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class DeviceMakePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DEVICE_MAKE;
}
