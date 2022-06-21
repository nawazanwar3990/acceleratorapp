<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class SourcePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SOURCE;
}
