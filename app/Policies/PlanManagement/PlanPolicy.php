<?php

namespace App\Policies\PlanManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class PlanPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PLAN;
}
