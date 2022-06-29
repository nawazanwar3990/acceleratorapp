<?php

namespace App\Policies\PackageManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class ModulePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::MODULE;
}
