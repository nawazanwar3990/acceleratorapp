<?php

namespace App\Policies\SaleManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class InstallmentPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::INSTALLMENT;
}
