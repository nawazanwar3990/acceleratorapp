<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class FloorsPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::FLOORS;
}
