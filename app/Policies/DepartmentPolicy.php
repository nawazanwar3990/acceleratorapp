<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class DepartmentPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DEPARTMENT;
}
