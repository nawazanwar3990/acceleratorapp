<?php

namespace App\Policies\FlatManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class FlatTypePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::FLAT_TYPE;
}
