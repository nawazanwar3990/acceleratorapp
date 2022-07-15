<?php

namespace App\Policies\Services;
use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class ServicePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SERVICE;
}
