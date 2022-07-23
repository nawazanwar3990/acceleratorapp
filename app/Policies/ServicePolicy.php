<?php

namespace App\Policies;
use App\Enum\KeyWordEnum;

class ServicePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SERVICE;
}
