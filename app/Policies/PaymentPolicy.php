<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class PaymentPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PAYMENT;
}
