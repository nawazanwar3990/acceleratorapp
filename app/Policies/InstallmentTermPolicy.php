<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class InstallmentTermPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::INSTALLMENT_TERM;
}
