<?php

namespace App\Policies\SaleManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class SalePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SALE;
}
