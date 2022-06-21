<?php

namespace App\Policies;
use App\Enum\KeyWordEnum;

class ServicesPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SERVICES;
}
