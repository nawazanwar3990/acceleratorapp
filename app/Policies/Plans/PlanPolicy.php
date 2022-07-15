<?php

namespace App\Policies\Plans;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class PlanPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PLAN;
}
