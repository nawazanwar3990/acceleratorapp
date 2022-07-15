<?php

namespace App\Policies\Users;


use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class AdminPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::ADMIN;

}
