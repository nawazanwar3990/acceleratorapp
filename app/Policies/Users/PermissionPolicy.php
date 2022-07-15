<?php

namespace App\Policies\Users;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;


class PermissionPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PERMISSION;

}
