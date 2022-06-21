<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class BuyerCashReceivingVoucherPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::BUYER_CASH_RECEIVING;
}
