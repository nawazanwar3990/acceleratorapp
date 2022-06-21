<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class DeviceModelPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DEVICE_MODEL;
}
