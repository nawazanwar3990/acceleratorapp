<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class VisitorBookPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::VISITOR_BOOK;
}
