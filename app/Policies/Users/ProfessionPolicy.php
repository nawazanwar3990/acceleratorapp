<?php

namespace App\Policies\Users;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class ProfessionPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PROFESSION;
}
