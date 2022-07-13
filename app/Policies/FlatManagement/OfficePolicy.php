<?php

namespace App\Policies\FlatManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class OfficePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::OFFICE;
}
