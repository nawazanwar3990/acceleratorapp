<?php

namespace App\Policies\Subscriptions;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class PackagePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PACKAGE;
}
