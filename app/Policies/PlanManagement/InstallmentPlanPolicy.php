<?php

namespace App\Policies\PlanManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class InstallmentPlanPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::INSTALLMENT_PLAN;
}
