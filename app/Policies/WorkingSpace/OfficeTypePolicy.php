<?php

namespace App\Policies\WorkingSpace;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class OfficeTypePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::OFFICE_TYPE;
}
