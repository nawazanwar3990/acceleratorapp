<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class HrPersonPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::HR_PERSONS;
}
