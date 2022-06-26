<?php

namespace App\Policies\Authorization;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;


class PermissionPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PERMISSION;

}
