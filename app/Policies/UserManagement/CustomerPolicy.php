<?php

namespace App\Policies\UserManagement;


use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class CustomerPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::CUSTOMER;

}
