<?php

namespace App\Policies\UserManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class ProvincePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PROVINCE;
}
