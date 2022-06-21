<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class SalaryPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SALARY_RECORDS;
}
