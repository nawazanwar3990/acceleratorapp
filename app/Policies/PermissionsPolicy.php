<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class PermissionsPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PERMISSIONS;
}
