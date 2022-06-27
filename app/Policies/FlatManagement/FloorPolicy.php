<?php

namespace App\Policies\FlatManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class FloorPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::FLOOR;
}
