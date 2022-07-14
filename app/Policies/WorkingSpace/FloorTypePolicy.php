<?php

namespace App\Policies\WorkingSpace;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class FloorTypePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::FLOOR_TYPE;
}
