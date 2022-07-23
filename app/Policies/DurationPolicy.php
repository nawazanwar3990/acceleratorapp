<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class DurationPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DURATION;
}
