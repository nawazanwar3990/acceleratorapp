<?php

namespace App\Policies\PackageManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class DurationPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DURATION;
}
