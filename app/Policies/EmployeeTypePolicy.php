<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class EmployeeTypePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::EMPLOYEE_TYPE;
}
