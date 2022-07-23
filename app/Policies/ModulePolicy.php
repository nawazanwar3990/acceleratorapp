<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class ModulePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::MODULE;
}
