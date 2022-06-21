<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class OrganizationPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::ORGANIZATION;
}
