<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class BusinessPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::HR_BUSINESS;
}
