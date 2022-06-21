<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class InstallmentPlansPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::INSTALLMENT_PLANS;
}
