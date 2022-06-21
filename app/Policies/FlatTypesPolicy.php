<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class FlatTypesPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::FLAT_TYPES;
}
