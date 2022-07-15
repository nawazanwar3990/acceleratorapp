<?php

namespace App\Policies\Subscriptions;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class SubscriptionPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SUBSCRIPTION;
}
