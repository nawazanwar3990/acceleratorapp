<?php

namespace App\Policies\UserManagement;


use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class AdminPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::ADMIN;

}
