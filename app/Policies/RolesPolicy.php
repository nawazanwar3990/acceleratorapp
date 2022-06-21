<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class RolesPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::ROLES;
}
