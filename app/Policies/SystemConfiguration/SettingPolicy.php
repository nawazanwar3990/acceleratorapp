<?php

namespace App\Policies\SystemConfiguration;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class SettingPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SETTING;
}
