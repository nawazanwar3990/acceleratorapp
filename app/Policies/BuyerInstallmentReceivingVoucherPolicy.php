<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class BuyerInstallmentReceivingVoucherPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::BUYER_INSTALLMENT_RECEIVING;
}
