<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class AssetsLocationPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::ASSETS_LOCATION;
}
