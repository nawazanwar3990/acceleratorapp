<?php

namespace App\Policies\Users;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class DistrictPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DISTRICT;
}
