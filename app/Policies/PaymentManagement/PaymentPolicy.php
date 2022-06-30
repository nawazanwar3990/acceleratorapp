<?php

namespace App\Policies\PaymentManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class PaymentPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PAYMENT;
}
