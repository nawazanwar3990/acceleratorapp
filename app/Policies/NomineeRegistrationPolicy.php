<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class NomineeRegistrationPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::NOMINEE_REGISTRATION;
}
