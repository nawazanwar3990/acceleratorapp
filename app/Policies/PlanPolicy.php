<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class PlanPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PLAN;
}
