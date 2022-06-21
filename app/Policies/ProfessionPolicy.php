<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class ProfessionPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PROFESSION;
}
