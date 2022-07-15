<?php

namespace App\Policies\Users;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class OrganizationPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::ORGANIZATION;
}
