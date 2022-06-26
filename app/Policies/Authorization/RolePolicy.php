<?php

namespace App\Policies\Authorization;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class RolePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::ROLE;

}
