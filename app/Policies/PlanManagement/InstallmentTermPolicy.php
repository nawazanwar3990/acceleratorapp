<?php

namespace App\Policies\PlanManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class InstallmentTermPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::INSTALLMENT_TERM;
}
