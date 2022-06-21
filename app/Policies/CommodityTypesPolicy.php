<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class CommodityTypesPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::COMMODITY_TYPES;
}
