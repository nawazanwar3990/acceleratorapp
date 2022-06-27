<?php

namespace App\Policies\UserManagement;


use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;


class HrPersonPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::HR_PERSON;

}
