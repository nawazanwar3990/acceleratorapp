<?php

namespace App\Policies\Users;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class ProvincePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PROVINCE;
}
