<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class PackagePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PACKAGE;
}
