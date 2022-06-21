<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class NationalityPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::NATIONALITY;
}
