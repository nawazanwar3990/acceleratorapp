<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class Report extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::REPORTS;
}
