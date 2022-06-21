<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class TaxStatusPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::TAX_STATUS;
}
