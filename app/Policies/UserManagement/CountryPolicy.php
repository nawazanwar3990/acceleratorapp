<?php

namespace App\Policies\UserManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class CountryPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::COUNTRY;
}
