<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class SystemSettingsPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SYSTEM_SETTINGS;
}
