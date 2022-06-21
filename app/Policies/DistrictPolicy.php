<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class DistrictPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DISTRICT;
}
