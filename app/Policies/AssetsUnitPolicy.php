<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class AssetsUnitPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::ASSETS_UNIT;
}
