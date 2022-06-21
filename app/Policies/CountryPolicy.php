<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class CountryPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::COUNTRY;
}
