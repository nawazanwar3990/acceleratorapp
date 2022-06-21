<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class PhoneCallLogPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::PHONE_CALL_LOG;
}
