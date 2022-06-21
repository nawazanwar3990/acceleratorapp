<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class SalesPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SALES;
}
