<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class ComplainTypePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::COMPLAIN_TYPE;
}
