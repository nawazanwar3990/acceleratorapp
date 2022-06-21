<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class FloorTypesPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::FLOOR_TYPES;
}
