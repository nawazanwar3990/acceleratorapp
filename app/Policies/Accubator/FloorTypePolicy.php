<?php

namespace App\Policies\Accubator;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class FloorTypePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::FLOOR_TYPE;
}
