<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class TehsilPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::TEHSIL;
}
