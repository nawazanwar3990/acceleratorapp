<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class SettingsPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SETTINGS;
}
