<?php

namespace App\Policies\Users;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class RolePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::ROLE;

}
