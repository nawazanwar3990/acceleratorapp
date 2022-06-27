<?php

namespace App\Policies\UserManagement;


use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;


class UserPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::USER;

}
