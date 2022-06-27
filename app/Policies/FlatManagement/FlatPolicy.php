<?php

namespace App\Policies\FlatManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class FlatPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::FLAT;
}
