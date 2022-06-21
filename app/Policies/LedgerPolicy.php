<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class LedgerPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SUPPLIER_LEDGER;
}
