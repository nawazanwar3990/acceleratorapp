<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class EmployeeSubTypePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::EMPLOYEE_SUB_TYPE;
}
