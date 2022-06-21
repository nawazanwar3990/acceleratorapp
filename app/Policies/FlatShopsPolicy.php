<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class FlatShopsPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::FLATS_SHOPS;
}
