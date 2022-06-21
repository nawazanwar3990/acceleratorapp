<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class ComplainPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::COMPLAIN;
}
