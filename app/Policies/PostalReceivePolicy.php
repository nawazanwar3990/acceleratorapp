<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class PostalReceivePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::POSTAL_RECEIVE;
}
