<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class ExpenseHeadsPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::EXPENSE_HEAD;
}
