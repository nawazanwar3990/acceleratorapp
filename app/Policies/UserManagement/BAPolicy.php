<?php

namespace App\Policies\UserManagement;


use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class BAPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::BA;

}
