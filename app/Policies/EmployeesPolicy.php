<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class EmployeesPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::EMPLOYEES;
}
