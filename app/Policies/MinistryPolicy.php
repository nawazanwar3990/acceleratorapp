<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class MinistryPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::MINISTRY;
}
