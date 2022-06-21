<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class UsersPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::USERS;
}
