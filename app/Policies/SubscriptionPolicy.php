<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class SubscriptionPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SUBSCRIPTION;
}
