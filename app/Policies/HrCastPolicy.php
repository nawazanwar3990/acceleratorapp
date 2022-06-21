<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class HrCastPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::CAST;
}
