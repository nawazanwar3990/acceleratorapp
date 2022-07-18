<?php

namespace App\Policies\Users;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class InvestorPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::INVESTOR;
}
