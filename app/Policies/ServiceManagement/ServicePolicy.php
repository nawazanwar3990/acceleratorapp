<?php

namespace App\Policies\ServiceManagement;
use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class ServicePolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SERVICE;
}
