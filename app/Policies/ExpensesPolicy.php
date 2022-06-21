<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class ExpensesPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::EXPENSES;
}
