<?php

namespace App\Policies\Users;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class DesignationPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DESIGNATION;
}
