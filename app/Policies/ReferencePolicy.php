<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class ReferencePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::REFERENCE;
}
