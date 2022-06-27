<?php

namespace App\Policies\UserManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class DistrictPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DISTRICT;
}
