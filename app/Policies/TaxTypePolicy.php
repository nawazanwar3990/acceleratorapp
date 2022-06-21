<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class TaxTypePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::TAX_TYPE;
}
