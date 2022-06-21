<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class PrintPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PRINT;
}
