<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class PostalDispatchPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::POSTAL_DISPATCH;
}
