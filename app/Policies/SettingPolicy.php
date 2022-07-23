<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class SettingPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SETTING;
}
