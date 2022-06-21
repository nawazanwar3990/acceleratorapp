<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class CallTypePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::CALL_TYPE;
}
