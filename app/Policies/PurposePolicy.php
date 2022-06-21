<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class PurposePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PURPOSE;
}
