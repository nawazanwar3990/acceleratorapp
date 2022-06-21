<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class AssetsInventoryPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::ASSETS_INVENTORY;
}
