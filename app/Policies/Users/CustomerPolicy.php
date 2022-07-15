<?php

namespace App\Policies\Users;


use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class CustomerPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::CUSTOMER;

}
