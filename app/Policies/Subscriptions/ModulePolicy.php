<?php

namespace App\Policies\Subscriptions;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class ModulePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::MODULE;
}
