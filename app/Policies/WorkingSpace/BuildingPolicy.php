<?php

namespace App\Policies\WorkingSpace;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class BuildingPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::BUILDING;
}
