<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class DesignationPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DESIGNATION;
}
