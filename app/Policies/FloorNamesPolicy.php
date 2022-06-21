<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class FloorNamesPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::FLOOR_NAMES;
}
