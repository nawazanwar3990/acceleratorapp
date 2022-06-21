<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class ProvincePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PROVINCE;
}
