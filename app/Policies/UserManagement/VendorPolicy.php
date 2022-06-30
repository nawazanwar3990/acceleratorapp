<?php

namespace App\Policies\UserManagement;


use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;


class VendorPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::VENDOR;

}
