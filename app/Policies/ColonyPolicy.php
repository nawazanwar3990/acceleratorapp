<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class ColonyPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::COLONY;
}
