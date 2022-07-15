<?php

namespace App\Policies\Users;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class DepartmentPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DEPARTMENT;
}
